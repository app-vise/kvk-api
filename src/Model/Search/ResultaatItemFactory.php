<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Search;

use Appvise\KvkApi\Model\AbstractFactory;
use Appvise\KvkApi\Model\LinkFactory;

class ResultaatItemFactory extends AbstractFactory
{
    public static function fromResponse(array $response): ResultaatItem
    {
        return new ResultaatItem(
            self::pluckString('kvkNummer', $response),
            self::pluckString('rsin', $response),
            self::pluckString('vestigingsnummer', $response),
            self::pluckString('handelsnaam', $response),
            self::pluckString('adresType', $response),
            self::pluckString('straatnaam', $response),
            self::pluckString('postcode', $response),
            self::pluckString('plaats', $response),
            self::pluckString('huisnummer', $response),
            self::pluckString('huisnummerToevoeging', $response),
            self::pluckString('type', $response),
            self::pluckString('actief', $response),
            self::pluckString('vervallenNaam', $response),
            self::extractLinks($response['links']),
        );
    }

    public static function extractLinks(array $responseLinks): array
    {
        $links = [];
        foreach ($responseLinks as $link) {
            $links[] = LinkFactory::fromResponse($link);
        }

        return $links;
    }
}
