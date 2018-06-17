<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StatusRepository")
 */
class Status
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=10000, nullable=true)
     */
    private $Description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Article")
     */
    private $labels;

    public function __construct()
    {
        $this->labels = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getLabels(): Collection
    {
        return $this->labels;
    }

    public function addLabel(Article $label): self
    {
        if (!$this->labels->contains($label)) {
            $this->labels[] = $label;
        }

        return $this;
    }

    public function removeLabel(Article $label): self
    {
        if ($this->labels->contains($label)) {
            $this->labels->removeElement($label);
        }

        return $this;
    }
}
