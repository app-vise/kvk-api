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
        string  $vestigingsNummer,
        ?string $kvkNummer,
        ?string $eersteHandelsnaam,
        ?string $indHoofdvestiging,
        ?string $indAdresAfgeschermd,
        ?string $indCommercieleVestiging,
        ?string $volledigAdres,
        ?array  $links
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

    public function getKvkNummer(): ?string
    {
        return $this->kvkNummer;
    }

    public function getVestigingsNummer(): string
    {
        return $this->vestigingsNummer;
    }

    public function getEersteHandelsnaam(): ?string
    {
        return $this->eersteHandelsnaam;
    }

    public function getIndHoofdvestiging(): ?string
    {
        return $this->indHoofdvestiging;
    }

    public function getIndAdresAfgeschermd(): ?string
    {
        return $this->indAdresAfgeschermd;
    }

    public function getIndCommercieleVestiging(): ?string
    {
        return $this->indCommercieleVestiging;
    }

    public function getVolledigAdres(): ?string
    {
        return $this->volledigAdres;
    }

    public function getLinks(): ?array
    {
        return $this->links;
    }

    public function getKvkNumber(): string
    {
        return $this->kvkNumber;
    }

    public function toArray(): array
    {
        $linksArray = [];
        if ($this->links) {
            foreach ($this->links as $link) {
                $linksArray[] = $link->toArray();
            }
        }

        return [
            'kvkNummer' => $this->kvkNummer,
            'vestigingsNummer' => $this->vestigingsNummer,
            'eersteHandelsnaam' => $this->eersteHandelsnaam,
            'indHoofdvestiging' => $this->indHoofdvestiging,
            'indAdresAfgeschermd' => $this->indAdresAfgeschermd,
            'indCommercieleVestiging' => $this->indCommercieleVestiging,
            'volledigAdres' => $this->volledigAdres,
            'links' => $linksArray,
        ];
    }
}
