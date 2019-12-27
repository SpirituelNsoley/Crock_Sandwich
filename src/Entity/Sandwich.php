<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SandwichRepository")
 */
class Sandwich
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
    private $statement;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Ingredient", inversedBy="sandwich")
     */
    private $ingredient;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Bread", mappedBy="sandwich")
     */
    private $bread;

    /**
     * @ORM\Column(type="smallint")
     */
    private $price;

    public function __construct()
    {
        $this->createdAt=new \DateTime();
        $this->ingredient = new ArrayCollection();
        $this->bread = new ArrayCollection();
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

    public function getStatement(): ?int
    {
        return $this->statement;
    }

    public function setStatement(int $statement): self
    {
        $this->statement = $statement;

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

    /**
     * @return Collection|ingredient[]
     */
    public function getIngredient(): Collection
    {
        return $this->ingredient;
    }

    public function addIngredient(ingredient $ingredient): self
    {
        if (!$this->ingredient->contains($ingredient)) {
            $this->ingredient[] = $ingredient;
        }

        return $this;
    }

    public function removeIngredient(ingredient $ingredient): self
    {
        if ($this->ingredient->contains($ingredient)) {
            $this->ingredient->removeElement($ingredient);
        }

        return $this;
    }

    /**
     * @return Collection|Bread[]
     */
    public function getBread(): Collection
    {
        return $this->bread;
    }

    public function addBread(Bread $bread): self
    {
        if (!$this->bread->contains($bread)) {
            $this->bread[] = $bread;
            $bread->addSandwich($this);
        }

        return $this;
    }

    public function removeBread(Bread $bread): self
    {
        if ($this->bread->contains($bread)) {
            $this->bread->removeElement($bread);
            $bread->removeSandwich($this);
        }

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
}
