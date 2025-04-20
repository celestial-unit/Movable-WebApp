<?php

namespace App\Entity\Destination;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
class Favorite
{

    #[ORM\ManyToOne(targetEntity: Destination::class)]
    #[ORM\JoinColumn(name: 'id_destination', referencedColumnName: 'id_destination')]
    private ?Destination $id_destination = null;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'string')]
    private string $id_favorite;

    #[ORM\Column(type: 'string')]
    private string $id_user;


    public function getId_favorite(): string
    {
        return $this->id_favorite;
    }

    public function setId_favorite(string $id_favorite): self
    {
        $this->id_favorite = $id_favorite;
        return $this;
    }

    public function getId_destination():?int
    {
        return $this->id_destination;
    }

    public function setId_destination(int $id_destination): self
    {
        $this->id_destination = $id_destination;
        return $this;
    }

    public function getId_user(): string
    {
        return $this->id_user;
    }

    public function setId_user(string $id_user): self
    {
        $this->id_user = $id_user;
        return $this;
    }
}
