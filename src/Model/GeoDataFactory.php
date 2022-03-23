<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class GeoDataFactory extends AbstractFactory
{
    public static function fromResponse($response): ?GeoData
    {
        if (! $response) {
            return null;
        }

        return new GeoData(
            self::pluckString('addresseerbaarObjectId', $response),
            self::pluckString('nummerAanduidingId', $response),
            self::pluckFloat('gpsLatitude', $response),
            self::pluckFloat('gpsLongitude', $response),
            self::pluckFloat('rijksdriehoekX', $response),
            self::pluckFloat('rijksdriehoekY', $response),
            self::pluckFloat('rijksdriehoekZ', $response),
        );
    }
}
