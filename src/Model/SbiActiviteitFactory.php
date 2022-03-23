<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class SbiActiviteitFactory extends AbstractFactory
{
    public static function createArray($array): array
    {
        $list = [];
        foreach ($array as $item) {
            $list[] = self::fromResponse($item);
        }

        return $list;
    }

    public static function fromResponse($response): SbiActiviteit
    {
        return new SbiActiviteit(
            self::pluckString('sbiCode', $response),
            self::pluckString('sbiOmschrijving', $response),
            self::pluckString('indHoofdactiviteit', $response),
        );
    }
}
