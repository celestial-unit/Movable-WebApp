<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\ParkingspotRepository;

#[ORM\Entity(repositoryClass: ParkingspotRepository::class)]
#[ORM\Table(name: 'parkingspot')]
class Parkingspot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_parking = null;

    public function getId_parking(): ?int
    {
        return $this->id_parking;
    }

    public function setId_parking(int $id_parking): self
    {
        $this->id_parking = $id_parking;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $is_accessible = null;

    public function getIs_accessible(): ?string
    {
        return $this->is_accessible;
    }

    public function setIs_accessible(string $is_accessible): self
    {
        $this->is_accessible = $is_accessible;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $is_available = null;

    public function getIs_available(): ?string
    {
        return $this->is_available;
    }

    public function setIs_available(string $is_available): self
    {
        $this->is_available = $is_available;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $spot_number = null;

    public function getSpot_number(): ?string
    {
        return $this->spot_number;
    }

    public function setSpot_number(string $spot_number): self
    {
        $this->spot_number = $spot_number;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $parking_fees = null;

    public function getParking_fees(): ?string
    {
        return $this->parking_fees;
    }

    public function setParking_fees(string $parking_fees): self
    {
        $this->parking_fees = $parking_fees;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $size = null;

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;
        return $this;
    }

    #[ORM\Column(type: 'text', nullable: false)]
    private ?string $notes = null;

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $id_destination = null;

    public function getId_destination(): ?int
    {
        return $this->id_destination;
    }

    public function setId_destination(?int $id_destination): self
    {
        $this->id_destination = $id_destination;
        return $this;
    }

    public function getIdParking(): ?int
    {
        return $this->id_parking;
    }

    public function getIsAccessible(): ?string
    {
        return $this->is_accessible;
    }

    public function setIsAccessible(string $is_accessible): static
    {
        $this->is_accessible = $is_accessible;

        return $this;
    }

    public function getIsAvailable(): ?string
    {
        return $this->is_available;
    }

    public function setIsAvailable(string $is_available): static
    {
        $this->is_available = $is_available;

        return $this;
    }

    public function getSpotNumber(): ?string
    {
        return $this->spot_number;
    }

    public function setSpotNumber(string $spot_number): static
    {
        $this->spot_number = $spot_number;

        return $this;
    }

    public function getParkingFees(): ?string
    {
        return $this->parking_fees;
    }

    public function setParkingFees(string $parking_fees): static
    {
        $this->parking_fees = $parking_fees;

        return $this;
    }

    public function getIdDestination(): ?int
    {
        return $this->id_destination;
    }

    public function setIdDestination(?int $id_destination): static
    {
        $this->id_destination = $id_destination;

        return $this;
    }

}
