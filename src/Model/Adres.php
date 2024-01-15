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
        ?string  $type,
        ?string  $indAfgeschermd,
        ?string  $volledigAdres,
        ?string  $straatnaam,
        ?int     $huisnummer,
        ?string  $huisnummerToevoeging,
        ?string  $huisletter,
        ?string  $aanduidingBijHuisnummer,
        ?string  $toevoegingAdres,
        ?string  $postcode,
        ?int     $postbusnummer,
        ?string  $plaats,
        ?string  $straatHuisnummer,
        ?string  $postcodeWoonplaats,
        ?string  $regio,
        ?string  $land,
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

    public function getIndAfgeschermd(): ?string
    {
        return $this->indAfgeschermd;
    }

    public function getStraatnaam(): ?string
    {
        return $this->straatnaam;
    }

    public function getHuisnummer(): ?int
    {
        return $this->huisnummer;
    }

    public function getHuisnummerToevoeging(): ?string
    {
        return $this->huisnummerToevoeging;
    }

    public function getHuisletter(): ?string
    {
        return $this->huisletter;
    }

    public function getAanduidingBijHuisnummer(): ?string
    {
        return $this->aanduidingBijHuisnummer;
    }

    public function getToevoegingAdres(): ?string
    {
        return $this->toevoegingAdres;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function getPostbusnummer(): ?int
    {
        return $this->postbusnummer;
    }

    public function getPlaats(): ?string
    {
        return $this->plaats;
    }

    public function getStraatHuisnummer(): ?string
    {
        return $this->straatHuisnummer;
    }

    public function getPostcodeWoonplaats(): ?string
    {
        return $this->postcodeWoonplaats;
    }

    public function getRegio(): ?string
    {
        return $this->regio;
    }

    public function getLand(): ?string
    {
        return $this->land;
    }

    public function getGeoData(): ?GeoData
    {
        return $this->geoData;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getVolledigAdres(): string
    {
        return $this->volledigAdres;
    }

    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'indAfgeschermd' => $this->indAfgeschermd,
            'volledigAdres' => $this->volledigAdres,
            'straatnaam' => $this->straatnaam,
            'huisnummer' => $this->huisnummer,
            'huisnummerToevoeging' => $this->huisnummerToevoeging,
            'huisletter' => $this->huisletter,
            'aanduidingBijHuisnummer' => $this->aanduidingBijHuisnummer,
            'toevoegingAdres' => $this->toevoegingAdres,
            'postcode' => $this->postcode,
            'postbusnummer' => $this->postbusnummer,
            'plaats' => $this->plaats,
            'straatHuisnummer' => $this->straatHuisnummer,
            'postcodeWoonplaats' => $this->postcodeWoonplaats,
            'regio' => $this->regio,
            'land' => $this->land,
            'geoData' => $this->geoData ? $this->geoData->toArray() : null,
        ];
    }
}
