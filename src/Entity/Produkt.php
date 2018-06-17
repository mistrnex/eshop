<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduktRepository")
 */
class Produkt
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
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $cena;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $akcnicena;

    /**
     * @ORM\Column(type="integer")
     */
    private $mnozstvi;



    

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

    public function getCena()
    {
        return $this->cena;
    }

    public function setCena($cena): self
    {
        $this->cena = $cena;

        return $this;
    }

    public function getAkcnicena()
    {
        return $this->akcnicena;
    }

    public function setAkcnicena($akcnicena): self
    {
        $this->akcnicena = $akcnicena;

        return $this;
    }

    public function getMnozstvi(): ?int
    {
        return $this->mnozstvi;
    }

    public function setMnozstvi(int $mnozstvi): self
    {
        $this->mnozstvi = $mnozstvi;

        return $this;
    }

    /**
     * @return Collection|Kategorieknih[]
     */
    public function getKategorieknih(): Collection
    {
        return $this->kategorieknih;
    }

    public function addKategorieknih(Kategorieknih $kategorieknih): self
    {
        if (!$this->kategorieknih->contains($kategorieknih)) {
            $this->kategorieknih[] = $kategorieknih;
        }

        return $this;
    }

    public function removeKategorieknih(Kategorieknih $kategorieknih): self
    {
        if ($this->kategorieknih->contains($kategorieknih)) {
            $this->kategorieknih->removeElement($kategorieknih);
        }

        return $this;
    }
}
