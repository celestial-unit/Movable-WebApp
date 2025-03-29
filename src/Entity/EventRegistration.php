<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\EventRegistrationRepository;

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
private ?Event $event = null;// Nullable property

    #[ORM\Column(type: 'string', length: 255)]
    private string $registration_date;

    #[ORM\Column(type: 'string', length: 255)]
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