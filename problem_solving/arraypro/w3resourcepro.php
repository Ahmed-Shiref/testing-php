<!--https://www.w3resource.com/php-exercises/php-array-exercises.php#google_vignette-->
<?php

///////// ------- == 1 == ------- /////////
/*
$color = array('white', 'green', 'red', 'blue', 'black');

$str = "The memory of that scene for me is like a frame of film forever
frozen at that moment: the $color[2] carpet, the $color[1] lawn, 
the $color[0] house, the leaden sky. The new president and
his first lady. - Richard M. Nixon";
echo $str;
*/

///////// ------- == 2 == ------- /////////
/*
$color = array('white', 'green', 'red');
echo "$color[1] <br>$color[2] <br>$color[0] ";

//another way====================================
$color = array('white', 'green', 'red');
sort($color);
echo "<ul>";
foreach ($color as $y) {
    echo "<li>$y</li>";
}
echo "</ul>";
*/

///////// ------- == 3 == ------- /////////
/*

$ceu = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid",
    "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius", "Czech Republic" => "Prague",
    "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"
);


$keys = array_keys($ceu);
$keys = rev_arr($keys);

foreach ($keys as $key) {
    if ($key == "Germany" || $key == "Greece" || $key == "Netherlands") {
        echo "The capital of $key is $ceu[$key] <br>";
    }
}

$keys = array_keys($ceu);
$keys = rev_arr($keys);
// print_r($keys);
*/

///////// ------- == 4 == ------- /////////
///////// ------- == 5 == ------- /////////
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo $color[array_keys($color)[0]];

echo $revarr[0];


$n = count($color);
$arrkeys = array_keys($color);
$revarrkeys = [];

// Reversing the array of keys
for ($i = 0; $i < $n; $i++) {
    $arrkeys[] = $arrkeys[$i];
}
// Creating the reversed array with reversed keys
for ($i = 0; $i < $n; $i++) {
    $revarr[] = $color[$arrkeys[$i]];
}

  





///////// ------- == 6 == ------- /////////
///////// ------- == 7 == ------- /////////
///////// ------- == 8 == ------- /////////
///////// ------- == 9 == ------- /////////
///////// ------- == 10 == ------- /////////
///////// ------- == 11 == ------- /////////
///////// ------- == 12 == ------- /////////
///////// ------- == 13 == ------- /////////
///////// ------- == 14 == ------- /////////
///////// ------- == 15 == ------- /////////
///////// ------- == 16 == ------- /////////
///////// ------- == 17 == ------- /////////
///////// ------- == 18 == ------- /////////
///////// ------- == 19 == ------- /////////