<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\ReservationRepository;
use App\Entity\Destination\Destination;
use Symfony\Component\Validator\Constraints as Assert;

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
    #[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    private ?User $user = null;

    #[ORM\Column(name: 'firstName', type: 'string', length: 255, nullable: false)]
    private ?string $firstName = null;

    #[ORM\Column(name: 'lastName', type: 'string', length: 255, nullable: false)]
    private ?string $lastName = null;

    #[ORM\Column(type: 'string', length: 180, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(type: 'datetime_immutable', nullable: false)]
    private ?\DateTimeImmutable $date = null;

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $location = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\Positive(message: "Seats must be a positive number")]
    #[Assert\NotBlank(message: "Please specify number of seats")]
    private ?int $seats = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $age = null;

    #[ORM\Column(type: 'string', length: 20, nullable: false)]
    private ?string $status = self::STATUS_PENDING;

    #[ORM\Column(name: 'created_at', type: 'datetime_immutable', nullable: false)]
    private ?\DateTimeImmutable $createdAt ;

    #[ORM\Column(name: 'updated_at', type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $updatedAt ;

    #[ORM\ManyToOne(targetEntity: Destination::class)]
    #[ORM\JoinColumn(
        name: 'destination_id', 
        referencedColumnName: 'id_destination',
        columnDefinition: "INTEGER NOT NULL COMMENT 'References id_destination column'"
    )]
    private ?Destination $destination = null;

    #[ORM\Column(name: 'paymentMode', type: 'string', nullable: false)]
    private ?string $paymentMode = null;

    #[ORM\ManyToOne(targetEntity: Driver::class)]
    #[ORM\JoinColumn(name: 'driver_id', referencedColumnName: 'id', nullable: false)]
    private ?Driver $driver = null;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $driverName = null;

    #[ORM\ManyToOne(targetEntity: Agent::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'agent_id', referencedColumnName: 'id', nullable: false)]
    private ?Agent $agent = null;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private ?string $agentType = null;

    #[ORM\ManyToOne(targetEntity: Transport::class)]
    #[ORM\JoinColumn(name: 'transport_id', referencedColumnName: 'id', nullable: true)]
    private ?Transport $transport = null;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $transportType = null;

    #[ORM\OneToMany(targetEntity: Ticket::class, mappedBy: 'reservation')]
    private Collection $tickets;

    public function __construct()
    {
        $this->tickets = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable();
        $this->status = self::STATUS_PENDING;
    }

    // ID
    public function getId(): ?int
    {
        return $this->id;
    }

    // User
    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    // FirstName
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    // LastName
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    // Email
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    // Date
    public function getDate(): ?\DateTimeImmutable
    {
        return $this->date;
    }

    public function setDate(\DateTimeImmutable $date): self
    {
        $this->date = $date;
        return $this;
    }

    // Location
    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;
        return $this;
    }

    // Seats
    public function getSeats(): ?int
    {
        return $this->seats;
    }

    public function setSeats(int $seats): self
    {
        $this->seats = $seats;
        return $this;
    }

    // Status
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

    // Timestamps
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

    // Destination
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

    // Payment Mode
    public function getPaymentMode(): ?string
    {
        return $this->paymentMode;
    }

    public function setPaymentMode(string $paymentMode): self
    {
        $this->paymentMode = $paymentMode;
        return $this;
    }

    // Driver
    public function getDriver(): ?Driver
    {
        return $this->driver;
    }

    public function setDriver(?Driver $driver): self
    {
        $this->driver = $driver;
        return $this;
    }

    public function getDriverName(): ?string
    {
        return $this->driverName;
    }

    public function setDriverName(?string $driverName): self
    {
        $this->driverName = $driverName;
        return $this;
    }

    // Agent
    public function getAgent(): ?Agent
    {
        return $this->agent;
    }

    public function setAgent(?Agent $agent): self
    {
        $this->agent = $agent;
        return $this;
    }

    public function getAgentType(): ?string
    {
        return $this->agentType;
    }

    public function setAgentType(?string $agentType): self
    {
        $this->agentType = $agentType;
        return $this;
    }

    // Transport
    public function getTransport(): ?Transport
    {
        return $this->transport;
    }

    public function setTransport(?Transport $transport): self
    {
        $this->transport = $transport;
        return $this;
    }

    public function getTransportType(): ?string
    {
        return $this->transportType;
    }

    public function setTransportType(?string $transportType): self
    {
        $this->transportType = $transportType;
        return $this;
    }

    // Tickets
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

    // Lifecycle callbacks
    #[ORM\PrePersist]
    #[ORM\PreUpdate]
    public function updateRelatedFields(): void
    {
        // Sync user information if user is set
        if ($this->user) {
            // Sync firstName if empty
            if (empty($this->firstName)) {
                $this->firstName = $this->user->getFirstName();
            }
            
            // Sync lastName if empty
            if (empty($this->lastName)) {
                $this->lastName = $this->user->getLastName();
            }
            
            // Sync email if empty
            if (empty($this->email)) {
                $this->email = $this->user->getEmail();
            }
        }

        // Sync transport type if transport is set
        if ($this->transport && empty($this->transportType)) {
            $this->transportType = $this->transport->getType();
        }

        // Sync driver name if driver is set
        if ($this->driver && empty($this->driverName)) {
            $this->driverName = $this->driver->getName();
        }

        // Sync agent type if agent is set
        if ($this->agent && empty($this->agentType)) {
            $this->agentType = $this->agent->getType();
        }
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    // Status changes
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

    // Helper methods
    

    public function getUserEmail(): ?string
    {
        return $this->user?->getEmail();
    }

    public function getDestinationName(): string
    {
        return $this->destination?->getName() ?? 'N/A';
    }

    public function getTransportDetails(): string
    {
        try {
            return $this->transport?->getType() ?? 'Not specified';
        } catch (\Doctrine\ORM\EntityNotFoundException $e) {
            return 'Transport deleted';
        }
    }

    public function getAgentName(): string
    {
        return $this->agent?->getName() ?? 'N/A';
    }

    public function getDriverFullName(): string
    {
        return $this->driverName ?? ($this->driver?->getName() ?? 'N/A');
    }
}