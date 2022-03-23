<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Http;

class VestigingsQuery implements QueryInterface
{
    private $vestigingsnummer;
    private $geoData;

    public function __construct(string $vestigingsnummer, ?bool $geoData = false)
    {
        $this->vestigingsnummer = $vestigingsnummer;
        $this->geoData = $geoData;
    }

    public function toArray(): array
    {
        return [
            'vestigingsnummer' => $this->vestigingsnummer,
            'geoData' => $this->geoData,
        ];
    }
}
