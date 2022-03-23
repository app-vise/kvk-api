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

    public function __construct($addresseerbaarObjectId, $nummerAanduidingId, $gpsLatitude, $gpsLongitude, $rijksdriehoekX, $rijksdriehoekY, $rijksdriehoekZ)
    {
        $this->addresseerbaarObjectId = $addresseerbaarObjectId;
        $this->nummerAanduidingId = $nummerAanduidingId;
        $this->gpsLatitude = $gpsLatitude;
        $this->gpsLongitude = $gpsLongitude;
        $this->rijksdriehoekX = $rijksdriehoekX;
        $this->rijksdriehoekY = $rijksdriehoekY;
        $this->rijksdriehoekZ = $rijksdriehoekZ;
    }

    public function getAddresseerbaarObjectId()
    {
        return $this->addresseerbaarObjectId;
    }

    public function getNummerAanduidingId()
    {
        return $this->nummerAanduidingId;
    }

    public function getGpsLatitude()
    {
        return $this->gpsLatitude;
    }

    public function getGpsLongitude()
    {
        return $this->gpsLongitude;
    }

    public function getRijksdriehoekX()
    {
        return $this->rijksdriehoekX;
    }

    public function getRijksdriehoekY()
    {
        return $this->rijksdriehoekY;
    }

    public function getRijksdriehoekZ()
    {
        return $this->rijksdriehoekZ;
    }
}
