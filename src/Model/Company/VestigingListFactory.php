<?php

namespace Appvise\KvkApi\Model\Company;

use Appvise\KvkApi\Model\AbstractFactory;

class VestigingListFactory extends AbstractFactory
{
    public static function fromResponse($response): VestigingList
    {
        return new VestigingList(
            self::pluckString('kvkNummer', $response),
            self::extractVestigingen(self::pluckArray('vestigingen', $response)),
            self::pluckInteger('aantalCommercieleVestigingen', $response),
            self::pluckInteger('aantalNietCommercieleVestigingen', $response),
            self::pluckInteger('totaalAantalVestigingen', $response),
            self::extractLinks(self::pluckArray('links', $response)),
        );
    }

    public static function extractVestigingen(array $vestigingenResponse): array
    {
        $vestigingen = [];
        foreach ($vestigingenResponse as $vestiging) {
            $vestigingen[] = VestigingBasisFactory::fromResponse($vestiging);
        }

        return $vestigingen;
    }
}
