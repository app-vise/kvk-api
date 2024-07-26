<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Search;

use Appvise\KvkApi\Model\BinnenlandAdres;
use Appvise\KvkApi\Model\BuitenlandAdres;
use Appvise\KvkApi\Model\Link;

class ResultaatItem
{
    private $kvkNummer;
    private $rsin;
    private $vestigingsnummer;
    private $naam;
    private $adres;
    private $type;
    private $actief;
    private $vervallenNaam;
    /** @var Link[] */
    private $links;

    public function __construct(
        string $kvkNumber,
        ?string $rsin,
        ?string $vestigingsnummer,
        ?string $naam,
        BinnenlandAdres|BuitenlandAdres|null $adres,
        ?string $type,
        ?string $actief,
        ?string $vervallenNaam,
        ?array $links = null
    ) {
        $this->kvkNummer = $kvkNumber;
        $this->rsin = $rsin;
        $this->vestigingsnummer = $vestigingsnummer;
        $this->naam = $naam;
        $this->adres = $adres;
        $this->type = $type;
        $this->actief = $actief;
        $this->vervallenNaam = $vervallenNaam;
        $this->links = $links;
    }

    public function getKvkNumber(): string
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

    public function getNaam(): ?string
    {
        return $this->naam;
    }

    public function getAdres(): BinnenlandAdres|BuitenlandAdres|null
    {
        return $this->adres;
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
}
