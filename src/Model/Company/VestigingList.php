<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

class VestigingList
{
    private $kvkNummer;
    private $aantalCommercieleVestigingen;
    private $aantalNietCommercieleVestigingen;
    private $totaalAantalVestigingen;
    /** @var VestigingBasis[] */
    private $vestigingen;
    /** @var Link[] */
    private $links;

    public function __construct(
        string $kvkNummer,
        ?int $aantalCommercieleVestigingen,
        ?int $aantalNietCommercieleVestigingen,
        ?int $totaalAantalVestigingen,
        ?array $vestigingen,
        ?array $links
    ) {
        $this->kvkNummer = $kvkNummer;
        $this->aantalCommercieleVestigingen = $aantalCommercieleVestigingen;
        $this->aantalNietCommercieleVestigingen = $aantalNietCommercieleVestigingen;
        $this->totaalAantalVestigingen = $totaalAantalVestigingen;
        $this->vestigingen = $vestigingen;
        $this->links = $links;
    }

    public function getAantalCommercieleVestigingen()
    {
        return $this->aantalCommercieleVestigingen;
    }

    public function getAantalNietCommercieleVestigingen()
    {
        return $this->aantalNietCommercieleVestigingen;
    }

    public function getTotaalAantalVestigingen()
    {
        return $this->totaalAantalVestigingen;
    }

    public function getVestigingen()
    {
        return $this->vestigingen;
    }

    public function getLinks()
    {
        return $this->links;
    }

    public function getKvkNummer(): string
    {
        return $this->kvkNummer;
    }
}
