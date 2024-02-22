<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\SearchV2;

use Appvise\KvkApi\Model\AbstractFactory;

class AdresFactory extends AbstractFactory
{
    public static function fromResponse($response): Adres
    {
        return new Adres(
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
