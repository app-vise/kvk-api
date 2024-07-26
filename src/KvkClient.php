<?php

declare(strict_types=1);

namespace Appvise\KvkApi;

use Appvise\KvkApi\Model\Link;
use Appvise\KvkApi\Http\QueryInterface;
use Appvise\KvkApi\Http\ClientInterface;
use Appvise\KvkApi\Http\SearchMapper;
use Appvise\KvkApi\Model\Company\EigenaarFactory;
use Appvise\KvkApi\Model\Company\VestigingFactory;
use Appvise\KvkApi\Model\Company\BasisProfielFactory;
use Appvise\KvkApi\Model\Company\VestigingListFactory;

final class KvkClient implements KvkClientInterface
{
    private $baseUrl;

    /** @var ClientInterface */
    private $client;

    public function __construct(ClientInterface $client, string $url)
    {
        $this->baseUrl = $url;
        $this->client = $client;
    }

    public function getBasisProfielEigenaar(QueryInterface $query)
    {
        $response = $this->client->hitEndpoint("{$this->baseUrl}api/v1/basisprofielen/{$query->toArray()['kvkNummer']}/eigenaar?geoData={$query->toArray()['geoData']}");
        $result = $this->decodeJson($response);

        return EigenaarFactory::fromResponse($result);
    }

    public function getBasisProfielHoofdVestiging(QueryInterface $query)
    {
        $response = $this->client->hitEndpoint("{$this->baseUrl}api/v1/basisprofielen/{$query->toArray()['kvkNummer']}/hoofdvestiging?geoData={$query->toArray()['geoData']}");
        $response = $this->decodeJson($response);

        return VestigingFactory::fromResponse($response);
    }

    public function getBasisProfielVestigingen(QueryInterface $query)
    {
        $response = $this->client->hitEndpoint("{$this->baseUrl}api/v1/basisprofielen/{$query->toArray()['kvkNummer']}/vestigingen");
        $result = $this->decodeJson($response);

        return VestigingListFactory::fromResponse($result);
    }

    public function getLink(Link $link)
    {
        $response = $this->client->hitEndpoint($link->getHref());
        $result = $this->decodeJson($response);

        return $result;
    }

    public function search(QueryInterface $query)
    {
        $response = $this->client->hitEndpoint("{$this->baseUrl}api/v2/zoeken", $query);
        $result = $this->decodeJson($response);

        return SearchMapper::fromResponse($result);
    }

    public function getBasisProfiel(QueryInterface $query)
    {
        $response = $this->client->hitEndpoint("{$this->baseUrl}api/v1/basisprofielen/{$query->toArray()['kvkNummer']}");
        $result = $this->decodeJson($response);

        return BasisProfielFactory::fromResponse($result);
    }

    public function getVestigingsProfiel(QueryInterface $query)
    {
        $response = $this->client->hitEndpoint("{$this->baseUrl}api/v1/vestigingsprofielen/{$query->toArray()['vestigingsnummer']}");
        $result = $this->decodeJson($response);

        return VestigingFactory::fromResponse($result);
    }

    private function decodeJson($response)
    {
        $body = $response->getBody();
        $contents = $body->getContents();

        return json_decode($contents, true);
    }
}
