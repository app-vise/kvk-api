<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

use Appvise\KvkApi\Model\AbstractFactory;
use Appvise\KvkApi\Model\LinkFactory;
use Appvise\KvkApi\Model\MaterieleRegistratieFactory;
use Appvise\KvkApi\Model\SbiActiviteitFactory;

class BasisProfielFactory extends AbstractFactory
{
    public static function fromResponse(array $response)
    {
        return new BasisProfiel(
            self::pluckString('kvkNummer', $response),
            self::pluckString('indNonMailing', $response),
            self::pluckString('naam', $response),
            self::pluckString('formeleRegistratiedatum', $response),
            MaterieleRegistratieFactory::fromResponse($response['materieleRegistratie']),
            self::pluckInteger('totaalWerkzamePersonen', $response),
            self::pluckString('statutaireNaam', $response),
            HandelsnaamFactory::createArray(self::pluckArray('handelsnamen', $response)),
            SbiActiviteitFactory::createArray(self::pluckArray('sbiActiviteiten', $response)),
            LinkFactory::createArray($response['links']),
            EmbeddedContainerFactory::fromResponse($response['_embedded']),
        );
    }
}
