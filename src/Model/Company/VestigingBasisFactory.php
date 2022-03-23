<?php

namespace Appvise\KvkApi\Model\Company;

use Appvise\KvkApi\Model\AbstractFactory;

class VestigingBasisFactory extends AbstractFactory
{
    public static function fromResponse($response)
    {
        return new VestigingBasis(
            self::pluckString('vestigingsnummer', $response),
            self::pluckString('kvkNummer', $response),
            self::pluckString('eersteHandelsnaam', $response),
            self::pluckString('indHoofdvestiging', $response),
            self::pluckString('indAdresAfgeschermd', $response),
            self::pluckString('indCommercieleVestiging', $response),
            self::pluckString('volledigAdres', $response),
            self::extractLinks(self::pluckArray('links', $response)),
        );
    }
}
