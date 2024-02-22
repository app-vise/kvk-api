<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\SearchV2;

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
            self::pluckString('naam', $response),
            self::extractAdres($response['adres'] ?? []),
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

    public static function extractAdres(array $adressen): array
    {
        $items = [];
        foreach ($adressen as $type => $adres) {
            $items[$type] = AdresFactory::fromResponse($adres);
        }

        return $items;
    }
}
