<?php


namespace App\Service;


class LicencePriceCalculator
{
    public static function calculatePrice(int $teamSize)
    {
        return $teamSize <= 5 ? $teamSize * 15 : 50 +($teamSize-5)*10;
    }
}
