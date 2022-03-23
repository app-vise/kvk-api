<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

use Appvise\KvkApi\Model\AbstractFactory;

class HandelsnaamFactory extends AbstractFactory
{
    public static function createArray($array): array
    {
        $list = [];
        foreach ($array as $item) {
            $list[] = self::fromResponse($item);
        }

        return $list;
    }

    public static function fromResponse($response): Handelsnaam
    {
        return new Handelsnaam(
            self::pluckString('naam', $response),
            self::pluckInteger('volgorde', $response)
        );
    }
}
