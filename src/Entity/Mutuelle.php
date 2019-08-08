<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MutuelleRepository")
 */
class Mutuelle
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
    private $nom_mutuelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mdp_mutuelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img_mutuelle;

    /**
     * @ORM\Column(type="text")
     */
    private $description_mutuelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel_mutuelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel_link_mutuelle;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMutuelle(): ?string
    {
        return $this->nom_mutuelle;
    }

    public function setNomMutuelle(string $nom_mutuelle): self
    {
        $this->nom_mutuelle = $nom_mutuelle;

        return $this;
    }

    public function getMdpMutuelle(): ?string
    {
        return $this->mdp_mutuelle;
    }

    public function setMdpMutuelle(?string $mdp_mutuelle): self
    {
        $this->mdp_mutuelle = $mdp_mutuelle;

        return $this;
    }

    public function getImgMutuelle(): ?string
    {
        return $this->img_mutuelle;
    }

    public function setImgMutuelle(string $img_mutuelle): self
    {
        $this->img_mutuelle = $img_mutuelle;

        return $this;
    }

    public function getDescriptionMutuelle(): ?string
    {
        return $this->description_mutuelle;
    }

    public function setDescriptionMutuelle(string $description_mutuelle): self
    {
        $this->description_mutuelle = $description_mutuelle;

        return $this;
    }

    public function getTelMutuelle(): ?string
    {
        return $this->tel_mutuelle;
    }

    public function setTelMutuelle(string $tel_mutuelle): self
    {
        $this->tel_mutuelle = $tel_mutuelle;

        return $this;
    }

    public function getTelLinkMutuelle(): ?string
    {
        return $this->tel_link_mutuelle;
    }

    public function setTelLinkMutuelle(string $tel_link_mutuelle): self
    {
        $this->tel_link_mutuelle = $tel_link_mutuelle;

        return $this;
    }
}
