<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BreadRepository")
 */
class Bread
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="smallint")
     */
    private $price;

    /**
     * @ORM\Column(type="smallint")
     */
    private $statement;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Sandwich", mappedBy="bread")
     * @ORM\JoinTable(name="sandwich_bread")
     */
    private $sandwich;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function __construct()
    {
        $this->sandwich = new ArrayCollection();
        $this->createdAt= new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getStatement(): ?int
    {
        return $this->statement;
    }

    public function setStatement(int $statement): self
    {
        $this->statement = $statement;

        return $this;
    }

    /**
     * @return Collection|Sandwich[]
     */
    public function getSandwich(): Collection
    {
        return $this->sandwich;
    }

    public function addSandwich(Sandwich $sandwich): self
    {
        if (!$this->sandwich->contains($sandwich)) {
            $this->sandwich[] = $sandwich;
        }

        return $this;
    }

    public function removeSandwich(Sandwich $sandwich): self
    {
        if ($this->sandwich->contains($sandwich)) {
            $this->sandwich->removeElement($sandwich);
        }

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
