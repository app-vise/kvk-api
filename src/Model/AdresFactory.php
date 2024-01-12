<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class AdresFactory extends AbstractFactory
{
    public static function fromResponse($response): Adres
    {
        return new Adres(
            self::pluckString('type', $response),
            self::pluckString('indAfgeschermd', $response),
            self::pluckString('volledigAdres', $response),
            self::pluckString('straatnaam', $response),
            self::pluckInteger('huisnummer', $response),
            self::pluckString('huisnummerToevoeging', $response),
            self::pluckInteger('huisletter', $response),
            self::pluckString('aanduidingBijHuisnummer', $response),
            self::pluckString('toevoegingAdres', $response),
            self::pluckString('postcode', $response),
            self::pluckInteger('postbusnummer', $response),
            self::pluckString('plaats', $response),
            self::pluckString('straatHuisnummer', $response),
            self::pluckString('postcodeWoonplaats', $response),
            self::pluckString('regio', $response),
            self::pluckString('land', $response),
            GeoDataFactory::fromResponse(self::pluckArray('geoData', $response)),
        );
    }
}
