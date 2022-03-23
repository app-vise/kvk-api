<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

use Appvise\KvkApi\Model\Adres;

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
        ?array $adressen,
        ?array $links
    ) {
        $this->rsin = $rsin;
        $this->rechtsvorm = $rechtsvorm;
        $this->uitgebreideRechtsvorm = $uitgebreideRechtsvorm;
        $this->adressen = $adressen;
        $this->links = $links;
    }

    public function getRsin()
    {
        return $this->rsin;
    }

    public function getRechtsvorm()
    {
        return $this->rechtsvorm;
    }

    public function getUitgebreideRechtsvorm()
    {
        return $this->uitgebreideRechtsvorm;
    }

    public function getAdressen()
    {
        return $this->adressen;
    }

    public function getLinks()
    {
        return $this->links;
    }
}
