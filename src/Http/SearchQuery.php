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
    private $handelsnaam;

    /** @var string */
    private $straatnaam;

    /** @var string */
    private $plaats;

    /** @var string */
    private $postcode;

    /** @var string */
    private $huisnummer;

    /** @var string */
    private $huisnummerToevoeging;

    /** @var string */
    private $type;

    /** @var int */
    private $pagina;

    /** @var int */
    private $aantal;

    /** @var bool */
    private $inclusiefinactieveregistraties;

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

    public function setHandelsnaam(string $handelsnaam)
    {
        $this->handelsnaam = $handelsnaam;
    }

    public function setStraatnaam(string $straatnaam)
    {
        $this->straatnaam = $straatnaam;
    }

    public function setPlaats(string $plaats)
    {
        $this->plaats = $plaats;
    }

    public function setPostcode(string $postcode)
    {
        $this->postcode = $postcode;
    }

    public function setHuisnummer(string $huisnummer)
    {
        $this->huisnummer = $huisnummer;
    }

    public function setHuisnummerToevoeging(string $huisnummerToevoeging)
    {
        $this->huisnummerToevoeging = $huisnummerToevoeging;
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

    public function setAantal(int $aantal)
    {
        $this->aantal = $aantal;
    }

    public function toArray(): array
    {
        return [
            'kvkNummer' => $this->kvkNumber,
            'rsin' => $this->rsin,
            'vestigingsnummer' => $this->vestigingsnummer,
            'handelsnaam' => $this->handelsnaam,
            'straatnaam' => $this->straatnaam,
            'plaats' => $this->plaats,
            'postcode' => $this->postcode,
            'huisnummer' => $this->huisnummer,
            'huisnummerToevoeging' => $this->huisnummerToevoeging,
            'type' => $this->type,
            'inclusiefinactieveregistraties' => $this->inclusiefinactieveregistraties,
            'pagina' => $this->pagina,
            'aantal' => $this->aantal,
        ];
    }
}
