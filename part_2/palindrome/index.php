<a href="/part_2/twoSum">Two Sum</a>
<div style="margin: 2rem;"></div>

<?php

// function isPalindrome($x)
// {
//     // return str_split($x);

//     // ubah jadi array
//     $numbers = str_split($x);

//     // balik array nya
//     $reverse = array_reverse($numbers);

//     // echo "<pre>";
//     // print_r($numbers);
//     // echo "</pre>";
//     // echo "<pre>";
//     // var_dump($reverse);
//     // echo "</pre>";

//     // cek sama apa engga 
//     if ($reverse !=  $numbers) {
//         return false;
//     }

//     return true;
// }

// function isPalindrome($x)
// {
//     return strrev($x) == $x;
// }


$isPalindrome = fn($x) => strrev($x) == $x;

var_dump($isPalindrome(121));
echo "<br>";

// var_dump(isPalindrome(121));
// echo "<br>";

// var_dump(isPalindrome(-121));
// echo "<br>";

// var_dump(isPalindrome(10));
// echo "<br>";

// var_dump(isPalindrome(22));
// echo "<br>";

// var_dump(isPalindrome(987656789));
// echo "<br>";

// var_dump(isPalindrome(505));
// echo "<br>";

// var_dump(isPalindrome(911));
// echo "<br>";

// var_dump(isPalindrome(1));
// echo "<br>";
