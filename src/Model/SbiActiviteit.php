<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class SbiActiviteit
{
    private $sbiCode;
    private $sbiOmschrijving;
    private $indHoofdactiviteit;

    public function __construct($sbiCode, $sbiOmschrijving, $indHoofdactiviteit)
    {
        $this->sbiCode = $sbiCode;
        $this->sbiOmschrijving = $sbiOmschrijving;
        $this->indHoofdactiviteit = $indHoofdactiviteit;
    }

    public function getSbiCode()
    {
        return $this->sbiCode;
    }

    public function getSbiOmschrijving()
    {
        return $this->sbiOmschrijving;
    }

    public function getIndHoofdactiviteit()
    {
        return $this->indHoofdactiviteit;
    }
}
