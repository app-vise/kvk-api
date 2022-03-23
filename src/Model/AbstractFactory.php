<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

use DateTime;

class AbstractFactory
{
    protected static function pluckString($needle, $haystack): ?string
    {
        return self::extract($needle, $haystack);
    }

    protected static function pluckFloat($needle, $haystack): ?float
    {
        return (float)self::extract($needle, $haystack);
    }

    protected static function pluckInteger($needle, $haystack): ?int
    {
        return (int)self::extract($needle, $haystack);
    }

    protected static function pluckArray($needle, $haystack): ?array
    {
        return (array)self::extract($needle, $haystack);
    }

    protected static function pluckDate($needle, $haystack, $format = 'Ymd'): ?DateTime
    {
        $date = (string)self::extract($needle, $haystack);
        if (! $date) {
            return null;
        }

        return DateTime::createFromFormat($format, $haystack[$needle]);
    }

    public static function extractAdressen(array $responseAdressen): array
    {
        $adressen = [];
        foreach ($responseAdressen as $adres) {
            $adressen[] = AdresFactory::fromResponse($adres);
        }

        return $adressen;
    }

    public static function extractWebsites(array $responseWebsites): array
    {
        $websites = [];
        foreach ($responseWebsites as $website) {
            $websites[] = $website;
        }

        return $websites;
    }

    public static function extractSbiActiviteiten(array $responseSbiActiviteiten): array
    {
        $sbiActiviteiten = [];
        foreach ($responseSbiActiviteiten as $sbiActiviteit) {
            $sbiActiviteiten[] = SbiActiviteitFactory::fromResponse($sbiActiviteit);
        }

        return $sbiActiviteiten;
    }

    public static function extractLinks(array $responseLinks): array
    {
        $links = [];
        foreach ($responseLinks as $link) {
            $links[] = LinkFactory::fromResponse($link);
        }

        return $links;
    }

    private static function extract($needle, $haystack)
    {
        if (array_key_exists($needle, $haystack)) {
            return $haystack[$needle];
        }

        return null;
    }
}
