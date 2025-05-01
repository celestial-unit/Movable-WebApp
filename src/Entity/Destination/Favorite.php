<?php

namespace App\Entity\Destination;


use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
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
    #[ORM\Column(type: 'integer')]
    private int $id_favorite;

     #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'id', nullable: false)]
    private ?User $id_user = null;


    public function getIdfavorite(): int
    {
        return $this->id_favorite;
    }

    public function setIdfavorite(int $id_favorite): self
    {
        $this->id_favorite = $id_favorite;
        return $this;
    }


public function setIdDestination(?Destination $idDestination): self
{
    $this->id_destination = $idDestination;
    return $this;
}


    public function getIduser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?User $idUser): self
{
    $this->id_user = $idUser;
    return $this;
}



    public function getDestination(): ?Destination
{
    return $this->id_destination;
}

}
