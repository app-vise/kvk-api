<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class Adres
{
    private $type;
    private $indAfgeschermd;
    private $volledigAdres;
    private $straatnaam;
    private $huisnummer;
    private $huisnummerToevoeging;
    private $huisletter;
    private $aanduidingBijHuisnummer;
    private $toevoegingAdres;
    private $postcode;
    private $postbusnummer;
    private $plaats;
    private $straatHuisnummer;
    private $postcodeWoonplaats;
    private $regio;
    private $land;
    private $geoData;

    public function __construct(
        ?string $type,
        ?string $indAfgeschermd,
        ?string $volledigAdres,
        ?string $straatnaam,
        ?int $huisnummer,
        ?string $huisnummerToevoeging,
        ?string $huisletter,
        ?string $aanduidingBijHuisnummer,
        ?string $toevoegingAdres,
        ?string $postcode,
        ?int $postbusnummer,
        ?string $plaats,
        ?string $straatHuisnummer,
        ?string $postcodeWoonplaats,
        ?string $regio,
        ?string $land,
        ?GeoData $geoData
    ) {
        $this->type = $type;
        $this->indAfgeschermd = $indAfgeschermd;
        $this->volledigAdres = $volledigAdres;
        $this->straatnaam = $straatnaam;
        $this->huisnummer = $huisnummer;
        $this->huisnummerToevoeging = $huisnummerToevoeging;
        $this->huisletter = $huisletter;
        $this->aanduidingBijHuisnummer = $aanduidingBijHuisnummer;
        $this->toevoegingAdres = $toevoegingAdres;
        $this->postcode = $postcode;
        $this->postbusnummer = $postbusnummer;
        $this->plaats = $plaats;
        $this->straatHuisnummer = $straatHuisnummer;
        $this->postcodeWoonplaats = $postcodeWoonplaats;
        $this->regio = $regio;
        $this->land = $land;
        $this->geoData = $geoData;
    }

    public function getIndAfgeschermd()
    {
        return $this->indAfgeschermd;
    }

    public function getStraatnaam()
    {
        return $this->straatnaam;
    }

    public function getHuisnummer()
    {
        return $this->huisnummer;
    }

    public function getHuisnummerToevoeging()
    {
        return $this->huisnummerToevoeging;
    }

    public function getHuisletter()
    {
        return $this->huisletter;
    }

    public function getAanduidingBijHuisnummer()
    {
        return $this->aanduidingBijHuisnummer;
    }

    public function getToevoegingAdres()
    {
        return $this->toevoegingAdres;
    }

    public function getPostcode()
    {
        return $this->postcode;
    }

    public function getPostbusnummer()
    {
        return $this->postbusnummer;
    }

    public function getPlaats()
    {
        return $this->plaats;
    }

    public function getStraatHuisnummer()
    {
        return $this->straatHuisnummer;
    }

    public function getPostcodeWoonplaats()
    {
        return $this->postcodeWoonplaats;
    }

    public function getRegio()
    {
        return $this->regio;
    }

    public function getLand()
    {
        return $this->land;
    }

    public function getGeoData()
    {
        return $this->geoData;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getVolledigAdres(): string
    {
        return $this->volledigAdres;
    }
}