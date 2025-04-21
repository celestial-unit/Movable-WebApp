<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Reservation;
use App\Entity\Transport;

#[ORM\Entity]
#[ORM\HasLifecycleCallbacks]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Reservation::class, inversedBy: 'tickets')]
    #[ORM\JoinColumn(name: 'reservation_id', referencedColumnName: 'id')]
    private ?Reservation $reservation = null;

    #[ORM\Column(name:'createdAt', type: 'datetime_immutable')]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: 'string')]
    private ?string $ticketNumber = null;

    #[ORM\Column(name:'issueDate', type: 'datetime_immutable')]
    private ?\DateTimeImmutable $issueDate = null;

    #[ORM\Column(name:'paymentMode', type: 'string')]
    private ?string $paymentMode = null;

    #[ORM\Column(type: 'string')]  
    private ?string $transport = null;

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $destination = null;

    #[ORM\Column(type: 'float')]
    private ?float $price = null;

    #[ORM\Column(type: 'string')]
    private ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReservation(): ?Reservation
    {
        return $this->reservation;
    }

    public function setReservation(?Reservation $reservation): self
    {
        $this->reservation = $reservation;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getTicketNumber(): ?string
    {
        return $this->ticketNumber;
    }

    public function setTicketNumber(string $ticketNumber): self
    {
        $this->ticketNumber = $ticketNumber;
        return $this;
    }

    public function getIssueDate(): ?\DateTimeImmutable
    {
        return $this->issueDate;
    }

    public function setIssueDate(?\DateTimeImmutable $issueDate): self
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    public function getPaymentMode(): ?string
    {
        return $this->paymentMode;
    }

    public function setPaymentMode(string $paymentMode): self
    {
        $this->paymentMode = $paymentMode;
        return $this;
    }

    public function getTransport(): ?string
    {
        return $this->transport;
    }

    public function setTransport(string $transport): self
    {
        $this->transport = $transport;
        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(?string $destination): self
    {
        $this->destination = $destination;
        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->ticketNumber = 'TKT-' . strtoupper(uniqid());
        $this->issueDate = new \DateTimeImmutable();
        $this->status = 'active';
        if (!$this->paymentMode) {
            $this->paymentMode = 'cash';
        }
        if (!$this->destination) {
            $this->destination = 'no location';
        }
    }

    public function __toString(): string
    {
        return $this->ticketNumber ?? 'New Ticket';
    }
}