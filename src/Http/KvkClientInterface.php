<?php

namespace Appvise\KvkApi\Http;

use Appvise\KvkApi\Model\Link;

interface KvkClientInterface
{
    public function search(QueryInterface $query);

    public function getBasisProfiel(QueryInterface $query);

    public function getBasisProfielEigenaar(QueryInterface $query);

    public function getBasisProfielHoofdVestiging(QueryInterface $query);

    public function getBasisProfielVestigingen(QueryInterface $query);

    public function getVestigingsProfiel(QueryInterface $query);

    public function getLink(Link $link);
}
