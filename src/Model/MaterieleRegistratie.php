<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class MaterieleRegistratie
{
    private $datumAanvang;
    private $datumEinde;

    public function __construct($datumAanvang, $datumEinde)
    {
        $this->datumAanvang = $datumAanvang;
        $this->datumEinde = $datumEinde;
    }

    public function getDatumAanvang()
    {
        return $this->datumAanvang;
    }

    public function getDatumEinde()
    {
        return $this->datumEinde;
    }
}
