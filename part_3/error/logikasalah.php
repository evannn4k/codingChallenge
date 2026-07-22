<?php

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

function konvert($romawi, $angkaRomawi)
{
    // ubah jadi array
    $letter = str_split($romawi);

    // menentukan angka pertama
    $result = $angkaRomawi[$letter[0]];

    // loop semua array (kecuali array pertama)
    for ($i = 1; $i < count($letter); $i++) {

        // jika result kurang dari angka setelahnya maka dibuat menjadi negative 
        if ($result < $angkaRomawi[$letter[$i]]) {
            $result = -$result;
        }

        // tambah result dengan angka baru
        $result += $angkaRomawi[$letter[$i]];
    }

    // kembalikan result
    return $result;
}

echo "<pre>";
print_r(konvert("VII", $angkaRomawi));
echo "</pre>";

echo "<pre>";
print_r(konvert("XIX", $angkaRomawi));
echo "</pre>";

echo "<pre>";
print_r(konvert("XLIV", $angkaRomawi));
echo "</pre>";

echo "<pre>";
print_r(konvert("LXXXIX", $angkaRomawi));
echo "</pre>";

echo "<pre>";
print_r(konvert("CXXIII", $angkaRomawi));
echo "</pre>";

echo "<pre>";
print_r(konvert("CLXVI", $angkaRomawi));
echo "</pre>";

echo "<pre>";
print_r(konvert("CCXCIV", $angkaRomawi));
echo "</pre>";

echo "<pre>";
print_r(konvert("CDXLIX", $angkaRomawi));
echo "</pre>";

echo "<pre>";
print_r(konvert("DCCLXXXVIII", $angkaRomawi));
echo "</pre>";

echo "<pre>";
print_r(konvert("CMXCIX", $angkaRomawi));
echo "</pre>";
