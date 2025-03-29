<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 255)]
    private string $title;

    #[ORM\Column(type: 'string', length: 255)]
    private string $description;

    #[ORM\Column(type: 'integer')]
    private int $duration;

    #[ORM\Column(type: 'integer')]
    private int $type;

    #[ORM\Column(type: 'string', length: 255)]
    private string $status;

    #[ORM\Column(type: 'string', length: 255, name: 'dateevent')]
    private string $dateevent;

    #[ORM\Column(type: 'time', name: 'startEvent', nullable: true)]
    private ?DateTimeInterface $startEvent = null;

   // src/Entity/Event.php

#[ORM\OneToMany(
    mappedBy: 'event',
    targetEntity: EventRegistration::class,
    orphanRemoval: true // Auto-remove registrations if event is deleted
)]
private Collection $registrations;

    public function __construct()
    {
        $this->registrations = new ArrayCollection();
    }

    // Getters and Setters
    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;
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

    // Date handling methods
    public function getDateevent(): string
    {
        return $this->dateevent;
    }

    public function setDateevent(string $dateevent): self
    {
        $this->dateevent = $dateevent;
        return $this;
    }

    public function getDateeventDateTime(): DateTimeInterface
    {
        return DateTime::createFromFormat('Y-m-d', $this->dateevent) ?: new DateTime();
    }

    public function setDateeventFromDateTime(DateTimeInterface $date): self
    {
        $this->dateevent = $date->format('Y-m-d');
        return $this;
    }

    // Time handling
    public function getStartEvent(): ?DateTimeInterface
    {
        return $this->startEvent;
    }

    public function setStartEvent(?DateTimeInterface $startEvent): self
    {
        $this->startEvent = $startEvent;
        return $this;
    }

    // Relationship management
    public function getRegistrations(): Collection
    {
        return $this->registrations;
    }

    public function addRegistration(EventRegistration $registration): self
    {
        if (!$this->registrations->contains($registration)) {
            $this->registrations[] = $registration;
            $registration->setEvent($this);
        }
        return $this;
    }

    public function removeRegistration(EventRegistration $registration): self
    {
        if ($this->registrations->removeElement($registration)) {
            // set the owning side to null (unless already changed)
            if ($registration->getEvent() === $this) {
                $registration->setEvent(null);
            }
        }
        return $this;
    }

    // Formatting helpers for templates
    public function getFormattedDate(): string
    {
        return $this->getDateeventDateTime()->format('F j, Y');
    }

    public function getFormattedTime(): string
    {
        return $this->startEvent ? $this->startEvent->format('g:i A') : 'N/A';
    }
}