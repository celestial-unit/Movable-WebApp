<?php

namespace App\Entity;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\EventRegistrationRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity(repositoryClass: EventRegistrationRepository::class)]
class EventRegistration
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\ManyToOne(
        targetEntity: Event::class, 
        inversedBy: 'registrations'
    )]
    #[ORM\JoinColumn(
        name: 'event_id', 
        referencedColumnName: 'id', 
        nullable: true,
        onDelete: "SET NULL"
    )]
    private ?Event $event = null;
    
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: true, onDelete: "SET NULL")]
    private ?User $user = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Registration date is required.")]
    private ?string $registration_date = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Status is required.")]
    #[Assert\Choice(
        choices: ['Pending', 'Confirmed', 'Cancelled'],
        message: "Status must be 'Pending', 'Confirmed', or 'Cancelled'."
    )]
    private string $status = 'Pending';

    // VALIDATION METHODS

    #[Assert\Callback]
    public function validateRegistrationDate(ExecutionContextInterface $context): void
    {
        if (!$this->event) {
            // Skip validation if the event is null (will be handled by other constraints)
            return;
        }
        
        try {
            // Get the event date as a string
            $eventDateStr = $this->event->getDateevent();
            if (!$eventDateStr) {
                $context->buildViolation('Event date is missing.')
                    ->atPath('event')
                    ->addViolation();
                return;
            }

            // Parse the event date string to a DateTime object
            $eventDate = \DateTime::createFromFormat('Y-m-d', $eventDateStr);
            if (!$eventDate) {
                $context->buildViolation('Invalid event date format: ' . $eventDateStr)
                    ->atPath('event')
                    ->addViolation();
                return;
            }
            
            // Get current date for comparison
            $now = new \DateTime();
            
            // Compare event date with current date
            if ($eventDate < $now) {
                $context->buildViolation('Cannot register for a past event.')
                    ->atPath('registration_date')
                    ->addViolation();
            }
        } catch (\Exception $e) {
            $context->buildViolation('Error validating date: ' . $e->getMessage())
                ->atPath('registration_date')
                ->addViolation();
        }
    }
    
    /**
     * Ensures the registration has either a user or valid contact information
     */
    #[Assert\Callback]
    public function validateRegistrationOwner(ExecutionContextInterface $context): void
    {
        // Allow registrations with no user for admin-created registrations
        return;
    }

    // GETTERS AND SETTERS

    public function getId(): int
    {
        return $this->id;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;
        return $this;
    }
    
    public function getUser(): ?User
    {
        return $this->user;
    }
    
    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getRegistrationDate(): ?string
    {
        return $this->registration_date;
    }

    public function setRegistrationDate(?string $registration_date): self
    {
        $this->registration_date = $registration_date;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
}
