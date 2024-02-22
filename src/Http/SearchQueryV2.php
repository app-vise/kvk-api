<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Http;

class SearchQueryV2 implements QueryInterface
{
    /** @var string */
    private $kvkNummer;

    /** @var string */
    private $rsin;

    /** @var string */
    private $vestigingsnummer;

    /** @var string */
    private $naam;

    /** @var string */
    private $straatnaam;

    /** @var int */
    private $huisnummer;

    /** @var string */
    private $huisletter;

    /** @var string */
    private $postcode;

    /** @var string */
    private $plaats;

    /** @var int */
    private $postbusnummer;

    /** @var string */
    private $type;

    /** @var bool */
    private $inclusiefinactieveregistraties;

    /** @var int */
    private $pagina;

    /** @var int */
    private $resultatenPerPagina;


    public function setKvkNummer(string $kvkNummer)
    {
        $this->kvkNummer = $kvkNummer;
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

    public function setHuisnummer(int $huisnummer)
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

    public function setPlaats(string $plaats)
    {
        $this->plaats = $plaats;
    }

    public function setPostbusnummer(int $postbusnummer)
    {
        $this->postbusnummer = $postbusnummer;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function setInclusiefinactieveregistraties(bool $inclusiefinactieveregistraties)
    {
        $this->inclusiefinactieveregistraties = $inclusiefinactieveregistraties;
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
            'kvkNummer' => $this->kvkNummer,
            'rsin' => $this->rsin,
            'vestigingsnummer' => $this->vestigingsnummer,
            'naam' => $this->naam,
            'straatnaam' => $this->straatnaam,
            'huisnummer' => $this->huisnummer,
            'huisletter' => $this->huisletter,
            'postcode' => $this->postcode,
            'plaats' => $this->plaats,
            'type' => $this->type,
            'inclusiefinactieveregistraties' => $this->inclusiefinactieveregistraties,
            'pagina' => $this->pagina,
            'resultatenPerPagina' => $this->resultatenPerPagina,
        ];
    }
}
