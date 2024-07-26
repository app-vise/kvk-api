<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Http;

class SearchQuery implements QueryInterface
{
    /** @var string */
    private $kvkNumber;

    /** @var string */
    private $rsin;

    /** @var string */
    private $vestigingsnummer;

    /** @var string */
    private $naam;

    /** @var string */
    private $straatnaam;

    /** @var string */
    private $huisnummer;

    /** @var string */
    private $huisletter;

    /** @var string */
    private $postcode;

    /** @var string */
    private $postbusnummer;

    /** @var string */
    private $plaats;

    /** @var string */
    private $type;

    /** @var bool */
    private $inclusiefInactieveRegistraties;

    /** @var int */
    private $pagina;

    /** @var int */
    private $resultatenPerPagina;

    public function setKvkNumber(string $kvkNumber)
    {
        $this->kvkNumber = $kvkNumber;
    }

    public function setRsin(string $rsin)
    {
        $this->rsin = $rsin;
    }

    public function setVestigingsnummer(string $vestigingsnummer)
    {
        $this->vestigingsnummer = $vestigingsnummer;
    }

    public function setNaam(string $naam)
    {
        $this->naam = $naam;
    }

    public function setStraatnaam(string $straatnaam)
    {
        $this->straatnaam = $straatnaam;
    }

    public function setHuisnummer(string $huisnummer)
    {
        $this->huisnummer = $huisnummer;
    }

    public function setHuisletter(string $huisletter)
    {
        $this->huisletter = $huisletter;
    }

    public function setPostcode(string $postcode)
    {
        $this->postcode = $postcode;
    }

    public function setPostbusnummer(string $postbusnummer)
    {
        $this->postbusnummer = $postbusnummer;
    }

    public function setPlaats(string $plaats)
    {
        $this->plaats = $plaats;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function setInclusiefInactieveRegistraties(bool $inclusiefInactieveRegistraties)
    {
        $this->inclusiefInactieveRegistraties = $inclusiefInactieveRegistraties;
    }

    public function setPagina(int $pagina)
    {
        $this->pagina = $pagina;
    }

    public function setResultatenPerPagina(int $resultatenPerPagina)
    {
        $this->resultatenPerPagina = $resultatenPerPagina;
    }

    public function toArray(): array
    {
        return [
            'kvkNummer' => $this->kvkNumber,
            'rsin' => $this->rsin,
            'vestigingsnummer' => $this->vestigingsnummer,
            'naam' => $this->naam,
            'straatnaam' => $this->straatnaam,
            'huisnummer' => $this->huisnummer,
            'huisletter' => $this->huisletter,
            'postcode' => $this->postcode,
            'postbusnummer' => $this->postbusnummer,
            'plaats' => $this->plaats,
            'type' => $this->type,
            'inclusiefInactieveRegistraties' => $this->inclusiefInactieveRegistraties,
            'pagina' => $this->pagina,
            'resultatenPerPagina' => $this->resultatenPerPagina,
        ];
    }
}
