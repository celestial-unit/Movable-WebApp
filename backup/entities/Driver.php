<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'drivers')]
class Driver
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(name: 'userId', type: 'integer')]
    private ?int $userId = null;

    #[ORM\Column(name: 'vehicleType', type: 'string', length: 100)]
    private ?string $vehicleType = null;

    #[ORM\Column(name: 'licenseNumber', type: 'string', length: 50)]
    private ?string $licenseNumber = null;

    #[ORM\Column(name: 'availableStatus', type: 'boolean', options: ['default' => true])]
    private ?bool $availableStatus = true;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function getVehicleType(): ?string
    {
        return $this->vehicleType;
    }

    public function setVehicleType(string $vehicleType): self
    {
        $this->vehicleType = $vehicleType;
        return $this;
    }

    public function getLicenseNumber(): ?string
    {
        return $this->licenseNumber;
    }

    public function setLicenseNumber(string $licenseNumber): self
    {
        $this->licenseNumber = $licenseNumber;
        return $this;
    }

    public function isAvailableStatus(): ?bool
    {
        return $this->availableStatus;
    }

    public function setAvailableStatus(bool $availableStatus): self
    {
        $this->availableStatus = $availableStatus;
        return $this;
    }
}
