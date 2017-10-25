<?php

require __DIR__ . '/vendor/autoload.php';

use Konversi\Suhu;

do {
    $suhu = [
        1 => "1. Celcius",
        2 => "2. Farenheit",
        3 => "3. Reamur"
    ];

    foreach ($suhu as $key => $value) {
        echo $value . "\n";
    }

    $konversi = new suhu;

    echo "Pilih suhu yang akan dikonversi(tulis kode) : ";
    $pilihan = trim(fgets(STDIN));

    switch ($pilihan) {
        case 1:
            echo "Masukkan derajat Celcius : ";
            $suhu = trim(fgets(STDIN));

            echo "\nSetelah dikonversi...";
            echo "\n1. Farenheit : " . $konversi->setCelcius($suhu)->getFarenheit() . " F";
            echo "\n2. Reamur : " . $konversi->setCelcius($suhu)->getReamur() . " R";
            break;
        case 2:
            echo "Masukkan derajat Farenheit : ";
            $suhu = trim(fgets(STDIN));

            echo "\nSetelah dikonversi...";
            echo "\n1. Celcius : " . $konversi->setFarenheit($suhu)->getCelcius() . " C";
            echo "\n2. Reamur : " . $konversi->setFarenheit($suhu)->getReamur() . " R";
            break;
        case 3:
            echo "Masukkan derajat Reamur : ";
            $suhu = trim(fgets(STDIN));

            echo "\nSetelah dikonversi...";
            echo "\n1. Farenheit : " . $konversi->setReamur($suhu)->getFarenheit() . " F";
            echo "\n2. Celcius : " . $konversi->setReamur($suhu)->getCelcius() . " R";
            break;
        default:
            echo "\nKode tidak ditemukan";
            break;
    }

    echo "\nIngin mengonversi lagi?(y/n) : ";
    $pernyataan = trim(fgets(STDIN));
} while ($pernyataan == 'y');
