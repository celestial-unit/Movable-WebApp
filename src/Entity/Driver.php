<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\DriverRepository;

#[ORM\Entity(repositoryClass: DriverRepository::class)]
#[ORM\Table(name: 'drivers')]
class Driver
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

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $name = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $licence_number = null;

    /**
     * @var Collection<int, Reservation>
     */
    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'Driver')]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getLicence_number(): ?string
    {
        return $this->licence_number;
    }

    public function setLicence_number(?string $licence_number): self
    {
        $this->licence_number = $licence_number;
        return $this;
    }

    public function getLicenceNumber(): ?string
    {
        return $this->licence_number;
    }

    public function setLicenceNumber(?string $licence_number): static
    {
        $this->licence_number = $licence_number;

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
            $reservation->setDriver($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getDriver() === $this) {
                $reservation->setDriver(null);
            }
        }

        return $this;
    }

}
