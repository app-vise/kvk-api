<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class BuitenlandAdres
{
    private $type;
    private $straatHuisnummer;
    private $postcodeWoonplaats;
    private $land;

    public function __construct(
        ?string $type,
        ?string $straatHuisnummer,
        ?string $postcodeWoonplaats,
        ?string $land,
    ) {
        $this->type = $type;
        $this->straatHuisnummer = $straatHuisnummer;
        $this->postcodeWoonplaats = $postcodeWoonplaats;
        $this->land = $land;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getStraatHuisnummer(): ?string
    {
        return $this->straatHuisnummer;
    }

    public function getPostCodeWoonplaats(): ?string
    {
        return $this->postcodeWoonplaats;
    }

    public function getLand(): ?string
    {
        return $this->land;
    }
}
