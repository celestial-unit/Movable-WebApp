<?php

namespace App\Entity;

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

  // src/Entity/EventRegistration.php

// src/Entity/EventRegistration.php

// src/Entity/EventRegistration.php

// src/Entity/EventRegistration.php

// src/Entity/EventRegistration.php
#[ORM\ManyToOne(
    targetEntity: Event::class, 
    inversedBy: 'registrations'
)]
#[ORM\JoinColumn(
    name: 'event_id', 
    referencedColumnName: 'id', 
    nullable: false
)]
#[Assert\NotNull(message: "Event cannot be null.")]
private ?Event $event = null;// Nullable property



// ...

#[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Registration date is required.")]
    #[Assert\Regex(
        pattern: "/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/",
        message: "Registration date must be in YYYY-MM-DD HH:MM:SS format."
    )]
    #[Assert\DateTime(
        format: 'Y-m-d H:i:s',
        message: 'The date "{{ value }}" is invalid or incorrectly formatted.'
    )]
    #[Assert\Callback([self::class, 'validateRegistrationDate'])]
    private string $registration_date;

    // Combined validation method
    public static function validateRegistrationDate(
        string $value, 
        ExecutionContextInterface $context
    ): void {
        // 1. Check if empty (handled by NotBlank)
        if (empty($value)) return;

        // 2. Validate future date
        $date = \DateTime::createFromFormat('Y-m-d H:i:s', $value);
        $now = new \DateTime();
        if ($date <= $now) {
            $context->buildViolation('The registration date must be in the future.')
                ->atPath('registration_date')
                ->addViolation();
        }

        // 3. Validate matches event date
        $registration = $context->getObject();
        if (!$registration instanceof EventRegistration) return;

        $eventDate = $registration->getEvent()->getDateevent();
        $eventDateTime = \DateTime::createFromFormat('Y-m-d', $eventDate);

        if ($date->format('Y-m-d') !== $eventDateTime->format('Y-m-d')) {
            $context->buildViolation('Registration must occur on the event date: {{ eventDate }}')
                ->setParameter('{{ eventDate }}', $eventDate)
                ->atPath('registration_date')
                ->addViolation();
        }
    }

#[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Status is required.")]
    #[Assert\Choice(
        choices: ['Pending', 'Confirmed', 'Cancelled'],
        message: "Status must be 'Pending', 'Confirmed', or 'Cancelled'."
    )]
    private string $status;

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

    public function getRegistrationDate(): string
    {
        return $this->registration_date;
    }

    public function setRegistrationDate(string $registration_date): self
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