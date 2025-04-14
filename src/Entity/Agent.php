<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\AgentRepository;

#[ORM\Entity(repositoryClass: AgentRepository::class)]
class Agent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $email = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $type = null;

    #[ORM\Column(type: 'integer')]
    private ?int $phone = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $birthdate = null;

    #[ORM\Column(name:"pictureP",type: 'string', length: 255)]
    private ?string $pictureP = null;

    #[ORM\ManyToOne(targetEntity: Office::class, inversedBy: 'officeAgents')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Office $office = null;

    #[ORM\OneToMany(targetEntity: Rate::class, mappedBy: 'agent')]
    private Collection $rates;

    /**
     * @var Collection<int, Reservation>
     */
    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'Agent')]
    private Collection $reservations;

    public function __construct()
    {
        $this->rates = new ArrayCollection();
        $this->reservations = new ArrayCollection();
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
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

    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->birthdate;
    }

    public function setBirthdate(\DateTimeInterface $birthdate): self
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function getPictureP(): ?string
    {
        return $this->pictureP;
    }

    public function setPictureP(string $pictureP): self
    {
        $this->pictureP = $pictureP;
        return $this;
    }

    public function getOffice(): ?Office
    {
        return $this->office;
    }

    public function setOffice(?Office $office): self
    {
        $this->office = $office;
        return $this;
    }

    /**
     * @return Collection<int, Rate>
     */
    public function getRates(): Collection
    {
        return $this->rates;
    }

    public function addRate(Rate $rate): self
    {
        if (!$this->rates->contains($rate)) {
            $this->rates->add($rate);
            $rate->setAgent($this);
        }
        return $this;
    }

    public function removeRate(Rate $rate): self
    {
        if ($this->rates->removeElement($rate)) {
            if ($rate->getAgent() === $this) {
                $rate->setAgent(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): static
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setAgent($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getAgent() === $this) {
                $reservation->setAgent(null);
            }
        }

        return $this;
    }
}