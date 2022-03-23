<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Http;

interface ClientInterface
{
    public function hitEndpoint(string $endpoint, ?QueryInterface $query = null);
}
