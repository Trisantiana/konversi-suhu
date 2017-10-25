<?php

require __DIR__ . '/vendor/autoload.php';

use Suhu\Farenheit;

$farenheit = new Farenheit;

echo "Koversi suhu dari Farenheit ke Celcius : " . $farenheit->setFarenheit(50)->getCelcius() . "\n";
echo "Koversi suhu dari Farenheit ke Reamur : " . $farenheit->setFarenheit(50)->getReamur() . "\n";