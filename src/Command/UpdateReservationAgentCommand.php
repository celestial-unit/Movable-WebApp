<?php
namespace App\Command;

use App\Entity\Agent;
use App\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:update-reservation-agent',
    description: 'Updates a reservation with an invalid agent reference to use a valid agent'
)]
class UpdateReservationAgentCommand extends Command
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function configure(): void
    {
        $this->setHelp('This command updates reservation ID 25 to use agent ID 10 instead of the invalid agent ID 33.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        // Find the reservation with ID 25
        $reservation = $this->entityManager->getRepository(Reservation::class)->find(25);
        
        if (!$reservation) {
            $io->error('Reservation with ID 25 not found.');
            return Command::FAILURE;
        }
        
        // Find the agent with ID 10 (Imen Dridi)
        $agent = $this->entityManager->getRepository(Agent::class)->find(10);
        
        if (!$agent) {
            $io->error('Agent with ID 10 not found.');
            return Command::FAILURE;
        }
        
        // Display the current state
        $io->section('Current Reservation State');
        $io->table(
            ['ID', 'Date', 'Location', 'Seats', 'Status', 'Current Agent ID'],
            [
                [
                    $reservation->getId(),
                    $reservation->getDate()->format('Y-m-d H:i:s'),
                    $reservation->getLocation(),
                    $reservation->getSeats(),
                    $reservation->getStatus(),
                    $reservation->getAgent() ? $reservation->getAgent()->getId() : 'NULL'
                ]
            ]
        );
        
        // Update the reservation with the valid agent
        $reservation->setAgent($agent);
        
        // Save changes to the database
        // This will automatically trigger lifecycle callbacks due to the #[ORM\PreUpdate] annotations
        $this->entityManager->flush();
        
        // Verify the update
        $io->section('Updated Reservation State');
        $io->table(
            ['ID', 'Date', 'Location', 'Seats', 'Status', 'New Agent ID', 'Agent Name'],
            [
                [
                    $reservation->getId(),
                    $reservation->getDate()->format('Y-m-d H:i:s'),
                    $reservation->getLocation(),
                    $reservation->getSeats(),
                    $reservation->getStatus(),
                    $reservation->getAgent()->getId(),
                    $reservation->getAgent()->getName()
                ]
            ]
        );
        
        $io->success('Reservation ID 25 has been successfully updated to use agent ID 10 (Imen Dridi).');
        
        return Command::SUCCESS;
    }
}

