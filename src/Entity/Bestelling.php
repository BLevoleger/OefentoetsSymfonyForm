<?php

namespace App\Entity;

use App\Repository\BestellingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BestellingRepository::class)
 */
class Bestelling
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $datum;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=Klant::class, inversedBy="bestelling")
     * @ORM\JoinColumn(nullable=false)
     */
    private $klant;

    /**
     * @ORM\OneToMany(targetEntity=Bestelregel::class, mappedBy="bestelling")
     */
    private $bestelRegel;

    public function __construct()
    {
        $this->bestelRegel = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getKlant(): ?Klant
    {
        return $this->klant;
    }

    public function setKlant(?Klant $klant): self
    {
        $this->klant = $klant;

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
            $bestelRegel->setBestelling($this);
        }

        return $this;
    }

    public function removeBestelRegel(Bestelregel $bestelRegel): self
    {
        if ($this->bestelRegel->removeElement($bestelRegel)) {
            // set the owning side to null (unless already changed)
            if ($bestelRegel->getBestelling() === $this) {
                $bestelRegel->setBestelling(null);
            }
        }

        return $this;
    }
}
