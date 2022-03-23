<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class LinkFactory extends AbstractFactory
{
    public static function createArray($array): array
    {
        $list = [];
        foreach ($array as $item) {
            $list[] = self::fromResponse($item);
        }

        return $list;
    }

    public static function fromResponse($response): Link
    {
        return new Link(
            self::pluckString('rel', $response),
            self::pluckString('href', $response),
            self::pluckString('hreflang', $response),
            self::pluckString('media', $response),
            self::pluckString('title', $response),
            self::pluckString('type', $response),
            self::pluckString('deprecation', $response),
            self::pluckString('profile', $response),
            self::pluckString('name', $response),
        );
    }
}
