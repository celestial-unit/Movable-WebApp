<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Office
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string')]
    private ?string $name = null;

    #[ORM\Column(type: 'string')]
    private ?string $location = null;

    #[ORM\Column(type: 'string')]
    private ?string $contactNumber = null;

    #[ORM\OneToMany(targetEntity: Agent::class, mappedBy: 'office')]
    private Collection $agents;

    public function __construct()
    {
        $this->agents = new ArrayCollection();
    }

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

    public function getContactNumber(): ?string
    {
        return $this->contactNumber;
    }

    public function setContactNumber(string $contactNumber): self
    {
        $this->contactNumber = $contactNumber;
        return $this;
    }

    /**
     * @return Collection<int, Agent>
     */
    public function getAgents(): Collection
    {
        return $this->agents;
    }

    public function addAgent(Agent $agent): self
    {
        if (!$this->agents->contains($agent)) {
            $this->agents->add($agent);
            $agent->setOffice($this);
        }
        return $this;
    }

    public function removeAgent(Agent $agent): self
    {
        if ($this->agents->removeElement($agent)) {
            if ($agent->getOffice() === $this) {
                $agent->setOffice(null);
            }
        }
        return $this;
    }
}
