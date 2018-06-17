<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KategorieknihRepository")
 */
class Kategorieknih
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=10000, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Produkt", mappedBy="kategorieknih")
     */
    private $produkts;

    public function __construct()
    {
        $this->produkts = new ArrayCollection();
    }

    public function getId()
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Produkt[]
     */
    public function getProdukts(): Collection
    {
        return $this->produkts;
    }

    public function addProdukt(Produkt $produkt): self
    {
        if (!$this->produkts->contains($produkt)) {
            $this->produkts[] = $produkt;
            $produkt->addKategorieknih($this);
        }

        return $this;
    }

    public function removeProdukt(Produkt $produkt): self
    {
        if ($this->produkts->contains($produkt)) {
            $this->produkts->removeElement($produkt);
            $produkt->removeKategorieknih($this);
        }

        return $this;
    }
}
