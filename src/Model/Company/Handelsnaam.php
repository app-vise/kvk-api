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

    public function getNaam()
    {
        return $this->naam;
    }

    public function getVolgorde()
    {
        return $this->volgorde;
    }
}
