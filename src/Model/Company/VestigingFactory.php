<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

use Appvise\KvkApi\Model\AbstractFactory;
use Appvise\KvkApi\Model\MaterieleRegistratieFactory;

class VestigingFactory extends AbstractFactory
{
    public static function fromResponse($response): ?Vestiging
    {
        if (! $response) {
            return null;
        }

        return new Vestiging(
            self::pluckString('kvkNummer', $response),
            self::pluckString('vestigingsnummer', $response),
            self::pluckString('rsin', $response),
            self::pluckString('indNonMailing', $response),
            self::pluckDate('formeleRegistratiedatum', $response),
            MaterieleRegistratieFactory::fromResponse($response['materieleRegistratie']),
            self::pluckString('eersteHandelsnaam', $response),
            self::pluckString('indHoofdvestiging', $response),
            self::pluckString('indCommercieleVestiging', $response),
            self::pluckInteger('voltijdWerkzamePersonen', $response),
            self::pluckInteger('deeltijdWerkzamePersonen', $response),
            self::extractAdressen(self::pluckArray('adressen', $response)),
            self::extractWebsites(self::pluckArray('websites', $response)),
            self::extractSbiActiviteiten(self::pluckArray('sbiActiviteiten', $response)),
            self::extractLinks(self::pluckArray('links', $response))
        );
    }
}
