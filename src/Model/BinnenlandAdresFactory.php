<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class BinnenlandAdresFactory extends AbstractFactory
{
    public static function fromResponse($response): BinnenlandAdres
    {
        return new BinnenlandAdres(
            self::pluckString('type', $response),
            self::pluckString('straatnaam', $response),
            self::pluckInteger('huisnummer', $response),
            self::pluckString('huisletter', $response),
            self::pluckInteger('postbusnummer', $response),
            self::pluckString('postcode', $response),
            self::pluckString('plaats', $response),
        );
    }
}
