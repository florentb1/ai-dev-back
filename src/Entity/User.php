<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $firstname = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $lastname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\OneToMany(mappedBy: 'chat_user', targetEntity: Chat::class, orphanRemoval: true)]
    private Collection $chats;

    #[ORM\OneToMany(mappedBy: 'sso_user', targetEntity: Sso::class, orphanRemoval: true)]
    private Collection $ssos;

    public function __construct()
    {
        $this->chats = new ArrayCollection();
        $this->ssos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

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

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): static
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return Collection<int, Chat>
     */
    public function getChats(): Collection
    {
        return $this->chats;
    }

    public function addChat(Chat $chat): static
    {
        if (!$this->chats->contains($chat)) {
            $this->chats->add($chat);
            $chat->setChatUser($this);
        }

        return $this;
    }

    public function removeChat(Chat $chat): static
    {
        if ($this->chats->removeElement($chat)) {
            // set the owning side to null (unless already changed)
            if ($chat->getChatUser() === $this) {
                $chat->setChatUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Sso>
     */
    public function getSsos(): Collection
    {
        return $this->ssos;
    }

    public function addSso(Sso $sso): static
    {
        if (!$this->ssos->contains($sso)) {
            $this->ssos->add($sso);
            $sso->setSsoUser($this);
        }

        return $this;
    }

    public function removeSso(Sso $sso): static
    {
        if ($this->ssos->removeElement($sso)) {
            // set the owning side to null (unless already changed)
            if ($sso->getSsoUser() === $this) {
                $sso->setSsoUser(null);
            }
        }

        return $this;
    }
}
