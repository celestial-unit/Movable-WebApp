<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Payum\Core\Model\Payment as BasePayment;

#[ORM\Entity]
#[ORM\Table(name: 'payment')]
#[ORM\AttributeOverrides([
    new ORM\AttributeOverride(
        name: 'details',
        column: new ORM\Column(
            name: 'details',
            type: 'json',
            nullable: true
        )
    )
])]
class Payment extends BasePayment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    protected $id;

    public function getId(): ?int
    {
        return $this->id;
    }
    
    #[ORM\ManyToOne(targetEntity: Ticket::class, inversedBy: 'Payments')]
    #[ORM\JoinColumn(name: 'ticket_id', referencedColumnName: 'id')]
private ?Ticket $ticket = null;

public function getTicket(): ?Ticket
{
    return $this->ticket;
}

public function setTicket(?Ticket $ticket): self
{
    $this->ticket = $ticket;
    return $this;
}
}
