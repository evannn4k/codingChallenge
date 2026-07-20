<a href="/part_2/palindrome">Palindrome</a>
<div style="margin: 2rem;"></div>


<?php

function twoSum(array $numbers, int $target)
{
    foreach ($numbers as $indexPertama => $number) {
        foreach ($numbers as $indexKedua => $num) {
            // biar ga bisa hitung satu elemen array yang sama
            if ($indexPertama != $indexKedua) {
                // jika nilai benar maka return index
                if ($number + $num === $target) {
                    return [$indexPertama, $indexKedua];
                }
            }
        }

        echo "<br>";
    }

    return "Tidak ada angka yang dapat dijumlahkan";
}

// var_dump(twoSum([2, 7, 11, 15], 9));
echo "<pre>";
print_r(twoSum([2, 7, 11, 15], 9));
echo "</pre>";

echo "<pre>";
print_r(twoSum([2, 2, 2, 2, 2, 4, 4, 4, 4], 8));
echo "</pre>";

echo "<pre>";
print_r(twoSum([0, 2], 2));
echo "</pre>";

echo "<pre>";
print_r(twoSum([-4, 6], 2));
echo "</pre>";

echo "<pre>";
print_r(twoSum([3, 2, 4], 6));
echo "</pre>";

echo "<pre>";
print_r(twoSum([3, 3], 6));
echo "</pre>";

echo "<pre>";
print_r(twoSum([-3, 4, 3, 90], 0));
echo "</pre>";

// contoh tidak angka yang dapat dijumlahkan
echo "<pre>";
print_r(twoSum([-3, 4, 3, 90], 90));
echo "</pre>";

echo "<pre>";
print_r(twoSum([82, 23, 38, 17, 36, 71, 18, 28, 23], 56));
echo "</pre>";

echo "<pre>";
print_r(twoSum([82, 23, 724, 24, 562, 45726, 742, 582, 83573, 234,  23, 2435, 2345,  38, 17, 36, 71, 18, 28, 23], 579));
echo "</pre>";
