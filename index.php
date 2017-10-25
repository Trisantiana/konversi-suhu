<?php

require __DIR__ . '/vendor/autoload.php';

use Konversi\Celcius;

do {
    $suhu = [
        1 => "1. Celcius",
        2 => "2. Farenheit",
        3 => "3. Reamur"
    ];

    foreach ($suhu as $key => $value) {
        echo $value . "\n";
    }

    echo "Pilih suhu yang akan dikonversi(tulis kode) : ";
    $pilihan = trim(fgets(STDIN));

    switch ($pilihan) {
        case 1:
            $celcius = new Celcius;
            echo "Masukkan derajat Celcius : ";
            $celcius->setCelcius(trim(fgets(STDIN)));

            echo "\nSetelah dikonversi...";
            echo "\n1. Farenheit : " . $celcius->getFarenheit() . " F";
            echo "\n2. Reamur : " . $celcius->getReamur() . " R";
            break;
        default:
            echo "\nKode tidak ditemukan";
            break;
    }

    echo "\nIngin mengonversi lagi?(y/n) : ";
    $pernyataan = trim(fgets(STDIN));
} while ($pernyataan == 'y');
