<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class SbiActiviteit
{
    private $sbiCode;

    private $sbiOmschrijving;

    private $indHoofdactiviteit;

    public function __construct(?string $sbiCode, ?string $sbiOmschrijving, ?string $indHoofdactiviteit)
    {
        $this->sbiCode = $sbiCode;
        $this->sbiOmschrijving = $sbiOmschrijving;
        $this->indHoofdactiviteit = $indHoofdactiviteit;
    }

    public function getSbiCode(): ?string
    {
        return $this->sbiCode;
    }

    public function getSbiOmschrijving(): ?string
    {
        return $this->sbiOmschrijving;
    }

    public function getIndHoofdactiviteit(): ?string
    {
        return $this->indHoofdactiviteit;
    }

    public function toArray(): array
    {
        return [
            'sbiCode' => $this->sbiCode,
            'sbiOmschrijving' => $this->sbiOmschrijving,
            'indHoofdactiviteit' => $this->indHoofdactiviteit,
        ];
    }
}
