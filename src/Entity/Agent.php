<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\AgentRepository;

#[ORM\Entity(repositoryClass: AgentRepository::class)]
#[ORM\Table(name: 'agent')]
class Agent
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

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $type = null;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $phone = null;

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $birthdate = null;

    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->birthdate;
    }

    public function setBirthdate(\DateTimeInterface $birthdate): self
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    #[ORM\Column(name: "pictureP", type: 'string', nullable: false)]
    private ?string $pictureP = null;

    public function getPictureP(): ?string
    {
        return $this->pictureP;
    }

    public function setPictureP(string $pictureP): self
    {
        $this->pictureP = $pictureP;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Office::class, inversedBy: 'agents')]
    #[ORM\JoinColumn(name: 'office_Id', referencedColumnName: 'id')]
    private ?Office $office = null;

    public function getOffice(): ?Office
    {
        return $this->office;
    }

    public function setOffice(?Office $office): self
    {
        $this->office = $office;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Rate::class, mappedBy: 'agent')]
    private Collection $rates;

    /**
     * @return Collection<int, Rate>
     */
    public function getRates(): Collection
    {
        if (!$this->rates instanceof Collection) {
            $this->rates = new ArrayCollection();
        }
        return $this->rates;
    }

    public function addRate(Rate $rate): self
    {
        if (!$this->getRates()->contains($rate)) {
            $this->getRates()->add($rate);
        }
        return $this;
    }

    public function removeRate(Rate $rate): self
    {
        $this->getRates()->removeElement($rate);
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'agent')]
    private Collection $reservations;

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        if (!$this->reservations instanceof Collection) {
            $this->reservations = new ArrayCollection();
        }
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->getReservations()->contains($reservation)) {
            $this->getReservations()->add($reservation);
        }
        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        $this->getReservations()->removeElement($reservation);
        return $this;
    }

}
