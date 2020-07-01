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
     * @ORM\OneToMany(targetEntity=city::class, mappedBy="date")
     */
    private $city;


    public function __construct()
    {
        $this->city = new ArrayCollection();
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

}
