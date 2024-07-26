<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class BuitenlandAdresFactory extends AbstractFactory
{
    public static function fromResponse($response): BuitenlandAdres
    {
        return new BuitenlandAdres(
            self::pluckString('type', $response),
            self::pluckString('straatnaamHuisnummer', $response),
            self::pluckString('postcodeWoonplaats', $response),
            self::pluckString('land', $response),
        );
    }
}
