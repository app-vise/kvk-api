<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class GeoData
{
    private $addresseerbaarObjectId;

    private $nummerAanduidingId;

    private $gpsLatitude;

    private $gpsLongitude;

    private $rijksdriehoekX;

    private $rijksdriehoekY;

    private $rijksdriehoekZ;

    public function __construct(
        ?string $addresseerbaarObjectId,
        ?string $nummerAanduidingId,
        ?float  $gpsLatitude,
        ?float  $gpsLongitude,
        ?float  $rijksdriehoekX,
        ?float  $rijksdriehoekY,
        ?float  $rijksdriehoekZ
    ) {
        $this->addresseerbaarObjectId = $addresseerbaarObjectId;
        $this->nummerAanduidingId = $nummerAanduidingId;
        $this->gpsLatitude = $gpsLatitude;
        $this->gpsLongitude = $gpsLongitude;
        $this->rijksdriehoekX = $rijksdriehoekX;
        $this->rijksdriehoekY = $rijksdriehoekY;
        $this->rijksdriehoekZ = $rijksdriehoekZ;
    }

    public function getAddresseerbaarObjectId(): ?string
    {
        return $this->addresseerbaarObjectId;
    }

    public function getNummerAanduidingId(): ?string
    {
        return $this->nummerAanduidingId;
    }

    public function getGpsLatitude(): ?float
    {
        return $this->gpsLatitude;
    }

    public function getGpsLongitude(): ?float
    {
        return $this->gpsLongitude;
    }

    public function getRijksdriehoekX(): ?float
    {
        return $this->rijksdriehoekX;
    }

    public function getRijksdriehoekY(): ?float
    {
        return $this->rijksdriehoekY;
    }

    public function getRijksdriehoekZ(): ?float
    {
        return $this->rijksdriehoekZ;
    }

    public function toArray(): array
    {
        return [
            'addresseerbaarObjectId' => $this->addresseerbaarObjectId,
            'nummerAanduidingId' => $this->nummerAanduidingId,
            'gpsLatitude' => $this->gpsLatitude,
            'gpsLongitude' => $this->gpsLongitude,
            'rijksdriehoekX' => $this->rijksdriehoekX,
            'rijksdriehoekY' => $this->rijksdriehoekY,
            'rijksdriehoekZ' => $this->rijksdriehoekZ,
        ];
    }
}
