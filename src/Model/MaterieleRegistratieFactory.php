<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class MaterieleRegistratieFactory extends AbstractFactory
{
    public static function fromResponse($response)
    {
        return new MaterieleRegistratie(
            self::pluckString('datumAanvang', $response),
            self::pluckString('datumEinde', $response),
        );
    }
}
