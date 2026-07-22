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
    // $result = $angkaRomawi[$letter];
    // return $result;

    $letter = str_split($romawi);
    $result = $angkaRomawi[$letter[0]];

    // loop semua letter
    for ($i = 1; $i <= count($letter); $i++) {
        
        // agar stop di letter terkhir
        if ($i < count($letter)) {
            $angka = $letter[$i - 1];
            if ($angka < $letter[$i]) {
                echo "kurang";
                $angka;
            } else {
                echo "tambah";                
            }
            $result = $angka;
            // $result += $angkaRomawi[$letter[$i]];
        }
    }

    echo "<br>";
    return $result;
}

// echo konvert("D", $angkaRomawi);

echo "<pre>";
print_r(konvert("IV", $angkaRomawi));
echo "</pre>";
