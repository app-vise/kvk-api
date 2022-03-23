<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Http;

interface QueryInterface
{
    public function toArray(): array;
}
