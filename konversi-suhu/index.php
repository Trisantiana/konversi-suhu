<?php

require __DIR__ . '/vendor/autoload.php';

use Konversi\Reamur;

$reamur = new Reamur;

//echo $reamur->Reamur();
echo "Hasil konversi reamur ke celcius adalah " . $reamur->setDerajat(10)->getCelcius() . "\n";
echo "Hasil konversi reamur ke fahrenheit adalah " . $reamur->setDerajat(10)->getFahrenheit() . "\n";

