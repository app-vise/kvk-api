<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

use Appvise\KvkApi\Model\AbstractFactory;

class EigenaarFactory extends AbstractFactory
{
    public static function fromResponse($response)
    {
        return new Eigenaar(
            self::pluckString('rsin', $response),
            self::pluckString('rechtsvorm', $response),
            self::pluckString('uitgebreideRechtsvorm', $response),
            self::extractAdressen(self::pluckArray('adressen', $response)),
            self::extractLinks(self::pluckArray('links', $response)),
        );
    }
}
