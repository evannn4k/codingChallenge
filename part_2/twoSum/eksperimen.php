<?php

function twoSum(array $numbers, int $target)
{

    echo "numbers";
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
    echo "nomor lain";

    foreach ($numbers as $indexPertama => $number) {
        // echo $indexPertama;
        // echo " cocokan angka : ";

        // mencari nomor yang diatas nomor asli
        // biar engga keluar nomor yang sama
        $nomorLain = array_filter($numbers, function ($num) use ($number) {
            return $num > $number;
        });

        echo "<pre>";
        print_r($nomorLain);
        echo "</pre>";

        foreach ($nomorLain as $indexKedua => $num) {
            // echo $num;
            // echo ", ";
            if ($number + $num === $target) {
                // echo "<pre>";
                // print_r([array_search($number, $numbers), array_search($num, $numbers)]);
                // echo "</pre>";


                return [$indexPertama, $indexKedua];
            }
            // echo ", ";
        }
    }

    return "Tidak ada angka yang dapat dijumlahkan";
}

// twoSum([1, 2, 3, 4, 5], 4);

// var_dump(twoSum([1, 2, 3, 4, 5], 4));

echo "<pre>";
print_r(twoSum([2, 2, 3, 4, 5], 4));
echo "</pre>";
