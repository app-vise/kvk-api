<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Http;

class SearchQuery implements SearchQueryInterface
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

    /** @var null|string */
    private $huisletter;

    /** @var null|string */
    private $postbusnummer;

    /** @var string */
    private $type;

    /** @var int */
    private $pagina;

    /** @var int */
    private $aantal;

    /** @var bool */
    private $inclusiefinactieveregistraties;
    /**
     * @var bool
     */
    private $isEndpointVersion1;

    public function __construct(bool $isEndpointVersion1 = true)
    {
        $this->isEndpointVersion1 = $isEndpointVersion1;
    }

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

    public function setHuisletter(?string $huisletter): void
    {
        $this->huisletter = $huisletter;
    }

    public function setPostbusnummer(string $postbusnummer): void
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

    public function setAantal(int $aantal)
    {
        $this->aantal = $aantal;
    }

    public function setIsEndpointVersion1(bool $isEndpointVersion1): self
    {
        $this->isEndpointVersion1 = $isEndpointVersion1;

        return $this;
    }

    public function toArray(): array
    {
        $array = [
            'kvkNummer' => $this->kvkNumber,
            'rsin' => $this->rsin,
            'vestigingsnummer' => $this->vestigingsnummer,
            'handelsnaam' => $this->handelsnaam,
            'straatnaam' => $this->straatnaam,
            'plaats' => $this->plaats,
            'postcode' => $this->postcode,
            'huisnummer' => $this->huisnummer,
            'type' => $this->type,
            'inclusiefinactieveregistraties' => $this->inclusiefinactieveregistraties,
            'pagina' => $this->pagina,
        ];

        if ($this->isEndpointVersion1) {
            $array['aantal'] = $this->aantal;
            $array['handelsnaam'] = $this->handelsnaam;
            $array['huisnummerToevoeging'] = $this->huisletter;
        } else {
            $array['resultatenPerPagina'] = $this->aantal;
            $array['naam'] = $this->handelsnaam;

            $array['postbusnummer'] = $this->postbusnummer;
            $array['huisletter'] = $this->huisletter;

            if (is_string($array['type'])) {
                $array['type'] = str_replace(',', '&', $array['type']);
            }
        }


        return $array;
    }
}
