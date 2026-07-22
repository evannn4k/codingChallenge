<?php

// cara kerja
// 1. konfersi angka romawi menjadi angka biasa
// 2. konversi hasil angka biasa menjadi angka romawi
// 3. cek apakah sama atau tidak

// saya berikan pengecekan biar angka romawi yang tidak valid engga bisa di konversi
// misal LL atau IIII kan gabisa maka dia akan return error


// saya sampai M saja mas biar engga terlalu banyak hehe
$angkaRomawi = [
    "I" => 1,
    "V" => 5,
    "X" => 10,
    "L" => 50,
    "C" => 100,
    "D" => 500,
    "M" => 1000,
];

// ada tambahan beberapa simbol khusus
$angkaBiasa = [
    1 => "I",
    4 => "IV",
    5 => "V",
    9 => "IX",
    10 => "X",
    40 => "XL",
    50 => "L",
    90 => "XC",
    100 => "C",
    400 => "CD",
    500 => "D",
    900 => "CM",
    1000 => "M",
];

function numberToRomawi($angka, $angkaBiasa)
{
    $angkaSaatIni = $angka;
    $result =  "";

    // loop semua angka biasa
    foreach (array_reverse($angkaBiasa, true) as $key => $simbol) {
        // kurangi angka saat ini jika angka saat ini dapat dikurangi dengan key atau tidak negatif
        while ($angkaSaatIni >= $key) {
            // memasukan angka romawo
            $result = $result . $simbol;
            // mengurangi angka saat ini
            $angkaSaatIni -= $key;
        }
    }

    return $result;
}

// echo "<pre>";
// print_r(numberToRomawi(999, $angkaBiasa));
// echo "</pre>";

function romawiToNumber($romawi, $angkaRomawi, $angkaBiasa)
{
    // ubah jadi array
    $letter = str_split($romawi);

    $angka = 0;

    // loop semua angka romawi
    for ($i = count($letter) - 1; $i >= 0; $i--) {
        $angkaSaatIni =  $angkaRomawi[$letter[$i]];
        
        // agar tidak mengecek angka terakhir
        if ($i >= 0) {
            // null biar angka pertama engga error
            $angkaSebelumIni = $angkaRomawi[$letter[$i + 1] ?? null] ?? null;
            // jika angka sebelum ini lebih besar maka angka saat ini menjadi negatif
            if ($angkaSebelumIni && $angkaSaatIni < $angkaSebelumIni) {
                $angkaSaatIni = -$angkaSaatIni;
            }
        }

        $angka += $angkaSaatIni;
    }

    // untuk pengecekan apakah angka yang diinput itu valid atau tidak
    $numberToRomawi = numberToRomawi($angka, $angkaBiasa);
    if($numberToRomawi != $romawi) {
        return "Angka yang dimasukan tidak sesuai";
    }

    return $angka;
}

echo "<pre>";
print_r(romawiToNumber("III", $angkaRomawi, $angkaBiasa));
echo "</pre>";

echo "<pre>";
print_r(romawiToNumber("LL", $angkaRomawi, $angkaBiasa));
echo "</pre>";

echo "<pre>";
print_r(romawiToNumber("VII", $angkaRomawi, $angkaBiasa));
echo "</pre>";

echo "<pre>";
print_r(romawiToNumber("XIX", $angkaRomawi, $angkaBiasa));
echo "</pre>";

echo "<pre>";
print_r(romawiToNumber("XLIV", $angkaRomawi, $angkaBiasa));
echo "</pre>";

echo "<pre>";
print_r(romawiToNumber("LXXXIX", $angkaRomawi, $angkaBiasa));
echo "</pre>";

echo "<pre>";
print_r(romawiToNumber("CXXIII", $angkaRomawi, $angkaBiasa));
echo "</pre>";

echo "<pre>";
print_r(romawiToNumber("CLXVI", $angkaRomawi, $angkaBiasa));
echo "</pre>";

echo "<pre>";
print_r(romawiToNumber("CCXCIV", $angkaRomawi, $angkaBiasa));
echo "</pre>";

echo "<pre>";
print_r(romawiToNumber("CDXLIX", $angkaRomawi, $angkaBiasa));
echo "</pre>";

echo "<pre>";
print_r(romawiToNumber("DCCLXXXVIII", $angkaRomawi, $angkaBiasa));
echo "</pre>";

echo "<pre>";
print_r(romawiToNumber("CMXCIX", $angkaRomawi, $angkaBiasa));
echo "</pre>";
