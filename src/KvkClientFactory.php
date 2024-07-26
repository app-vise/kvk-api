<?php

declare(strict_types=1);

namespace Appvise\KvkApi;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\Middleware;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\RequestInterface;
use Appvise\KvkApi\Http\ClientInterface;
use Appvise\KvkApi\Http\GuzzleClient;

class KvkClientFactory
{
    private const PRODUCTION_URL = 'https://api.kvk.nl/';
    private const DEVELOPMENT_URL = 'https://developers.kvk.nl/test/';

    public static function create(string $userKey, string $stage = 'test', string $rootCertificate = null): KvkClientInterface
    {

        switch ($stage) {
            case 'production':
                return new KvkClient(self::createHttpClient($userKey, $rootCertificate), self::PRODUCTION_URL);

                break;
            case 'test':
            default:
                return new KvkClient(self::createHttpClient($userKey), self::DEVELOPMENT_URL);

                break;
        }
    }

    private static function createHttpClient(string $userKey, ?string $rootCertificate = null): ClientInterface
    {
        $stack = HandlerStack::create();
        $stack->unshift(Middleware::mapRequest(function (RequestInterface $request) use ($userKey) {
            return $request->withUri(Uri::withQueryValue($request->getUri(), 'user_key', $userKey));
        }));

        $client = new Client([
            'debug' => false,
            'verify' => $rootCertificate ?? false,
            'handler' => $stack,
        ]);

        return new GuzzleClient($client);
    }
}
