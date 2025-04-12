<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\EventRegistrationRepository;
use Symfony\Component\Validator\Constraints as Assert;

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

#[ORM\Column(type: 'string', length: 255)]
#[Assert\NotBlank(message: "Registration date is required.")]
#[Assert\Regex(
    pattern: "/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/",
    message: "Registration date must be in YYYY-MM-DD HH:MM:SS format."
)]
private string $registration_date;

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