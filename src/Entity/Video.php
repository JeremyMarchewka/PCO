<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VideoRepository")
 */
class Video
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
    private $titre_video;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_upload_video;

    /**
     * @ORM\Column(type="time")
     */
    private $duree_video;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $coach_video;

    /**
     * @ORM\Column(type="string", length=2000)
     */
    private $adresse_video;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img_video;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genre_video;

    /**
     * @ORM\Column(type="text")
     */
    private $description_video;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreVideo(): ?string
    {
        return $this->titre_video;
    }

    public function setTitreVideo(string $titre_video): self
    {
        $this->titre_video = $titre_video;

        return $this;
    }

    public function getDateUploadVideo(): ?\DateTimeInterface
    {
        return $this->date_upload_video;
    }

    public function setDateUploadVideo(?\DateTimeInterface $date_upload_video): self
    {
        $this->date_upload_video = $date_upload_video;

        return $this;
    }

    public function getDureeVideo(): ?\DateTimeInterface
    {
        return $this->duree_video;
    }

    public function setDureeVideo(\DateTimeInterface $duree_video): self
    {
        $this->duree_video = $duree_video;

        return $this;
    }

    public function getCoachVideo(): ?string
    {
        return $this->coach_video;
    }

    public function setCoachVideo(?string $coach_video): self
    {
        $this->coach_video = $coach_video;

        return $this;
    }

    public function getAdresseVideo(): ?string
    {
        return $this->adresse_video;
    }

    public function setAdresseVideo(string $adresse_video): self
    {
        $this->adresse_video = $adresse_video;

        return $this;
    }

    public function getImgVideo(): ?string
    {
        return $this->img_video;
    }

    public function setImgVideo(string $img_video): self
    {
        $this->img_video = $img_video;

        return $this;
    }

    public function getGenreVideo(): ?string
    {
        return $this->genre_video;
    }

    public function setGenreVideo(string $genre_video): self
    {
        $this->genre_video = $genre_video;

        return $this;
    }

    public function getDescriptionVideo(): ?string
    {
        return $this->description_video;
    }

    public function setDescriptionVideo(string $description_video): self
    {
        $this->description_video = $description_video;

        return $this;
    }
}
