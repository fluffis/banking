<?php

declare(strict_types=1);

namespace byrokrat\banking\Format;

/**
 * Create the default set of account number formats
 *
 * This class has been auto-generated and should not be edited directly
 *
 * Generated in accordance with BGC specifications dated 2024-04-22.
 */
class FormatFactory
{
    public function createFormats(): FormatContainer
    {
        return new FormatContainer(...[
            new Build\SveaFormat(),
            new Build\AionFormat(),
            new Build\AvanzaFormat(),
            new Build\BluestepFormat(),
            new Build\BnpParibasFormat(),
            new Build\CitibankFormat(),
            new Build\Danske1Format(),
            new Build\DnbFormat(),
            new Build\EkobankenFormat(),
            new Build\ErikPenserFormat(),
            new Build\IcaFormat(),
            new Build\IkanoFormat(),
            new Build\JakFormat(),
            new Build\KlarnaFormat(),
            new Build\LandshypotekFormat(),
            new Build\LunarFormat(),
            new Build\LanOchSparFormat(),
            new Build\Lansforsakringar1AFormat(),
            new Build\Lansforsakringar1BFormat(),
            new Build\MarginalenFormat(),
            new Build\MedMeraFormat(),
            new Build\MultitudeFormat(),
            new Build\NobaFormat(),
            new Build\Nordea1AFormat(),
            new Build\Nordea1BFormat(),
            new Build\NordnetFormat(),
            new Build\NorthmillFormat(),
            new Build\ResursFormat(),
            new Build\Riksgalden1Format(),
            new Build\SantanderFormat(),
            new Build\SbabFormat(),
            new Build\SebFormat(),
            new Build\SkandiabankenFormat(),
            new Build\Swedbank1Format(),
            new Build\AlandsbankenFormat(),
            new Build\Danske2Format(),
            new Build\HandelsbankenFormat(),
            new Build\NordeaPersonalFormat(),
            new Build\PlusgiroFormat(),
            new Build\Riksgalden2Format(),
            new Build\SparbankenSydFormat(),
            new Build\SparbankenOresundFormat(),
            new Build\Swedbank2Format(),
            new Build\UnknownFormat(),
        ]);
    }
}
