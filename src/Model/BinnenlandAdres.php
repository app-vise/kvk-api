<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class BinnenlandAdres
{
    private $type;
    private $straatnaam;
    private $huisnummer;
    private $huisletter;
    private $postbusnummer;
    private $postcode;
    private $plaats;

    public function __construct(
        ?string $type,
        ?string $straatnaam,
        ?int $huisnummer,
        ?string $huisletter,
        ?int $postbusnummer,
        ?string $postcode,
        ?string $plaats,
    ) {
        $this->type = $type;
        $this->straatnaam = $straatnaam;
        $this->huisnummer = $huisnummer;
        $this->huisletter = $huisletter;
        $this->postbusnummer = $postbusnummer;
        $this->postcode = $postcode;
        $this->plaats = $plaats;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getStraatnaam(): ?string
    {
        return $this->straatnaam;
    }

    public function getHuisnummer(): ?int
    {
        return $this->huisnummer;
    }

    public function getHuisletter(): ?string
    {
        return $this->huisletter;
    }

    public function getPostbusnummer(): ?int
    {
        return $this->postbusnummer;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function getPlaats(): ?string
    {
        return $this->plaats;
    }
}
