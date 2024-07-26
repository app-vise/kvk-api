<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Http;

use Appvise\KvkApi\Model\Resultaat;
use Appvise\KvkApi\Model\Search\ResultaatItemFactory;

class SearchMapper
{
    public static function fromResponse(array $response)
    {
        return new Resultaat(
            $response['pagina'],
            $response['resultatenPerPagina'],
            $response['totaal'],
            self::extractCompanies($response['resultaten']),
            (array_key_exists('volgende', $response)) ? $response['volgende'] : null,
            (array_key_exists('vorige', $response)) ? $response['vorige'] : null,
        );
    }

    private static function extractCompanies(array $results): array
    {
        $companies = [];
        foreach ($results as $result) {
            $companies[] = ResultaatItemFactory::fromResponse($result);
        }

        return $companies;
    }
}
