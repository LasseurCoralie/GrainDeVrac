<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $producer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $shortDescription;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $bio;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="boolean")
     */
    private $availability;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="boolean")
     */
    private $higlighted;

    /**
     * @ORM\ManyToMany(targetEntity=Recipe::class, inversedBy="products")
     */
    private $recipe;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="productList")
     */
    private $users;

    public function __construct()
    {
        $this->recipe = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->setHiglighted(false);
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProducer(): ?user
    {
        return $this->producer;
    }

    public function setProducer(?user $producer): self
    {
        $this->producer = $producer;

        return $this;
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

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getBio(): ?bool
    {
        return $this->bio;
    }

    public function setBio(bool $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getAvailability(): ?bool
    {
        return $this->availability;
    }

    public function setAvailability(bool $availability): self
    {
        $this->availability = $availability;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getHiglighted(): ?bool
    {
        return $this->higlighted;
    }

    public function setHiglighted(bool $higlighted): self
    {
        $this->higlighted = $higlighted;

        return $this;
    }

    /**
     * @return Collection|recipe[]
     */
    public function getRecipe(): Collection
    {
        return $this->recipe;
    }

    public function addRecipe(recipe $recipe): self
    {
        if (!$this->recipe->contains($recipe)) {
            $this->recipe[] = $recipe;
        }

        return $this;
    }

    public function removeRecipe(recipe $recipe): self
    {
        if ($this->recipe->contains($recipe)) {
            $this->recipe->removeElement($recipe);
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addProductList($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            $user->removeProductList($this);
        }

        return $this;
    }

}
