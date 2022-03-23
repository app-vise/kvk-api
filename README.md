# PHP KVK api client
As for 1 april 2022 there are some new API's available for interacting with KVK.
This library makes this easy for you. Check for installation and usage details below.

## Documentation
### Installation
Install this package via composer
```bash
composer require app-vise/kvk-api
```

Probably you want to install the KVK (Staat der Nederlanden Private Root CA - G1) certificate into you trusted chains.
For more information head to:
[Certificate information](https://developers.kvk.nl/nl/support/tls-certificate-chain-trust-instructions)

### Usage
```php
use Appvise\KvkApi\Http\SearchQuery;
use Appvise\KvkApi\Http\KvkClientFactory;
use Appvise\KvkApi\Exception\ApiException;
use Appvise\KvkApi\Exception\NotFoundException;

// for more information check:
// https://developers.kvk.nl/nl/support/tls-certificate-chain-trust-instructions
$rootCertificate = <location_of_root_certificate>;
$client = KvkClientFactory::create(<YOUR_API_KEY>, 'test | production', $rootCertificate);

$query = new SearchQuery();
$query->setKvkNumber('KVK nummer to search for');

try {
    $resultaten = $this->client->search($query);
    foreach ($resultaten->getResultaten() as $searchResult) {
        // do something with $searchResult
    }
} catch(NotFoundException | ApiException $exception) {
    // handle error
}
```

### Tests
```bash
composer test
```
