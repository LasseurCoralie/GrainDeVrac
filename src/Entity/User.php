<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="text")
     */
    private $adress;

    /**
     * @ORM\ManyToOne(targetEntity=City::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $city;

    /**
     * @ORM\ManyToOne(targetEntity=Role::class)
     */
    private $role;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="boolean")
     */
    private $mute;

    /**
     * @ORM\ManyToMany(targetEntity=Recipe::class, inversedBy="usersFavorites")
     */
    private $favoriteRecipe;

    /**
     * @ORM\ManyToMany(targetEntity=Product::class, inversedBy="users")
     */
    private $productList;

    public function __construct()
    {
        $this->favoriteRecipe = new ArrayCollection();
        $this->productList = new ArrayCollection();
    }

    public function getId(): ?int
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

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getCity(): ?city
    {
        return $this->city;
    }

    public function setCity(?city $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getMute(): ?bool
    {
        return $this->mute;
    }

    public function setMute(bool $mute): self
    {
        $this->mute = $mute;

        return $this;
    }


    /**
     * @return Collection|recipe[]
     */
    public function getFavoriteRecipe(): Collection
    {
        return $this->favoriteRecipe;
    }

    public function addFavoriteRecipe(recipe $favoriteRecipe): self
    {
        if (!$this->favoriteRecipe->contains($favoriteRecipe)) {
            $this->favoriteRecipe[] = $favoriteRecipe;
        }

        return $this;
    }

    public function removeFavoriteRecipe(recipe $favoriteRecipe): self
    {
        if ($this->favoriteRecipe->contains($favoriteRecipe)) {
            $this->favoriteRecipe->removeElement($favoriteRecipe);
        }

        return $this;
    }

    /**
     * @return Collection|product[]
     */
    public function getProductList(): Collection
    {
        return $this->productList;
    }

    public function addProductList(product $productList): self
    {
        if (!$this->productList->contains($productList)) {
            $this->productList[] = $productList;
        }

        return $this;
    }

    public function removeProductList(product $productList): self
    {
        if ($this->productList->contains($productList)) {
            $this->productList->removeElement($productList);
        }

        return $this;
    }
}
