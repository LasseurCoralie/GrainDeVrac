<?php

namespace App\Entity;

use App\Repository\DateRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DateRepository::class)
 */
class Date
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $startHour;

    /**
     * @ORM\Column(type="integer")
     */
    private $endHour;

    /**
     * @ORM\OneToMany(targetEntity=City::class, mappedBy="date")
     */
    private $city;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @ORM\ManyToOne(targetEntity=Mode::class, inversedBy="dates")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mode;


    public function __construct()
    {
        $this->city = new ArrayCollection();
        $this->mode = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getStartHour(): ?int
    {
        return $this->startHour;
    }

    public function setStartHour(int $startHour): self
    {
        $this->startHour = $startHour;

        return $this;
    }

    public function getEndHour(): ?int
    {
        return $this->endHour;
    }

    public function setEndHour(int $endHour): self
    {
        $this->endHour = $endHour;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return Collection|city[]
     */
    public function getCity(): Collection
    {
        return $this->city;
    }

    public function addCity(city $city): self
    {
        if (!$this->city->contains($city)) {
            $this->city[] = $city;
            $city->setDate($this);
        }

        return $this;
    }

    public function removeCity(city $city): self
    {
        if ($this->city->contains($city)) {
            $this->city->removeElement($city);
            // set the owning side to null (unless already changed)
            if ($city->getDate() === $this) {
                $city->setDate(null);
            }
        }

        return $this;
    }

    public function getMode(): ?mode
    {
        return $this->mode;
    }

    public function setMode(?mode $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

}
