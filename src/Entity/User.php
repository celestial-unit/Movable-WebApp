<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'users')]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name: 'firstName', length: 100)]
    #[Assert\NotBlank(message: 'First name cannot be blank')]
    #[Assert\Length(max: 100, maxMessage: 'First name cannot be longer than {{ limit }} characters')]
    private ?string $firstName = null;

    #[ORM\Column(name: 'lastName', length: 100)]
    #[Assert\NotBlank(message: 'Last name cannot be blank')]
    #[Assert\Length(max: 100, maxMessage: 'Last name cannot be longer than {{ limit }} characters')]
    private ?string $lastName = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank(message: 'Email cannot be blank')]
    #[Assert\Email(message: 'The email {{ value }} is not a valid email')]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(type: 'string', columnDefinition: "ENUM('USER', 'ADMIN', 'DRIVER')")]
    private string $role = 'USER';

    #[ORM\Column(type: 'datetime', options: ['default' => 'CURRENT_TIMESTAMP'])]
    private \DateTimeInterface $created_at;

    #[ORM\Column(name: 'faceIdEnabled', type: 'boolean', options: ['default' => false])]
    private bool $faceIdEnabled = false;

    #[ORM\Column(name: 'isBanned', type: 'boolean', options: ['default' => false])]
    private bool $isBanned = false;

    #[ORM\Column(name: 'banReason', length: 255, nullable: true)]
    private ?string $banReason = null;

    #[ORM\Column(name: 'banExpiryDate', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $banExpiryDate = null;

    #[ORM\Column(name: 'lastLogin', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $lastLogin = null;

    /** 
     * Virtual property for avatar, not persisted to database
     */
    #[ORM\Transient]
    private ?string $avatar = null;
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Reclamation::class, orphanRemoval: true)]
    private Collection $reclamations;

    public function __construct()
    {
        $this->created_at = new \DateTime();
        $this->reclamations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getFullName(): string
    {
        return trim($this->firstName . ' ' . $this->lastName);
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        $roles = [];
        switch ($this->role) {
            case 'ADMIN':
                $roles[] = 'ROLE_ADMIN';
                break;
            case 'DRIVER':
                $roles[] = 'ROLE_DRIVER';
                break;
            case 'USER':
            default:
                break;
        }
        
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        if (!in_array($role, ['USER', 'ADMIN', 'DRIVER'])) {
            throw new \InvalidArgumentException('Invalid role value');
        }
        $this->role = $role;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): static
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function isFaceIdEnabled(): bool
    {
        return $this->faceIdEnabled;
    }

    public function setFaceIdEnabled(bool $faceIdEnabled): static
    {
        $this->faceIdEnabled = $faceIdEnabled;
        return $this;
    }

    public function isBanned(): bool
    {
        if ($this->isBanned && $this->banExpiryDate !== null && $this->banExpiryDate < new \DateTime()) {
            $this->isBanned = false;
            $this->banReason = null;
            $this->banExpiryDate = null;
            return false;
        }
        return $this->isBanned;
    }

    public function setIsBanned(bool $isBanned): static
    {
        $this->isBanned = $isBanned;
        if (!$isBanned) {
            $this->banReason = null;
            $this->banExpiryDate = null;
        }
        return $this;
    }

    public function getBanReason(): ?string
    {
        return $this->banReason;
    }

    public function setBanReason(?string $banReason): static
    {
        $this->banReason = $banReason;
        return $this;
    }

    public function getBanExpiryDate(): ?\DateTimeInterface
    {
        return $this->banExpiryDate;
    }

    public function setBanExpiryDate(?\DateTimeInterface $banExpiryDate): static
    {
        $this->banExpiryDate = $banExpiryDate;
        return $this;
    }

    public function getLastLogin(): ?\DateTimeInterface
    {
        return $this->lastLogin;
    }

    public function setLastLogin(?\DateTimeInterface $lastLogin): static
    {
        $this->lastLogin = $lastLogin;
        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): static
    {
        $this->avatar = $avatar;
        return $this;
    }

    public function getReclamations(): Collection
    {
        return $this->reclamations;
    }

    public function addReclamation(Reclamation $reclamation): static
    {
        if (!$this->reclamations->contains($reclamation)) {
            $this->reclamations->add($reclamation);
            $reclamation->setUser($this);
        }
        return $this;
    }

    public function removeReclamation(Reclamation $reclamation): static
    {
        if ($this->reclamations->removeElement($reclamation)) {
            if ($reclamation->getUser() === $this) {
                $reclamation->setUser(null);
            }
        }
        return $this;
    }
    public function __toString(): string
{
    return $this->getFullName(); // Or whatever string representation you want
    // Alternatively if you don't have getFullName():
    // return $this->getFirstName() . ' ' . $this->getLastName();
}
}
