<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\SearchV2;

use Appvise\KvkApi\Model\Link;

class ResultaatItem
{
    private $kvkNummer;

    private $rsin;

    private $vestigingsnummer;

    private $naam;

    private $adres;

    private $straatnaam;

    private $postcode;

    private $plaats;

    private $huisnummer;

    private $huisnummerToevoeging;

    private $type;

    private $actief;

    private $vervallenNaam;

    /** @var Link[] */
    private $links;

    public function __construct(
        string  $kvkNumber,
        ?string $rsin,
        ?string $vestigingsnummer,
        ?string $naam,
        ?array  $adres,
        ?string $straatnaam,
        ?string $postcode,
        ?string $plaats,
        ?string $huisnummer,
        ?string $huisnummerToevoeging,
        ?string $type,
        ?string $actief,
        ?string $vervallenNaam,
        ?array  $links = null
    ) {
        $this->kvkNummer = $kvkNumber;
        $this->rsin = $rsin;
        $this->vestigingsnummer = $vestigingsnummer;
        $this->naam = $naam;
        $this->adres = $adres;
        $this->straatnaam = $straatnaam;
        $this->plaats = $plaats;
        $this->postcode = $postcode;
        $this->huisnummer = $huisnummer;
        $this->huisnummerToevoeging = $huisnummerToevoeging;
        $this->type = $type;
        $this->actief = $actief;
        $this->vervallenNaam = $vervallenNaam;
        $this->links = $links;
    }

    public function getKvkNummer(): string
    {
        return $this->kvkNummer;
    }

    public function getRsin(): ?string
    {
        return $this->rsin;
    }

    public function getVestigingsnummer(): ?string
    {
        return $this->vestigingsnummer;
    }

    /*
     * @deprecated use getNaam()
     */
    public function getHandelsnaam(): ?string
    {
        return $this->naam;
    }

    public function getNaam(): ?string
    {
        return $this->naam;
    }

    public function getAdres(): ?array
    {
        return $this->adres;
    }

    public function getBinnenlandsAdres(): Adres|array
    {
        return $this->adres['binnenlandsAdres'] ?? [];
    }

    public function getBuitenlandsAdres(): Adres|array
    {
        return $this->adres['buitenlandsAdres'] ?? [];
    }

    public function getStraatnaam(): ?string
    {
        return $this->straatnaam;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getVervallenNaam(): ?string
    {
        return $this->vervallenNaam;
    }

    public function getActief(): ?string
    {
        return $this->actief;
    }

    public function getLinks(): ?array
    {
        return $this->links;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function getPlaats(): ?string
    {
        return $this->plaats;
    }

    public function getHuisnummer(): ?string
    {
        return $this->huisnummer;
    }

    public function getHuisnummerToevoeging(): ?string
    {
        return $this->huisnummerToevoeging;
    }

    public function toArray(): array
    {
        $linksArray = [];
        foreach ($this->links as $link) {
            $linksArray[] = $link->toArray();
        }

        return [
            'kvkNummer' => $this->kvkNummer,
            'rsin' => $this->rsin,
            'vestigingsnummer' => $this->vestigingsnummer,
            'naam' => $this->naam,
            'adres' => $this->adres,
            'straatnaam' => $this->straatnaam,
            'postcode' => $this->postcode,
            'plaats' => $this->plaats,
            'huisnummer' => $this->huisnummer,
            'huisnummerToevoeging' => $this->huisnummerToevoeging,
            'type' => $this->type,
            'actief' => $this->actief,
            'vervallenNaam' => $this->vervallenNaam,
            'links' => $linksArray,
        ];
    }
}
