<?php
namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\GetCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: "App\Repository\TransportRepository")]
#[ApiResource(
    operations: [
        new Get(),
        new GetCollection(),
        new Post(),
        new Patch(),
        new Delete(),
        new Get(
            uriTemplate: '/transport/{id}/maintenance-report',
            controller: MaintenanceController::class,
            openapiContext: [
                'summary' => 'Generates Excel maintenance report with QR code',
                'description' => 'Returns an Excel file containing transport maintenance information and a QR code',
                'responses' => [
                    '200' => [
                        'content' => [
                            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => [
                                'schema' => [
                                    'type' => 'string',
                                    'format' => 'binary'
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            name: 'api_transport_maintenance_report'
        )
    ],
    normalizationContext: ['groups' => ['transport:read']],
    denormalizationContext: ['groups' => ['transport:write']]
)]
class Transport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['transport:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Groups(['transport:read', 'transport:write'])]
    private ?string $type = null;

    #[ORM\Column]
    #[Assert\Positive]
    #[Groups(['transport:read', 'transport:write'])]
    private ?int $capacity = null;

    #[ORM\Column]
    #[Groups(['transport:read', 'transport:write'])]
    private ?bool $disponibility = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Groups(['transport:read', 'transport:write'])]
    private ?string $destination = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Groups(['transport:read', 'transport:write'])]
    private ?string $model = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Groups(['transport:read', 'transport:write'])]
    private ?string $licensePlate = null;

    #[ORM\Column]
    #[Assert\PositiveOrZero]
    #[Groups(['transport:read', 'transport:write'])]
    private ?int $currentKilometers = null;

    #[ORM\Column(type: 'date')]
    #[Assert\NotNull]
    #[Groups(['transport:read', 'transport:write'])]
    private ?\DateTimeInterface $lastMaintenanceDate = null;

    #[ORM\Column]
    #[Assert\Positive]
    #[Groups(['transport:read', 'transport:write'])]
    private ?int $maintenanceInterval = null;

    public function getId(): ?int { return $this->id; }
    public function getType(): ?string { return $this->type; }
    public function setType(string $type): self { $this->type = $type; return $this; }
    public function getCapacity(): ?int { return $this->capacity; }
    public function setCapacity(int $capacity): self { $this->capacity = $capacity; return $this; }
    public function getDisponibility(): ?bool { return $this->disponibility; }
    public function setDisponibility(bool $disponibility): self { $this->disponibility = $disponibility; return $this; }
    public function getDestination(): ?string { return $this->destination; }
    public function setDestination(string $destination): self { $this->destination = $destination; return $this; }
    public function getModel(): ?string { return $this->model; }
    public function setModel(string $model): self { $this->model = $model; return $this; }
    public function getLicensePlate(): ?string { return $this->licensePlate; }
    public function setLicensePlate(string $licensePlate): self { $this->licensePlate = $licensePlate; return $this; }
    public function getCurrentKilometers(): ?int { return $this->currentKilometers; }
    public function setCurrentKilometers(int $currentKilometers): self { $this->currentKilometers = $currentKilometers; return $this; }
    public function getLastMaintenanceDate(): ?\DateTimeInterface { return $this->lastMaintenanceDate; }
    public function setLastMaintenanceDate(\DateTimeInterface $lastMaintenanceDate): self { $this->lastMaintenanceDate = $lastMaintenanceDate; return $this; }
    public function getMaintenanceInterval(): ?int { return $this->maintenanceInterval; }
    public function setMaintenanceInterval(int $maintenanceInterval): self { $this->maintenanceInterval = $maintenanceInterval; return $this; }
}