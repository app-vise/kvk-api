<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Http;

interface SearchQueryInterface extends QueryInterface
{
    public function setIsEndpointVersion1(bool $isEndpointVersion1): self;
}
