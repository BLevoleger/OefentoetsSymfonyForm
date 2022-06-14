<?php

namespace App\Entity;

use App\Repository\PizzaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PizzaRepository::class)
 */
class Pizza
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $naam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=Bestelregel::class, mappedBy="pizza")
     */
    private $bestelRegel;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="pizza")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    public function __construct()
    {
        $this->bestelRegel = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaam(): ?string
    {
        return $this->naam;
    }

    public function setNaam(string $naam): self
    {
        $this->naam = $naam;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Bestelregel>
     */
    public function getBestelRegel(): Collection
    {
        return $this->bestelRegel;
    }

    public function addBestelRegel(Bestelregel $bestelRegel): self
    {
        if (!$this->bestelRegel->contains($bestelRegel)) {
            $this->bestelRegel[] = $bestelRegel;
            $bestelRegel->setPizza($this);
        }

        return $this;
    }

    public function removeBestelRegel(Bestelregel $bestelRegel): self
    {
        if ($this->bestelRegel->removeElement($bestelRegel)) {
            // set the owning side to null (unless already changed)
            if ($bestelRegel->getPizza() === $this) {
                $bestelRegel->setPizza(null);
            }
        }

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}
