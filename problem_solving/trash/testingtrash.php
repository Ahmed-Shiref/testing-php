<?php
function _array(...$arr)
{
    // echo $arr;
    // echo "<br>";

    // echo gettype($arr);
    // echo "<br>";

    // echo gettype(func_num_args());
    // echo "<br>";

    // echo func_get_arg(1) . " is " . gettype(func_get_arg(1));
    // echo "<br>";

    // echo gettype(func_get_args());
    // echo "<br>";

    echo "<pre>";
    print_r(func_get_args());
    echo "</pre>";

    echo "<br>";
    echo "the type of func_get_args() is " . gettype(func_get_args());
    echo "<br>";
    echo "<br>";


    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    echo "<br>";
    echo "type of \$arr is  " . gettype($arr);

    echo "<br>";
    echo func_get_arg(2) . " is " . gettype(func_get_arg(2));

    echo "<br>";
    // echo $arr;
}
// $arr = array("ee", 3, "fo", 0);
// _array(...$arr);
echo "<br>";

//======================------custom function to reverse the arrays that have string keys--------======================

function custom_array_reverse_assoc($array)
{
    $reversedArray = array();

    // Get the keys in reverse order
    $keys = array_keys($array);
    $keys = array_reverse($keys);

    // Iterate through keys and build reversed array
    foreach ($keys as $key) {
        $reversedArray[$key] = $array[$key];
    }

    return $reversedArray;
}

// Original array
$originalArray = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris"
);

// Reversed array using custom implementation
$reversedArray = custom_array_reverse_assoc($originalArray);

// Output reversed array
print_r($reversedArray);









function rev_unindexed_array(array $array)
{
    $n = count($array);
    $arrkeys = array_keys($array);

    // Reversing the array of keys
    $revarrkeys = [];
    for ($i = $n - 1; $i >= 0; $i--) {
        $revarrkeys[] = $arrkeys[$i];
    }

    // Creating the reversed array with reversed keys
    $revarr = [];
    for ($i = 0; $i < $n; $i++) {
        $revarr[$revarrkeys[$i]] = $array[$revarrkeys[$i]];
    }
    //$revarrkeys[$i]: This represents the key you want to associate with the value.
    // $array[$revarrkeys[$i]] : This represents the value you want to store in the array.


    // Returning the reversed array with reversed keys
    return $revarr;
}



function rev_unindexed_array1(array $array)
{
    $n = count($array);
    $arrkeys = array_keys($array);


    for ($i = $n - 1; $i >= 0; $i--) {
        $revarrkeys[] = $arrkeys[$i];
    }

    for ($i = 0; $i < $n; $i++) {
        $revarr[] = $array[$revarrkeys[$i]];
    }
    return $revarr;
    // return $revarrkeys;
}
