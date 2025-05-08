<?php
namespace App\Command;

use App\Entity\Destination\Parkingspot;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:update-parking-availability', // Command name
    description: 'Updates parking spot availability based on freeAfter timestamp.'
)]
class UpdateParkingAvailabilityCommand extends Command
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $currentTime = new \DateTime();

        $parkingSpots = $this->entityManager->getRepository(Parkingspot::class)->findBy([       
            'isAvailable' => 'no'
        ]);

        foreach ($parkingSpots as $spot) {
            if ($spot->getFreeAfter() <= $currentTime) {
                $spot->setIsAvailable('yes');
                $spot->setFreeAfter(null);
                $this->entityManager->flush();
            }
        }

        $output->writeln('Parking availability updated successfully.');
        return Command::SUCCESS;
    }
}
