<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

use Appvise\KvkApi\Model\SbiActiviteit;

class BasisProfiel
{
    private $kvkNummer;
    private $indNonMailing;
    private $naam;
    private $formeleRegistratiedatum;
    private $materieleRegistratie;
    private $totaalWerkzamePersonen;
    private $statutaireNaam;
    private $handelsnamen;
    /** @var SbiActiviteit[] */
    private $sbiActiviteiten;
    /** @var Link[] */
    private $links;
    /** @var EmbeddedContainer */
    private $_embedded;

    public function __construct(string $kvkNummer, $indNonMailing, $naam, $formeleRegistratiedatum, $materieleRegistratie, $totaalWerkzamePersonen, $statutaireNaam, array $handelsnamen = null, array $sbiActiviteiten = null, array $links = [], $embedded)
    {
        $this->kvkNummer = $kvkNummer;
        $this->indNonMailing = $indNonMailing;
        $this->naam = $naam;
        $this->formeleRegistratiedatum = $formeleRegistratiedatum;
        $this->materieleRegistratie = $materieleRegistratie;
        $this->totaalWerkzamePersonen = $totaalWerkzamePersonen;
        $this->statutaireNaam = $statutaireNaam;
        $this->handelsnamen = $handelsnamen;
        $this->sbiActiviteiten = $sbiActiviteiten;
        $this->links = $links;
        $this->_embedded = $embedded;
    }

    public function getMaterieleRegistratie()
    {
        return $this->materieleRegistratie;
    }

    public function getNaam()
    {
        return $this->naam;
    }

    public function getLinks()
    {
        return $this->links;
    }

    public function getIndNonMailing()
    {
        return $this->indNonMailing;
    }

    public function getFormeleRegistratiedatum()
    {
        return $this->formeleRegistratiedatum;
    }

    public function getTotaalWerkzamePersonen()
    {
        return $this->totaalWerkzamePersonen;
    }

    public function getStatutaireNaam()
    {
        return $this->statutaireNaam;
    }

    public function getHandelsnamen()
    {
        return $this->handelsnamen;
    }

    public function getSbiActiviteiten()
    {
        return $this->sbiActiviteiten;
    }

    public function getEmbedded()
    {
        return $this->_embedded;
    }

    public function getKvkNummer(): string
    {
        return $this->kvkNummer;
    }
}
