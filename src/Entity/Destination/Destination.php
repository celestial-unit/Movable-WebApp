<?php

namespace App\Entity\Destination;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
class Destination
{
    #[ORM\Id]
    #[ORM\GeneratedValue ]
    #[ORM\Column(type: 'integer')] // Changed from string to integer
    private ?int $idDestination = null; // Changed property name to camelCase

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "The name field should not be blank.")]
    #[Assert\Length(min: 3, max: 255)]
    #[Assert\Regex(pattern: "/^[a-zA-Z\s]+$/",message: "Only contain letters and spaces.")]
    private string $name;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank (message: "Location should not be blank.")]
    #[Assert\Regex(pattern: "/^[a-zA-Z\s]+$/",message: "Only contain letters and spaces.")]
    private string $location;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank (message: "Category should not be blank.")]
    #[Assert\Regex(pattern: "/^[a-zA-Z\s]+$/",message: "Only contain letters and spaces.")]
    private string $category;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank (message: "Status should not be blank.")]
    #[Assert\Regex(pattern: "/^[a-zA-Z\s]+$/",message: "Only contain letters and spaces.")]
    private string $status;

    #[ORM\Column(type: 'text')] // Changed to text type for long content
    #[Assert\NotBlank (message: "Routes should not be blank.")]
    #[Assert\Regex(pattern: "/^[a-zA-Z0-9]+$/",message: "Only contain letters and spaces.")]
    private ?string $routes = null; // Made nullable

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\NotBlank (message: "Contact information should not be blank.")]
    #[Assert\Regex(pattern: "/^[+]?[0-9\s-]{8,}$/",message: "Invalid phone number format (e.g., +123 456-789)")]
    private ?string $contactInformation = null; // Changed to camelCase

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\File(
        maxSize: '2M',
        mimeTypes: ['image/jpeg', 'image/jpg'],
        mimeTypesMessage: 'Please upload a valid JPG image'
    )]
    #[Assert\Regex(
        pattern: '/\.(jpe?g)$/i',
        message: 'Only JPG images are allowed'
    )]
    private ?string $image = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    #[Assert\Range(min: 1,max: 5,notInRangeMessage: "Rating must be between 1 and 5")]
    private ? int $rating = null; // Changed to integer

    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\Regex(pattern: "/^[a-zA-Z]+$/",message: "Only contain letters and spaces.")]
    private ?string $description = null;

    // Getters and setters updated to match property names
    public function getIdDestination(): ?int
    {
        return $this->idDestination;
    }

    public function setIdDestination(int $idDestination): self
    {
        $this->idDestination = $idDestination;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
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

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;
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

    public function getRoutes(): ?string
    {
        return $this->routes;
    }

    public function setRoutes(?string $routes): self
    {
        $this->routes = $routes;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): self
    {
        $this->rating = $rating;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    // ... keep other getters/setters the same but update any references to:
    // contact_information -> contactInformation
    // id_destination -> idDestination

    // Example for contactInformation:
    public function getContactInformation(): ?string
    {
        return $this->contactInformation;
    }

    public function setContactInformation(?string $contactInformation): self
    {
        $this->contactInformation = $contactInformation;
        return $this;
 
   }

   #[ORM\OneToMany(
    targetEntity: Parkingspot::class, 
    mappedBy: 'id_destination',
    cascade: ['persist', 'remove']
)]
private Collection $parkingSpots;

public function __construct()
{
    $this->parkingSpots = new ArrayCollection();
}

public function getParkingSpots(): Collection
    {
        return $this->parkingSpots;
    }


   

    // Change the addParkingSpot method
public function addParkingSpot(Parkingspot $parkingSpot): static
{
    if (!$this->parkingSpots->contains($parkingSpot)) {
        $this->parkingSpots->add($parkingSpot);
        $parkingSpot->setIdDestination($this);  // Changed from setIdDestination()
    }
    return $this;
}

// Change the removeParkingSpot method
public function removeParkingSpot(Parkingspot $parkingSpot): static
{
    if ($this->parkingSpots->removeElement($parkingSpot)) {
        if ($parkingSpot->getIdDestination() === $this) {  // Changed from getIdDestination()
            $parkingSpot->setIdDestination(null);  // Changed from setIdDestination()
        }
    }
    return $this;
}

}