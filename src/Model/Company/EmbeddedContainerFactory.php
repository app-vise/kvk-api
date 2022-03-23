<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

use Appvise\KvkApi\Model\AbstractFactory;

class EmbeddedContainerFactory extends AbstractFactory
{
    public static function createArray($array): array
    {
        $list = [];
        foreach ($array as $item) {
            $list[] = self::fromResponse($item);
        }

        return $list;
    }

    public static function fromResponse($response): EmbeddedContainer
    {
        return new EmbeddedContainer(
            EigenaarFactory::fromResponse(self::pluckArray('eigenaar', $response)),
            VestigingFactory::fromResponse(self::pluckArray('hoofdvestiging', $response))
        );
    }
}
