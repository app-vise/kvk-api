<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Http;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\RequestInterface;

class KvkClientFactory
{
    private const PRODUCTION_URL = 'https://api.kvk.nl/';
    private const DEVELOPMENT_URL = 'https://developers.kvk.nl/test/';

    public static function create(string $userKey, string $stage = 'test', string $rootCertificate = null): KvkClientInterface
    {
        if ($rootCertificate === null) {
            trigger_error('Root certificate is required. Please configure your system or supply one here.', E_USER_DEPRECATED);
        }

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
