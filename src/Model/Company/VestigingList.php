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
        array $vestigingen,
        ?int $aantalCommercieleVestigingen,
        ?int $aantalNietCommercieleVestigingen,
        ?int $totaalAantalVestigingen,
        ?array $links
    ) {
        $this->kvkNummer = $kvkNummer;
        $this->vestigingen = $vestigingen;
        $this->aantalCommercieleVestigingen = $aantalCommercieleVestigingen;
        $this->aantalNietCommercieleVestigingen = $aantalNietCommercieleVestigingen;
        $this->totaalAantalVestigingen = $totaalAantalVestigingen;
        $this->links = $links;
    }

    public function getKvkNummer(): string
    {
        return $this->kvkNummer;
    }

    public function getAantalCommercieleVestigingen(): ?int
    {
        return $this->aantalCommercieleVestigingen;
    }

    public function getAantalNietCommercieleVestigingen(): ?int
    {
        return $this->aantalNietCommercieleVestigingen;
    }

    public function getTotaalAantalVestigingen(): ?int
    {
        return $this->totaalAantalVestigingen;
    }

    public function getVestigingen(): array
    {
        return $this->vestigingen;
    }

    public function getLinks(): ?array
    {
        return $this->links;
    }
}
