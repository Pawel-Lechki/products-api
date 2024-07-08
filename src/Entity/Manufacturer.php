<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Producent
 */

#[ORM\Entity]
#[ApiResource]
class Manufacturer
{
   /**
    * Id producenta
    */
   #[ORM\Id, ORM\Column ,ORM\GeneratedValue]
    private ?int $id = null;

    /**
     *  Nazwa producenta
     */
    #[ORM\Column]
    private string $name = '';

    /**
     * Opis producenta
     */
    #[ORM\Column(type: 'text')]
    private string $description = '';

    /**
     * Kod kraju
     */
    #[ORM\Column(length: 3)]
    private string $countryCode = '';

    /**
     * Data dodania producenta
     */
    #[ORM\Column(type: "datetime")]
    private ?\DateTimeInterface $listedDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    public function getListedDate(): ?\DateTimeInterface
    {
        return $this->listedDate;
    }

    public function setListedDate(?\DateTimeInterface $listedDate): void
    {
        $this->listedDate = $listedDate;
    }


}