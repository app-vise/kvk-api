<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

use Appvise\KvkApi\Model\Adres;
use Appvise\KvkApi\Model\Link;

class Eigenaar
{
    private $rsin;

    private $rechtsvorm;

    private $uitgebreideRechtsvorm;

    /** @var Adres[] */
    private $adressen;

    /** @var Link[] */
    private $links;

    public function __construct(
        ?string $rsin,
        ?string $rechtsvorm,
        ?string $uitgebreideRechtsvorm,
        ?array  $adressen,
        ?array  $links
    ) {
        $this->rsin = $rsin;
        $this->rechtsvorm = $rechtsvorm;
        $this->uitgebreideRechtsvorm = $uitgebreideRechtsvorm;
        $this->adressen = $adressen;
        $this->links = $links;
    }

    public function getRsin(): ?string
    {
        return $this->rsin;
    }

    public function getRechtsvorm(): ?string
    {
        return $this->rechtsvorm;
    }

    public function getUitgebreideRechtsvorm(): ?string
    {
        return $this->uitgebreideRechtsvorm;
    }

    public function getAdressen(): ?array
    {
        return $this->adressen;
    }

    public function getLinks(): ?array
    {
        return $this->links;
    }

    public function toArray(): array
    {
        $adressenArray = [];
        foreach ($this->adressen as $adres) {
            $adressenArray[] = $adres->toArray();
        }

        $linksArray = [];
        foreach ($this->links as $link) {
            $linksArray[] = $link->toArray();
        }

        return [
            'rsin' => $this->rsin,
            'rechtsvorm' => $this->rechtsvorm,
            'uitgebreideRechtsvorm' => $this->uitgebreideRechtsvorm,
            'adressen' => $adressenArray,
            'links' => $linksArray,
        ];
    }
}
