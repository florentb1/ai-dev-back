<?php

namespace App\Entity;

use App\Repository\SsoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SsoRepository::class)]
class Sso
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $username = null;

    #[ORM\Column(length: 50)]
    private ?string $type = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'ssos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $sso_user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getSsoUser(): ?User
    {
        return $this->sso_user;
    }

    public function setSsoUser(?User $sso_user): static
    {
        $this->sso_user = $sso_user;

        return $this;
    }
}
