<?php

// spasi html
// &nbsp;

function factorial($number)
{
    if ($number < 0) {
        echo "angka tidak boleh dibawah 0";
        return;
    }

    $result = 1;
    $realNumber = $number;

    while ($number > 0) {
        $result = $result * $number;
        // echo $number;
        $number--;
    }

    // return $result;

    echo "<br>";
    echo $realNumber . "! adalah " . $result;
    echo "<br>";
}


// function diamond($number)
// {
//     if($number < 0) {
//         echo "angka tidak boleh dibawah 0";
//         return;
//     }

//     // bagian atas
//     for ($i = 0; $i < $number; $i++) {

//         for ($y = $number - 1 ; $y > $i; $y--) {
//             echo "&nbsp;&nbsp;";
//         }

//         for ($x = 0; $x < $i + 1; $x++) {
//             echo "*";
//         }

//         for ($z = 0; $z < $i; $z++) {
//             echo "*";
//         }

//         echo "<br>";
//     }

//     // bagian bawah
//     for ($i = 0; $i < $number; $i++) {

//         for ($y = 0; $y < $i + 1; $y++) {
//             echo "&nbsp;&nbsp;";
//         }

//         for ($x = $number - 1; $x > $i; $x--) {
//             echo "*";
//         }

//         for ($z = $number - 2; $z > $i; $z--) {
//             echo "*";
//         }

//         echo "<br>";
//     }
// }


function diamond($number)
{

    if (!is_int($number)) {
        echo "hanya boleh memasukan bilangan bulat";
        return;
    }

    if ($number < 0) {
        echo "angka tidak boleh dibawah 0";
        return;
    }

    for ($i = 1; $i <= $number; $i++) {
        for ($skip = $number; $skip > $i; $skip--) {
            echo "&nbsp;&nbsp;";
        }
        for ($bintang = 1; $bintang < $i * 2; $bintang++) {
            echo "*";
        }
        echo "<br>";
    }

    for ($i = 1; $i <= $number; $i++) {
        for ($skip = 0; $skip < $i; $skip++) {
            echo "&nbsp;&nbsp;";
        }
        for ($bintang = $number * 2 - 1; $bintang > $i * 2; $bintang--) {
            echo "*";
        }
        echo "<br>";
    }
}


diamond(2);
factorial(5.2);
// echo factorial(5);