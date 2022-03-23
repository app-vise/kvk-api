<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class MaterieleRegistratieFactory extends AbstractFactory
{
    public static function fromResponse($response): MaterieleRegistratie
    {
        return new MaterieleRegistratie(
            self::pluckDate('datumAanvang', $response),
            self::pluckDate('datumEinde', $response),
        );
    }
}
