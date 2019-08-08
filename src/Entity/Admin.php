<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminRepository")
 */
class Admin
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
    private $admin_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $admin_password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdminName(): ?string
    {
        return $this->admin_name;
    }

    public function setAdminName(string $admin_name): self
    {
        $this->admin_name = $admin_name;

        return $this;
    }

    public function getAdminPassword(): ?string
    {
        return $this->admin_password;
    }

    public function setAdminPassword(string $admin_passwword): self
    {
        $this->admin_passwword = $admin_passwword;

        return $this;
    }
}
