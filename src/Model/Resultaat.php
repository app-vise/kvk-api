<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class Resultaat implements ResultaatInterface
{
    private $pagina;
    private $totaal;
    private $aantal;
    private $resultaten;
    private $volgende;
    private $vorige;

    public function __construct(int $pagina, int $totaal, int $aantal, array $resultaten, ?string $volgende = null, ?string $vorige = null)
    {
        $this->pagina = $pagina;
        $this->totaal = $totaal;
        $this->aantal = $aantal;
        $this->resultaten = $resultaten;
        $this->volgende = $volgende;
        $this->vorige = $vorige;
    }

    public function getPagina(): int
    {
        return $this->pagina;
    }

    public function getTotaal(): int
    {
        return $this->totaal;
    }

    public function getAantal(): int
    {
        return $this->aantal;
    }

    public function getResultaten(): array
    {
        return $this->resultaten;
    }

    public function getVolgende(): ?string
    {
        return $this->volgende;
    }

    public function getVorige(): ?string
    {
        return $this->vorige;
    }

    public function getPrevious(): ?string
    {
        return $this->vorige;
    }
}
