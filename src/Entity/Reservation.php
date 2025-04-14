<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\ReservationRepository;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
#[ORM\Table(name: 'reservation')]


class Reservation
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_APPROVED = 'approved';
    public const STATUS_REJECTED = 'rejected';
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

    #[ORM\Column(name:'firstName',type: 'string', nullable: false)]
    private ?string $firstName = null;

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    #[ORM\Column(name:'email',type: 'string', nullable: false)]
    private ?string $email = null;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $date = null;

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $location = null;

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;
        return $this;
    }
    #[ORM\Column(name:'transportType',type: 'string', length: 255, nullable: true)]
    private ?string $transportType = null;

    #[ORM\Column(name:'driverName',type: 'string', length: 55, nullable: true)]
    private ?string $driverName = null;

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $seats = null;
    public function getTransportType(): ?string
    {
        return $this->transportType;
    }

    public function setTransportType(?string $transportType): self
    {
        $this->transportType = $transportType;
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


    public function getSeats(): ?int
    {
        return $this->seats;
    }

    public function setSeats(int $seats): self
    {
        $this->seats = $seats;
        return $this;
    }

    #[ORM\Column(name:'agentType',type: 'string', nullable: false)]
    private ?string $agentType = null;

    public function getAgentType(): ?string
    {
        return $this->agentType;
    }

    public function setAgentType(string $agentType): self
    {
        $this->agentType = $agentType;
        return $this;
    }

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


    #[ORM\Column(name:'age',type: 'integer', nullable: false)]
    private ?int $age = null;

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }

    #[ORM\Column(name:'lastName',type: 'string', nullable: false)]
    private ?string $lastName = null;

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    #[ORM\Column(name:'status',type: 'string', nullable: false)]
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

    #[ORM\Column(name: 'created_at',type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $setCreatedAt = null;

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->setCreatedAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    #[ORM\Column(name: 'updated_at',type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Transport::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'transport_id', referencedColumnName: 'id')]
    private ?Transport $transport = null;  // lowercase to match getters/setters

    #[ORM\ManyToOne(targetEntity: Driver::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'driver_id', referencedColumnName: 'id')]
    private ?Driver $driver = null;  // lowercase

    #[ORM\ManyToOne(targetEntity: Agent::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'agent_id', referencedColumnName: 'id')]
    private ?Agent $agent = null;  // lowercase and fixed target entity

    // Either keep this string property OR use entity relation below (choose one)
    #[ORM\ManyToOne(targetEntity: Destination::class)]
    #[ORM\JoinColumn(name: 'destination_id', referencedColumnName: 'id')]
    private ?Destination $destination = null;  // lowercase


    /**
     * @return Collection<int, Ticket>
     */
    public function getTickets(): Collection
    {
        if (!$this->tickets instanceof Collection) {
            $this->tickets = new ArrayCollection();
        }
        return $this->tickets;
    }

    public function addTicket(Ticket $ticket): self
    {
        if (!$this->getTickets()->contains($ticket)) {
            $this->getTickets()->add($ticket);
        }
        return $this;
    }

    public function removeTicket(Ticket $ticket): self
    {
        $this->getTickets()->removeElement($ticket);
        return $this;
    }

    public function getTransport(): ?Transport
    {
        return $this->transport;
    }

    public function setTransport(?Transport $transport): self
    {
        $this->transport = $transport;
        $this->TransportType = $transport ? $transport->getType() : null;
        return $this;
        
    }

    public function getDriver(): ?Driver
    {
        return $this->driver;
    }

    public function setDriver(?Driver $driver): self
    {
        $this->driver = $driver;
        $this->DriverName = $driver ? $driver->getName() : null;
        return $this;
    }

    public function getAgent(): ?Agent
    {
        return $this->agent;
    }

    public function setAgent(?Agent $agent): self
    {
        $this->agent = $agent;
        $this->AgentType = $agent ? $agent->getType() : null;
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
            $this->setLocation($destination->getLocation());
        }
        $this->Location = $destination ? $destination->getLocation() : null;
        return $this;
    
    }
}
