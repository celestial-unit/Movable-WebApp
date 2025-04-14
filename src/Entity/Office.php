<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\OfficeRepository;

#[ORM\Entity(repositoryClass: OfficeRepository::class)]
class Office
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $location = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $agentCount = null;

    #[ORM\Column(type: 'integer')]
    private ?int $phone = null;

    #[ORM\OneToMany(targetEntity: Agent::class, mappedBy: 'office')]
    private Collection $officeAgents;

    public function __construct()
    {
        $this->officeAgents = new ArrayCollection();
    }

    // Getters and Setters
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

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getAgentCount(): ?int
    {
        return $this->agentCount;
    }

    public function setAgentCount(?int $agentCount): self
    {
        $this->agentCount = $agentCount;
        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return Collection<int, Agent>
     */
    public function getOfficeAgents(): Collection
    {
        return $this->officeAgents;
    }

    public function addOfficeAgent(Agent $officeAgent): self
    {
        if (!$this->officeAgents->contains($officeAgent)) {
            $this->officeAgents->add($officeAgent);
            $officeAgent->setOffice($this);
        }
        return $this;
    }

    public function removeOfficeAgent(Agent $officeAgent): self
    {
        if ($this->officeAgents->removeElement($officeAgent)) {
            if ($officeAgent->getOffice() === $this) {
                $officeAgent->setOffice(null);
            }
        }
        return $this;
    }
}