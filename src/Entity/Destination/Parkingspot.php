<?php

namespace App\Entity\Destination;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
class Parkingspot
{

   /* #[ORM\ManyToOne(targetEntity: Destination::class)]
    #[ORM\JoinColumn(name: 'id_destination', referencedColumnName: 'id_destination')]
    private ?Destination $id_destination = null;*/

    #[ORM\ManyToOne(targetEntity: Destination::class, inversedBy: "parkingSpots")]
    #[ORM\JoinColumn(name: "id_destination", referencedColumnName: "id")]
    private ?Destination $id_destination = null;
    
    #[ORM\Id]
    #[ORM\GeneratedValue (strategy: "IDENTITY")]
    #[ORM\Column(type: 'integer')]
    private int $id_parking;

    #[ORM\Column(name: 'is_accessible',type: 'string')]
    #[Assert\NotBlank(message: "Accessibility field cannot be blank.")]
    #[Assert\Choice(choices: ["yes", "no"], message: "Accessibility must be 'yes' or 'no'.")]
    private string $isAccessible;

    #[ORM\Column(name:'is_available',type: 'string')]
    #[Assert\NotBlank(message: "Availability field cannot be blank.")]
    #[Assert\Choice(choices: ["yes", "no"], message: "Availability must be 'yes' or 'no'.")]
    private string $isAvailable;

    #[ORM\Column(name:'spot_number',type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Spot number cannot be blank.")]
    #[Assert\Length(max: 255, maxMessage: "Spot number cannot be longer than 255 characters.")]
    private string $spotNumber;

    #[ORM\Column(name:'parking_fees',type: 'string')]
    #[Assert\NotBlank(message: "Parking fees cannot be blank.")]
    #[Assert\Regex(pattern: "/^\d+(\.\d{1,2})?$/", message: "Fees must be a valid number (e.g., 2.50).")]

    private string $parkingFees;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank(message: "Size field cannot be blank.")]
    #[Assert\Regex(
        pattern: '/^\d+$/',
        message: "Parking fees must be a valid number."
    )]
    private string $size;

    #[ORM\Column(type: 'string', length: 65535)]
    #[Assert\NotBlank(message: "Notes cannot be blank.")]
    private string $notes;


    public function getId_parking(): ?int
    {
        return $this->id_parking;
    }

    public function setId_parking(int $id_parking): self
    {
        $this->id_parking = $id_parking;
        return $this;
    }

    public function getIsAccessible(): ?string
    {
        return $this->isAccessible;
    }

    public function setIsAccessible(string $isAccessible): self
    {
        $this->isAccessible = $isAccessible;
        return $this;
    }

    public function getIsAvailable(): ?string
    {
        return $this->isAvailable;
    }

    public function setIsAvailable(string $isAvailable): self
    {
        $this->isAvailable = $isAvailable;
        return $this;
    }

    public function getSpotNumber(): ?string
    {
        return $this->spotNumber;
    }

    public function setSpotNumber(string $spotNumber): self
    {
        $this->spotNumber = $spotNumber;
        return $this;
    }

    public function getParkingFees(): ?string
    {
        return $this->parkingFees;
    }

    public function setParkingFees(string $parkingFees): self
    {
        $this->parkingFees = $parkingFees;
        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;
        return $this;
    }

    public function getIdDestination(): ?Destination
{
    return $this->id_destination;
}


    public function setIdDestination(?Destination $id_destination): self
{
    $this->id_destination = $id_destination;
    return $this;
}

}
