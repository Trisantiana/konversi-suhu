<?php

namespace Suhu;

class Farenheit

{
    const CELCIUS = 5;
    const REAMUR = 4;
    const FARENHEIT = 9;

    public $derajat;
    public $konversi;
    public $unit = 32;

    public function setFarenheit($derajat)
    {
        $this->konversi = self::FARENHEIT;
        $this->derajat = $derajat;
        
        return $this;
    }

    public function getCelcius()
    {
        $celcius = (self::CELCIUS / $this->konversi) * ($this->derajat - $this->unit);
        return $celcius;
    }
    public function getReamur()
    {
        $reamur = (self::REAMUR / $this->konversi) * ($this->derajat - $this->unit);
        return $reamur;

    }
}
    /*
    public function __destruct()
    {
        echo "Ingin menghitung lagi?(y/n)";
        $pernyataan = trim(fgets(STDIN));
        return $pernyataan;
    }
}

do{
    echo "Masukkan angka : ";

    $hasil = new Farenheit(trim(fgets(STDIN)));

    echo "Koversi suhu dari Farenheit ke Celcius : " . $hasil->setCelcius() . "\n";
    echo "Koversi suhu dari Farenheit ke Reamur : " . $hasil->setReamur() . "\n";
} while ($hasil->__destruct() == 'y');
*/