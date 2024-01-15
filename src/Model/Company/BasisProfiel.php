<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

use Appvise\KvkApi\Model\Link;
use Appvise\KvkApi\Model\MaterieleRegistratie;
use Appvise\KvkApi\Model\SbiActiviteit;
use DateTime;

class BasisProfiel
{
    private $kvkNummer;
    private $indNonMailing;
    private $naam;
    private $formeleRegistratiedatum;
    private $materieleRegistratie;
    private $totaalWerkzamePersonen;
    private $statutaireNaam;
    /** @var Handelsnaam[] */
    private $handelsnamen;
    /** @var SbiActiviteit[] */
    private $sbiActiviteiten;
    /** @var Link[] */
    private $links;
    /** @var EmbeddedContainer */
    private $_embedded;

    public function __construct(string $kvkNummer, string $naam, ?string $indNonMailing,  ?DateTime $formeleRegistratiedatum, ?MaterieleRegistratie $materieleRegistratie, ?int $totaalWerkzamePersonen, ?string $statutaireNaam, ?EmbeddedContainer $embedded, array $handelsnamen = null, array $sbiActiviteiten = null, array $links = [])
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

    public function getKvkNummer(): string
    {
        return $this->kvkNummer;
    }

    public function getNaam(): string
    {
        return $this->naam;
    }

    public function getMaterieleRegistratie(): ?MaterieleRegistratie
    {
        return $this->materieleRegistratie;
    }

    public function getLinks(): ?array
    {
        return $this->links;
    }

    public function getIndNonMailing(): ?string
    {
        return $this->indNonMailing;
    }

    public function getFormeleRegistratiedatum(): ?DateTime
    {
        return $this->formeleRegistratiedatum;
    }

    public function getTotaalWerkzamePersonen(): ?int
    {
        return $this->totaalWerkzamePersonen;
    }

    public function getStatutaireNaam(): ?string
    {
        return $this->statutaireNaam;
    }

    public function getHandelsnamen(): ?array
    {
        return $this->handelsnamen;
    }

    public function getSbiActiviteiten(): ?array
    {
        return $this->sbiActiviteiten;
    }

    public function getEmbedded(): ?EmbeddedContainer
    {
        return $this->_embedded;
    }
}
