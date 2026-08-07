<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

use DateTime;

class MaterieleRegistratie
{
    private $datumAanvang;

    private $datumEinde;

    public function __construct(?DateTime $datumAanvang, ?DateTime $datumEinde)
    {
        $this->datumAanvang = $datumAanvang;
        $this->datumEinde = $datumEinde;
    }

    public function getDatumAanvang(): ?DateTime
    {
        return $this->datumAanvang;
    }

    public function getDatumEinde(): ?DateTime
    {
        return $this->datumEinde;
    }

    public function toArray(): array
    {
        return [
            'datumAanvang' => $this->datumAanvang,
            'datumEinde' => $this->datumEinde,
        ];
    }
}
