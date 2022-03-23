<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Http;

use Appvise\KvkApi\Exception\ApiException;
use Appvise\KvkApi\Exception\NotFoundException;
use GuzzleHttp\ClientInterface as GuzzleHttpClientInterface;
use GuzzleHttp\Exception\RequestException as ExceptionRequestException;

class GuzzleClient implements ClientInterface
{
    /** @var GuzzleHttpClientInterface */
    private $guzzleClient;

    public function __construct(GuzzleHttpClientInterface $guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
    }

    public function hitEndpoint(string $endpoint, ?QueryInterface $query = null)
    {
        try {
            if ($query) {
                return $this->guzzleClient->request('GET', $endpoint, ['query' => $query->toArray()]);
            }

            return $this->guzzleClient->request('GET', $endpoint);
        } catch (ExceptionRequestException $exception) {
            if ($exception->getCode() == 404) {
                throw new NotFoundException('Bedrijf met KVK nummer kon niet gevonden worden');
            }

            throw new ApiException('KVK nummer kon niet opgezocht worden');
        }
    }
}
