<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Title is required.")]
    #[Assert\Length(
        min: 5,
        minMessage: "Title must be at least 5 characters long.",
        max: 255,
        maxMessage: "Title cannot be longer than 255 characters."
    )]
    private string $title;
    

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Description is required.")]
    #[Assert\Length(
        min: 5,
        minMessage: "Description must be at least 5 characters long.",
        max: 500,
        maxMessage: "Description cannot be longer than 500 characters."
    )]
    private string $description;
    

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank(message: "Duration is required.")]
    #[Assert\Positive(message: "Duration must be a positive number.")]
    private int $duration;

    #[ORM\Column(type: 'integer')]
#[Assert\NotBlank(message: "Type is required.")]
#[Assert\GreaterThanOrEqual(
    value: 30,
    message: "Type must be at least 30."
)]
private int $type;


#[ORM\Column(type: 'string', length: 255)]
#[Assert\NotBlank(message: "Governorate is required.")]
#[Assert\Choice(
    choices: [
        'Ariana', 'Béja', 'Ben Arous', 'Bizerte', 'Gabès', 'Gafsa', 
        'Jendouba', 'Kairouan', 'Kasserine', 'Kébili', 'Kef', 'Mahdia', 
        'Manouba', 'Medenine', 'Monastir', 'Nabeul', 'Sfax', 'Sidi Bouzid', 
        'Siliana', 'Sousse', 'Tataouine', 'Tozeur', 'Tunis', 'Zaghouan'
    ],
    message: "Invalid governorate selected."
)]
private string $status;


    #[ORM\Column(type: 'string', length: 255, name: 'dateevent')]
    #[Assert\NotBlank(message: "Date is required.")]
    #[Assert\Regex(
        pattern: "/^\d{4}-\d{2}-\d{2}$/",
        message: "Date must be in YYYY-MM-DD format."
    )]
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