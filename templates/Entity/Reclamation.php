<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
#[ORM\Table(name: 'reclamations')]
class Reclamation
{
    /**
     * Status constants
     */
    public const STATUS_PENDING = 'Pending';
    public const STATUS_RESOLVED = 'Resolved';
    public const STATUS_REJECTED = 'Rejected';
    public const CATEGORY_GENERAL = 'General';
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Title cannot be empty')]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: 'Title must be at least {{ limit }} characters long',
        maxMessage: 'Title cannot be longer than {{ limit }} characters'
    )]
    private ?string $title = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: 'Description cannot be empty')]
    #[Assert\Length(
        min: 10,
        minMessage: 'Description must be at least {{ limit }} characters long'
    )]
    private ?string $description = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    #[Assert\Choice(
        choices: [self::STATUS_PENDING, self::STATUS_RESOLVED, self::STATUS_REJECTED], 
        message: 'Choose a valid status'
    )]
    private string $status = self::STATUS_PENDING;

    #[ORM\Column(length: 50, options: ['default' => 'General'])]
    private string $category = self::CATEGORY_GENERAL;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTime $created_at = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTime $creation_date = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTime $resolution_date = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
    private ?User $user = null;

    /**
     * Constructor with default values
     */
    public function __construct()
    {
        $now = new \DateTime();
        $this->created_at = $now;
        $this->creation_date = $now;
        $this->status = self::STATUS_PENDING;
        $this->category = self::CATEGORY_GENERAL;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        if (!in_array($status, [self::STATUS_PENDING, self::STATUS_RESOLVED, self::STATUS_REJECTED])) {
            throw new \InvalidArgumentException('Invalid status value');
        }
        
        if ($status !== $this->status && 
            ($status === self::STATUS_RESOLVED || $status === self::STATUS_REJECTED)) {
            $this->resolution_date = new \DateTime();
        }
        
        $this->status = $status;
        return $this;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;
        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTime $createdAt): static
    {
        $this->created_at = $createdAt;
        return $this;
    }

    public function getCreationDate(): ?\DateTime
    {
        return $this->creation_date;
    }

    public function setCreationDate(\DateTime $creationDate): static
    {
        $this->creation_date = $creationDate;
        return $this;
    }

    public function getResolutionDate(): ?\DateTime
    {
        return $this->resolution_date;
    }

    public function setResolutionDate(?\DateTime $resolutionDate): static
    {
        $this->resolution_date = $resolutionDate;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get a short preview of the description (for listings)
     */
    public function getShortDescription(int $length = 100): string
    {
        if (strlen($this->description) <= $length) {
            return $this->description;
        }
        
        return substr($this->description, 0, $length) . '...';
    }

    /**
     * Check if the reclamation is pending
     */
    public function isPending(): bool
    {
        return $this->status === self::STATUS_PENDING;
    }

    /**
     * Check if the reclamation is resolved
     */
    public function isResolved(): bool
    {
        return $this->status === self::STATUS_RESOLVED;
    }

    /**
     * Check if the reclamation is rejected
     */
    public function isRejected(): bool
    {
        return $this->status === self::STATUS_REJECTED;
    }

    /**
     * Resolve the reclamation
     */
    public function resolve(): static
    {
        return $this->setStatus(self::STATUS_RESOLVED);
    }

    /**
     * Reject the reclamation
     */
    public function reject(): static
    {
        return $this->setStatus(self::STATUS_REJECTED);
    }
}
