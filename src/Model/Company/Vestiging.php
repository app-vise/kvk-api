<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

use Appvise\KvkApi\Model\MaterieleRegistratie;
use DateTime;

class Vestiging
{
    private $vestigingsnummer;
    private $kvkNummer;
    private $rsin;
    private $indNonMailing;
    private $formeleRegistratiedatum;
    private $materieleRegistratie;
    private $eersteHandelsnaam;
    private $indHoofdvestiging;
    private $indCommercieleVestiging;
    private $voltijdWerkzamePersonen;
    private $totaalWerkzamePersonen;
    private $deeltijdWerkzamePersonen;
    /** @var Adres[] */
    private $adressen;
    /** @var string[] */
    private $websites;
    /** @var SbiActiviteit[] */
    private $sbiActiviteiten;
    /** @var Link[] */
    private $links;

    public function __construct(
        string $kvkNummer,
        string $vestigingsnummer,
        ?string $rsin,
        ?string $indNonMailing,
        ?DateTime $formeleRegistratiedatum,
        ?MaterieleRegistratie $materieleRegistratie,
        ?string $eersteHandelsnaam,
        ?string $indHoofdvestiging,
        ?string $indCommercieleVestiging,
        ?int $voltijdWerkzamePersonen,
        ?int $deeltijdWerkzamePersonen,
        ?array $adressen,
        ?array $websites,
        ?array $sbiActiviteiten,
        ?array $links
    ) {
        $this->kvkNummer = $kvkNummer;
        $this->vestigingsnummer = $vestigingsnummer;
        $this->rsin = $rsin;
        $this->indNonMailing = $indNonMailing;
        $this->formeleRegistratiedatum = $formeleRegistratiedatum;
        $this->materieleRegistratie = $materieleRegistratie;
        $this->eersteHandelsnaam = $eersteHandelsnaam;
        $this->indHoofdvestiging = $indHoofdvestiging;
        $this->indCommercieleVestiging = $indCommercieleVestiging;
        $this->voltijdWerkzamePersonen = $voltijdWerkzamePersonen;
        $this->deeltijdWerkzamePersonen = $deeltijdWerkzamePersonen;
        $this->adressen = $adressen;
        $this->websites = $websites;
        $this->sbiActiviteiten = $sbiActiviteiten;
        $this->links = $links;
    }

    public function getRsin(): ?string
    {
        return $this->rsin;
    }

    public function getIndNonMailing(): ?string
    {
        return $this->indNonMailing;
    }

    public function getFormeleRegistratiedatum(): ?DateTime
    {
        return $this->formeleRegistratiedatum;
    }

    public function getMaterieleRegistratie(): ?MaterieleRegistratie
    {
        return $this->materieleRegistratie;
    }

    public function getEersteHandelsnaam(): ?string
    {
        return $this->eersteHandelsnaam;
    }

    public function getIndHoofdvestiging(): ?string
    {
        return $this->indHoofdvestiging;
    }

    public function getIndCommercieleVestiging(): ?string
    {
        return $this->indCommercieleVestiging;
    }

    public function getVoltijdWerkzamePersonen(): ?int
    {
        return $this->voltijdWerkzamePersonen;
    }

    public function getTotaalWerkzamePersonen(): ?int
    {
        return $this->totaalWerkzamePersonen;
    }

    public function getDeeltijdWerkzamePersonen(): ?int
    {
        return $this->deeltijdWerkzamePersonen;
    }

    public function getWebsites(): ?array
    {
        return $this->websites;
    }

    public function getSbiActiviteiten()
    {
        return $this->sbiActiviteiten;
    }

    public function getLinks()
    {
        return $this->links;
    }

    public function getKvkNummer(): string
    {
        return $this->kvkNummer;
    }

    public function getVestigingsNummer(): string
    {
        return $this->vestigingsnummer;
    }

    public function getAdressen(): array
    {
        return $this->adressen;
    }
}
