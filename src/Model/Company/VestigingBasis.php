<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

class VestigingBasis
{
    private $kvkNummer;
    private $vestigingsNummer;
    private $eersteHandelsnaam;
    private $indHoofdvestiging;
    private $indAdresAfgeschermd;
    private $indCommercieleVestiging;
    private $volledigAdres;
    private $links;

    public function __construct(
        string $vestigingsNummer,
        ?string $kvkNummer,
        ?string $eersteHandelsnaam,
        ?string $indHoofdvestiging,
        ?string $indAdresAfgeschermd,
        ?string $indCommercieleVestiging,
        ?string $volledigAdres,
        ?array $links
    ) {
        $this->vestigingsNummer = $vestigingsNummer;
        $this->kvkNummer = $kvkNummer;
        $this->eersteHandelsnaam = $eersteHandelsnaam;
        $this->indHoofdvestiging = $indHoofdvestiging;
        $this->indAdresAfgeschermd = $indAdresAfgeschermd;
        $this->indCommercieleVestiging = $indCommercieleVestiging;
        $this->volledigAdres = $volledigAdres;
        $this->links = $links;
    }

    public function getKvkNummer()
    {
        return $this->kvkNummer;
    }

    public function getVestigingsNummer()
    {
        return $this->vestigingsNummer;
    }

    public function getEersteHandelsnaam()
    {
        return $this->eersteHandelsnaam;
    }

    public function getIndHoofdvestiging()
    {
        return $this->indHoofdvestiging;
    }

    public function getIndAdresAfgeschermd()
    {
        return $this->indAdresAfgeschermd;
    }

    public function getIndCommercieleVestiging()
    {
        return $this->indCommercieleVestiging;
    }

    public function getVolledigAdres()
    {
        return $this->volledigAdres;
    }

    public function getLinks()
    {
        return $this->links;
    }

    public function getKvkNumber(): string
    {
        return $this->kvkNumber;
    }
}
