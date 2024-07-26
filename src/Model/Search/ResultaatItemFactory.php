<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Search;

use Appvise\KvkApi\Model\AbstractFactory;
use Appvise\KvkApi\Model\BinnenlandAdres;
use Appvise\KvkApi\Model\BinnenlandAdresFactory;
use Appvise\KvkApi\Model\BuitenlandAdres;
use Appvise\KvkApi\Model\BuitenlandAdresFactory;
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
            self::pluckString('type', $response),
            self::pluckString('actief', $response),
            self::pluckString('vervallenNaam', $response),
            self::extractLinks($response['links']),
        );
    }

    public static function extractAdres(?array $responseAdres): BinnenlandAdres|BuitenlandAdres|null
    {
        if (!empty($responseAdres['binnenlandsAdres'])) {
            return BinnenlandAdresFactory::fromResponse($responseAdres['binnenlandsAdres']);
        }
        if (!empty($responseAdres['buitenlandsAdres'])) {
            return BuitenlandAdresFactory::fromResponse($responseAdres['buitenlandsAdres']);
        }
        return null;
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
