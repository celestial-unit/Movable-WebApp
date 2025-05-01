<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\ReservationRepository;
use App\Entity\Destination\Destination;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
#[ORM\Table(name: 'reservation')]
#[ORM\HasLifecycleCallbacks]
class Reservation
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_APPROVED = 'approved';
    public const STATUS_REJECTED = 'rejected';
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'id', nullable: false,onDelete: 'CASCADE')]
    private ?User $user = null;

    #[ORM\Column(type: 'datetime_immutable', nullable: false)]
    private ?\DateTimeImmutable $date = null;

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $location = null;

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $seats = null;

    #[ORM\Column(type: 'string', length: 20, nullable: false)]
    private ?string $status = self::STATUS_PENDING;

    #[ORM\Column(name: 'created_at', type: 'datetime_immutable', nullable: false)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(name: 'updated_at', type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToOne(targetEntity: Destination::class)]
    #[ORM\JoinColumn(
        name: 'destination_id', 
        referencedColumnName: 'id_destination',
        columnDefinition: "INTEGER NOT NULL COMMENT 'References id_destination column'"
    )]

    private ?Destination $destination = null;
    #[ORM\Column(name:'paymentMode',type: 'string', nullable: false)]
    private ?string $paymentMode = null;

    public function getPaymentMode(): ?string
    {
        return $this->paymentMode;
    }

    public function setPaymentMode(string $paymentMode): self
    {
        $this->paymentMode = $paymentMode;
        return $this;
    }

    #[ORM\JoinColumn(name: 'driver_id', referencedColumnName: 'id', nullable: true)]
    private ?Driver $driver = null;
    
    public function getDriver(): ?Driver
    {
        return $this->driver;
    }
    
    public function setDriver(?Driver $driver): self
    {
        $this->driver = $driver;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Agent::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'agent_id', referencedColumnName: 'id', nullable: true)]
    private ?Agent $agent = null;

    #[ORM\ManyToOne(targetEntity: Transport::class)]
    #[ORM\JoinColumn(name: 'transport_id', referencedColumnName: 'id', nullable: true)]
    private ?Transport $transport = null;

    #[ORM\OneToMany(targetEntity: Ticket::class, mappedBy: 'reservation')]
    private Collection $tickets;

    public function __construct()
    {
        $this->tickets = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable();
        $this->status = self::STATUS_PENDING;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }
    public function getSafeUser(): User
{
    
        if ($this->user === null) {
            $deletedUser = new User();
            $deletedUser->setFirstName('Deleted');
            $deletedUser->setLastName('User');
            $deletedUser->setEmail('deleted@example.com');
            $deletedUser->setRole('USER');
            return $deletedUser;
        }
        return $this->user;
    }


    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getDate(): ?\DateTimeImmutable
    {
        return $this->date;
    }

    public function setDate(\DateTimeImmutable $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getSeats(): ?int
    {
        return $this->seats;
    }

    public function setSeats(int $seats): self
    {
        $this->seats = $seats;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        if (!in_array($status, [self::STATUS_PENDING, self::STATUS_APPROVED, self::STATUS_REJECTED])) {
            throw new \InvalidArgumentException('Invalid status value');
        }
        $this->status = $status;
        return $this;
    }

    public function isPending(): bool
    {
        return $this->status === self::STATUS_PENDING;
    }

    public function isApproved(): bool
    {
        return $this->status === self::STATUS_APPROVED;
    }

    public function isRejected(): bool
    {
        return $this->status === self::STATUS_REJECTED;
    }

    // Duplicate methods removed. The original methods are retained earlier in the class.

   

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }


    public function getDestination(): ?Destination
    {
        return $this->destination;
    }

    public function setDestination(?Destination $destination): self
    {
        $this->destination = $destination;
        if ($destination) {
            $this->location = $destination->getLocation();
        }
        return $this;
    }

    public function getTransport(): ?Transport
    {
        return $this->transport;
    }

    public function setTransport(?Transport $transport): self
    {
        $this->transport = $transport;
        return $this;
    }

    public function getAgent(): ?Agent
    {
        return $this->agent;
    }

    public function setAgent(?Agent $agent): self
    {
        $this->agent = $agent;
        return $this;
    }

    /**
     * @return Collection<int, Ticket>
     */
    public function getTickets(): Collection
    {
        return $this->tickets;
    }


    public function addTicket(Ticket $ticket): self
    {
        if (!$this->tickets->contains($ticket)) {
            $this->tickets->add($ticket);
            $ticket->setReservation($this);
        }
        return $this;
    }

    public function removeTicket(Ticket $ticket): self
    {
        if ($this->tickets->removeElement($ticket)) {
            if ($ticket->getReservation() === $this) {
                $ticket->setReservation(null);
            }
        }
        return $this;
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function approve(): self
    {
        $this->status = self::STATUS_APPROVED;
        $this->updatedAt = new \DateTimeImmutable();
        return $this;
    }

    public function reject(): self
    {
        $this->status = self::STATUS_REJECTED;
        $this->updatedAt = new \DateTimeImmutable();
        return $this;
    
}
}