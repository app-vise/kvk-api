<?php

namespace Test;

use Appvise\KvkApi\Exception\NotFoundException;
use Appvise\KvkApi\Http\ProfileQuery;
use Appvise\KvkApi\Http\SearchQuery;
use Appvise\KvkApi\Http\VestigingsQuery;
use Appvise\KvkApi\KvkClientFactory;
use Appvise\KvkApi\Model\Company\BasisProfiel;
use Appvise\KvkApi\Model\Company\Vestiging;
use Appvise\KvkApi\Model\Search\ResultaatItem;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /** KvkClient $client */
    private $client;

    private const ENVIRONMENT = 'test';
    private const USER_KEY = 'NOT_AN_ACTUAL_API_KEY';
    private const ROOT_CERTIFICATE = '../../cert/private_chain.pem';

    public function setUp()
    {
        $this->client = KvkClientFactory::create(self::USER_KEY, self::ENVIRONMENT, self::ROOT_CERTIFICATE);
    }

    /**
     * @test
     * @dataProvider getKvkNumbers
     **/
    public function search(string $kvkNumber)
    {
        $query = new SearchQuery();
        $query->setKvkNumber($kvkNumber);

        $resultaten = $this->client->search($query);

        foreach ($resultaten->getResultaten() as $searchResult) {
            $this->assertInstanceOf(ResultaatItem::class, $searchResult);
            $this->assertEquals($kvkNumber, $searchResult->getKvkNumber());
        }
    }

    /**
     * @test
     * @dataProvider getKvkNumbers
     **/
    public function searchV2(string $kvkNumber)
    {
        $query = new SearchQuery(true);
        $query->setKvkNumber($kvkNumber);

        $resultaten = $this->client->searchV2($query);

        foreach ($resultaten->getResultaten() as $searchResult) {
            $this->assertInstanceOf(ResultaatItem::class, $searchResult);
            $this->assertEquals($kvkNumber, $searchResult->getKvkNumber());
        }
    }

    /**
     * @test
     * @dataProvider getNonExistingKvkNumbers
     **/
    public function search_non_existing_companies_should_throw_exception(string $kvkNumber)
    {
        $this->expectException(NotFoundException::class);

        $query = new SearchQuery();
        $query->setKvkNumber($kvkNumber);

        $this->client->search($query);
    }

    /**
     * @test
     * @dataProvider getKvkNumbers
     */
    public function get_basis_profiel(string $kvkNumber)
    {
        $query = new ProfileQuery($kvkNumber);

        $profile = $this->client->getBasisProfiel($query);

        $this->assertInstanceOf(BasisProfiel::class, $profile);
        $this->assertEquals($kvkNumber, $profile->getKvkNummer());
    }

    /**
     * @test
     * @dataProvider getVestigingsNumbers
     */
    public function get_vestiging_profiel(string $vestigingsnummer)
    {
        $query = new VestigingsQuery($vestigingsnummer);

        $profile = $this->client->getVestigingsProfiel($query);

        $this->assertInstanceOf(Vestiging::class, $profile);
        $this->assertEquals($vestigingsnummer, $profile->getVestigingsNummer());
    }

    /**
     * @test
     * @dataProvider getNonExistingVestigingNummers
     **/
    public function search_non_existing_vestigings_profielen_should_throw_exception(string $vestigingsnummer)
    {
        $this->expectException(NotFoundException::class);

        $query = new VestigingsQuery($vestigingsnummer);

        $this->client->getVestigingsProfiel($query);
    }
    /**
     * return string[][]
     */
    public function getKvkNumbers(): array
    {
        return [
            'Eenmanszaak' => [69599084],
            'NV' => [68727720, 90004760],
            'BV' => [68750110, 90001354],
            'Stichting' => [69599068, 90000102],
            'VoF' => [69599076, 90005414],
            'Coöperatie' => [55344526],
            'Kerkgenootschap' => [90002520],
            'Onderlinge Waarborg Maatschappij' => [90002490],
            'Vereniging van Eigenaars' => [90000749],
            'Maatschap' => [90001745],
            'Commanditaire Vennootschap' => [90003942],
            'Overige Privaatrechtelijke Rechtspersoon' => [55505201],
        ];
    }

    /**
     * return string[][]
     */
    public function getNonExistingKvkNumbers(): array
    {
        return [
            'Foutmelding' => [90004973],
            'Foutmelding' => [90002903],
        ];
    }

    /**
     * return string[][]
     */
    public function getVestigingsNumbers(): array
    {
        return [
            'Eenmanszaak' => ['000038509504', '000038509520', '990000160639', '990000406685', '990000528380', '990000592442', '990000958857'],
            'BV' => ['000037178598', '000037178601', '000037178602', '990000294664', '990000541921'],
            'VOF' => ['000038509474', '000038509490', '990000090842', '990000216645', '990000821206', '990000865418'],
            'Coöperatie' => ['000037178605'],
            'Onderlinge Waarborg Maatschappij' => ['990000246858', '990000473049'],
            'Maatschap' => ['990000637800'],
            'Commanditaire Vennootschap' => ['990000008288', '990000246530', '990000768218', '990000852070'],
        ];
    }

    /**
     * return string[][]
     */
    public function getNonExistingVestigingNummers(): array
    {
        return [
            "NV" => ['990000713088'],
            "Stichting" => ['990000912996'],
            "Kerkgenootschap" => ['990000785557'],
            "Vereniging" => ['990000767745', '990000929925'],
            "Vereniging van Eigenaars" => ['990000466854', '990000819757'],
            "Maatschap" => ['990000429373', '990000599766'],
        ];
    }
}
