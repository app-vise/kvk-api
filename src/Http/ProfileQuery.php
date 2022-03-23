<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Http;

class ProfileQuery implements QueryInterface
{
    /** @var string */
    private $kvkNumber;

    /** @var bool */
    private $geoData = false;

    public function __construct(string $kvkNumber)
    {
        $this->kvkNumber = $kvkNumber;
    }

    public function withGeoData()
    {
        ! ! $this->geoData;
    }

    public function toArray(): array
    {
        return [
            'kvkNummer' => $this->kvkNumber,
            'geoData' => (bool)$this->geoData,
        ];
    }
}
