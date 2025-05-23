<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\OfficeRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: OfficeRepository::class)]
#[ORM\Table(name: 'office')]
class Office
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
    #[Assert\NotBlank(message: "Name is required.")]
    #[Assert\Length(min: 2, max: 100)]
    private ?string $name = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Location is required.")]
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

    #[ORM\Column(type: 'integer', nullable: true)]
    #[Assert\PositiveOrZero(message: "Number of agents must be 0 or more.")]
    private ?int $agents = null;

    public function getAgents(): ?int
    {
        return $this->agents;
    }

    public function setAgents(?int $agents): self
    {
        $this->agents = $agents;
        return $this;
    }

    #[ORM\Column(type: 'string', length: 8, nullable: false)]
    #[Assert\NotBlank(message: "Phone is required.")]
    #[Assert\Length(
        min: 8,
        max: 8,
        exactMessage: "Phone must contain exactly 8 digits."
    )]
    #[Assert\Regex(
        pattern: "/^[0-9]{8}$/",
        message: "Phone must contain only digits."
    )]
    private ?string $phone = null;
    
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }
    



}

