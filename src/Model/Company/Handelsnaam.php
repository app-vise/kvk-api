<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

class Handelsnaam
{
    private $naam;
    private $volgorde;

    public function __construct(string $naam, int $volgorde)
    {
        $this->naam = $naam;
        $this->volgorde = $volgorde;
    }

    public function getNaam(): string
    {
        return $this->naam;
    }

    public function getVolgorde(): int
    {
        return $this->volgorde;
    }

    public function toArray(): array
    {
        return [
            'naam' => $this->naam,
            'volgorde' => $this->volgorde,
        ];
    }
}
