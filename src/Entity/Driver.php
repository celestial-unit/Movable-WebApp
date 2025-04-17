<?php

namespace App\Entity;

use App\Repository\DriverRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Transport;

#[ORM\Entity(repositoryClass: DriverRepository::class)]
#[ORM\Table(name: 'drivers')]
class Driver
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Name is required.")]
    private ?string $name = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotNull(message: "Licence number cannot be null.")]
    #[Assert\NotBlank(message: "Licence number is required.")]
    #[Assert\Regex(
        pattern: '/^[A-Za-z0-9]{3,}$/',
        message: "Licence number must be at least 3 alphanumeric characters and not just 0."
    )]
    private ?string $licenceNumber = null;
    




    public function getId(): ?int
    {
        return $this->id;
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

    public function getLicenceNumber(): ?string
    {
        return $this->licenceNumber;
    }

    public function setLicenceNumber(string $licenceNumber): self
    {
        $this->licenceNumber = $licenceNumber;
        return $this;
    }
    public function __toString(): string
    {
        return $this->getName(); // Or whatever string representation you want
    }
    
}
