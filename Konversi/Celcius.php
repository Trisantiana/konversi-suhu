<?php

namespace Konversi;

class Celcius
{
    const CELCIUS = 5;

    const FARENHEIT = 9;

    const REAMUR = 4;

    public $derajat;

    public function setCelcius($derajat)
    {
        $this->derajat = $derajat;

        return $this;
    }

    public function getFarenheit()
    {
        $Farenheit = (self::FARENHEIT / self::CELCIUS) * $this->derajat + 32;

        return $Farenheit;
    }

    public function getReamur()
    {
        $Reamur = (self::REAMUR / self::CELCIUS) * $this->derajat;

        return $Reamur;
    }
}
