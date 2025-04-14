<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\EventRepository;

#[ORM\Entity(repositoryClass: EventRepository::class)]
#[ORM\Table(name: 'event')]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $title = null;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $description = null;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $duration = null;

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $type = null;

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $status = null;

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $dateevent = null;

    public function getDateevent(): ?string
    {
        return $this->dateevent;
    }

    public function setDateevent(string $dateevent): self
    {
        $this->dateevent = $dateevent;
        return $this;
    }

    #[ORM\Column(type: 'time', nullable: true)]
    private ?string $startEvent = null;

    public function getStartEvent(): ?string
    {
        return $this->startEvent;
    }

    public function setStartEvent(?string $startEvent): self
    {
        $this->startEvent = $startEvent;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: EventRegistration::class, mappedBy: 'event')]
    private Collection $eventRegistrations;

    /**
     * @return Collection<int, EventRegistration>
     */
    public function getEventRegistrations(): Collection
    {
        if (!$this->eventRegistrations instanceof Collection) {
            $this->eventRegistrations = new ArrayCollection();
        }
        return $this->eventRegistrations;
    }

    public function addEventRegistration(EventRegistration $eventRegistration): self
    {
        if (!$this->getEventRegistrations()->contains($eventRegistration)) {
            $this->getEventRegistrations()->add($eventRegistration);
        }
        return $this;
    }

    public function removeEventRegistration(EventRegistration $eventRegistration): self
    {
        $this->getEventRegistrations()->removeElement($eventRegistration);
        return $this;
    }

}
