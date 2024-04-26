<?php

//=========--------------------------------------------------------------------------
function myarray_keys($input, $search_value = null, $strict = false)
{
    $keys = [];

    // Iterate over each element of the input array
    foreach ($input as $key => $value) {
        // If a search value is provided, check for strict or non-strict equality
        if ($search_value !== null) {
            if ($strict && $value === $search_value) {
                $keys[] = $key;
            } elseif (!$strict && $value == $search_value) {
                $keys[] = $key;
            }
        } else {
            // If no search value is provided, simply add the key to the result
            $keys[] = $key;
        }
    }

    return $keys;
}

//===========================================================================================

//=========--------------------------------------------------------------------------
//function transform unindex array to an index array
function unindex_to_index_array(array $array)
{
    $n = count($array);
    $arrkeys = array_keys($array);
    $revarrkeys = [];

    // Reversing the array of keys
    for ($i = 0; $i < $n; $i++) {
        $revarrkeys[] = $arrkeys[$i];
    }
    // Creating the reversed array with reversed keys
    for ($i = 0; $i < $n; $i++) {
        $revarr[] = $array[$revarrkeys[$i]];
    }
    return $revarr;
}
//===========================================================================================

//=========------------------------------------------------

function is_indexed_keys(array $array)
// if array is indexed or not 
{
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        if (array_keys($array)[$i] == $i) {
            return true;
        } else {
            return false;
        }
    }
}

//===========================================================================================


//=========--------------------------------------------------------------------------
//my reverse indexed array function implementation
function rev_indexed_array(array $array)
{
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $revarr[] = $array[$i];
    }
    return $revarr;
}

//===========================================================================================

//------------------------------------------------------------------------------------
//reverse unindexed array without preserve the key
function rev_unindex_not_preservekey(array $array)
{
    $n = count($array);
    $arrkeys = array_keys($array);
    $revarrkeys = [];

    // Reversing the array of keys
    for ($i = $n - 1; $i >= 0; $i--) {
        $revarrkeys[] = $arrkeys[$i];
    }
    // Creating the reversed array with reversed keys
    for ($i = 0; $i < $n; $i++) {
        $revarr[] = $array[$revarrkeys[$i]];
    }
    return $revarr;
}
//================================================================================


//--------------------------------------------------------------------------
//reverse unindexed array and preserve the key
function rev_unindexed_array_preservekey(array $array)
{
    $n = count($array);
    $arrkeys = array_keys($array);
    $revarrkeys = [];

    // Reversing the array of keys
    for ($i = $n - 1; $i >= 0; $i--) {
        $revarrkeys[] = $arrkeys[$i];
    }
    // Creating the reversed array with reversed keys
    for ($i = 0; $i < $n; $i++) {
        $revarr[$revarrkeys[$i]] = $array[$revarrkeys[$i]];
    }
    // Returning the reversed array with reversed keys

    //$revarrkeys[$i]: This represents the key you want to associate with the value.
    // $array[$revarrkeys[$i]] : This represents the value you want to store in the array.

    return $revarr;
    // return $revarrkeys;
}
//===========================================================================================


//------------------------------------------
//reverse all arrays
function rev_allarr(array $array, bool $preserved = false)
{
    if (is_indexed_keys($array) == true && $preserved == false) {
        return rev_indexed_array($array);
    } elseif (is_indexed_keys($array) == true && $preserved == true) {
        return rev_unindexed_array_preservekey($array);
    } elseif (is_indexed_keys($array) == false && $preserved == true) {
        return rev_unindexed_array_preservekey($array);
    } elseif (is_indexed_keys($array) == false && $preserved == false) {
        return rev_unindexed_array_preservekey($array);
    }
}
//===========================================================================================

//------------------------------------------
//check if there is lower char in string
function is_str_lower(string $str = "")
{
    // $lower = true;
    if (strlen($str) == 0) {
        echo "there is an empty string";
    } else {
        for ($i = 0; $i < strlen($str); $i++) {
            if (ord($str[$i]) >= 97 && ord($str[$i]) <= 122) {
                return true;
            } else {
                return false;
            }
        }
    }
}
//===========================================================================================


//------------------------------------------

function mystr_pad(string $str, int $width, $fill_with = " ", int $pad_type = STR_PAD_RIGHT): string
{
    $both = $str;
    $added = "";
    if (strlen($str) >= $width) {
        return $str;
    } else {
        for ($i = 1; $i <= $width - strlen($str); $i++) {
            $added .= $fill_with;
        }
    }

    if ($pad_type == STR_PAD_LEFT) {
        return  $added . $str;
    } elseif ($pad_type == STR_PAD_BOTH) {
        for ($i = 1; $i <= $width - strlen($str); $i++) {
            if ($i % 2 <> 0) {
                $both = $both . $added;
            } else {
                $both = $added . $both;
            }
        }
        return $both;
    } else {
        return  $str . $added;
    }
}
//===========================================================================================


//------------------------------------------
function strlength($str)
{
    if (gettype($str) == "integer") {
        $count = 0;
        // Handle negative str$strs
        if ($str < 0) {
            $str *= -1; // Make it positive
        }
        // Increment count until str$str becomes 0
        while ($str > 0) {
            $str = (int)($str / 10); // Remove the last digit
            $count++; // Increment count
        }
        return $count;
    } else {

        for ($i = 0;; $i++) {
            if (isset($str[$i])) {
                $i += 1;
            } else break;
        }
        return $i;
    }
}

//===========================================================================================


//------------------------------------------
function rev($str)
{
    $strrev = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $strrev = $strrev . $str[$i];
    }
    return $strrev;
}
//===========================================================================================

//------------------------------------------

//===========================================================================================

//------------------------------------------
function string_to_array(string $str = ""): array
{
    $arr = [];
    $n = strlength($str);
    for ($i = 0; $i < $n; $i++) {
        $arr[] = $str[$i];
    }
    return $arr;
}
//===========================================================================================
//------------------------------------------
function array_to_string(array $array = []): string
{

    $arraykeys = array_keys($array);
    $str = "";

    $n = count($arraykeys);
    for ($i = 0; $i < $n; $i++) {

        $str .= $array[$arraykeys[$i]];
    }
    return $str;
}

//------------------------------------------
function string_repeat(string $str, int $repeats = 1, bool $space = false): string
{
    $seperator = $space ? " " : "";
    $result = "";
    if (!empty($str)) {

        for ($i = 1; $i <= $repeats; $i++) {
            if ($space == false) {
                $result .= $str . $seperator;
            } else {
                $result .= $str . $seperator;
            }
        }
        return $result;
    } else return "";
}
//===========================================================================================




//------------------------------------------
function trrim(string $str): string
{
    $result = "";
    $finalresult = "";
    $stopl = true;
    $stopr = true;

    #tirm from left
    for ($i = 0; $i < strlen($str) - 1; $i++) {
        if ($str[$i] == " " && $stopl == true) {
            continue;
        } elseif ($str[$i] <> " ") {
            $stopl = false;
        }
        $result .= $str[$i];
    }
    #tirm from right
    for ($i = strlen($result) - 1; $i >= 0; $i--) {
        if ($result[$i] == " " && $stopr == true) {
            continue;
        }
        $stopr = false;

        $finalresult[$i] = $result[$i];
    }
    return $finalresult;
}
//===========================================================================================



//------------------------------------------
function lefttirm(string $str): string
{
    $result = "";
    $stopl = true;
    #tirm from left
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == " " && $stopl == true) {
            continue;
        }
        $stopl = false;
        $result .= $str[$i];
    }
    return $result;
}
//===========================================================================================



//------------------------------------------
function righttrim(string $str): string
{
    $stop = true;
    $result = '';
    #tirm from right
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        if ($str[$i] == " " && $stop == true) {
            continue;
        }
        $stop = false;
        $result .= $str[$i];
    }
    return $result;
}
//===========================================================================================



//------------------------------------------
function besttrimcode(string $str, string $tirmchar = " "): string
{
    $result = "";
    $stopl = true;
    for ($i = 0; $i < strlen($str); $i++) {

        if (strpos($tirmchar, $str[$i]) !== false   && $stopl) {
            continue;
        }
        $stopl += false;
        $result .= $str[$i];
    }
    return $result;
}
//===========================================================================================



//------------------------------------------
function bestleft_trim_code(string $str, string $tirmchar = " "): string
{
    $result = "";
    $stopl = true;
    for ($i = 0; $i < strlen($str); $i++) {

        if (strpos($tirmchar, $str[$i]) !== false   && $stopl) {
            continue;
        }
        $stopl = false;
        $result .= $str[$i];
    }
    return $result;
}
//===========================================================================================

//------------------------------------------
function bestright_trim_code(string $str, string $tirmchar = " "): string
{
    $result = "";
    $stopl = true;
    for ($i = 0; $i < strlen($str); $i++) {

        if (strpos($tirmchar, $str[$i]) !== false   && $stopl) {
            continue;
        }
        $stopl = false;
        $result[$i] = $str[$i];
    }
    return $result;
}
//===========================================================================================


//------------------------------------------
function custom_empty($var)
{
    // Check if the variable is set and not NULL
    if (!isset($var)) {
        return true;
    }

    // Check if the variable is an empty string, empty array, empty object, or evaluates to false
    if (is_string($var) && trim($var) === '') {
        return true;
    }

    if (is_array($var) && count($var) === 0) { // Check if the array is empty
        return true;
    }

    if (is_object($var) && empty((array)$var)) {
        return true;
    }

    // Check if the variable evaluates to false
    if (!$var) {
        return true;
    }

    // If none of the conditions are met, return false
    return false;
}
//===========================================================================================


//------------------------------------------
function myin_array(array $elements, $splice)
{
    $differ = false;
    for ($s = count($elements) - 1; $s >= 0; $s--) {
        if ($elements[$s] === $splice) {
            $differ = true;
        }
    }
    return $differ;
}
//===========================================================================================

//------------------------------------------
function myin_string(string $str, $splice)
{
    $differ = false;
    for ($s = strlen($str) - 1; $s >= 0; $s--) {
        if ($str[$s] === $splice) {
            $differ = true;
        }
    }
    return $differ;
}
//===========================================================================================

//------------------------------------------
function myin_array_by_foreach(array $elements, $splice)
{
    foreach ($elements as $element) {
        if ($element === $splice) {
            return true;
        }
    }
    return false;
}
//===========================================================================================

//------------------------------------------
function shuffle_array_with_repeated_elements($element) //return an array with the same count but elements shuffled and repeted
{

    if (gettype($element) === "array") {
        $array = [];
        while (count($array) < count($element)) {
            $splice = array_rand($element); //it return random key of array
            if (!in_array($splice, $array)) {
                $array[] = $element[$splice];
            }
        }
        return $array;
    }
}
//===========================================================================================



//------------------------------------------
function myshuffle($element) //one of the best functions ever i do 
{

    if (gettype($element) === "array") {
        $array = [];
        $arrayindexed = [];
        $elementkeys = array_keys($element);
        while (count($array) < count($element)) {
            $splice = array_rand(array_keys($element));
            if (!in_array($splice, array_keys($array))) {
                $array[$elementkeys[$splice]] = $element[$elementkeys[$splice]]; //done one of the 
                // $array[$splice] = $element[$elementkeys[$splice]]; //if you want to shuffle array with its key 

            }
        }
        return $array;
        // return unindex_to_index_array($array);
    } elseif (gettype($element) == "string") {
        $element = string_to_array($element);
        $array = [];
        $elementkeys = array_keys($element);
        while (count($array) < count($element)) {
            $splice = array_rand(($element));
            if (!in_array($splice, array_keys($array))) {
                $array[$splice] = $element[$elementkeys[$splice]]; //done one of the 
            }
        }
        return array_to_string(unindex_to_index_array($array));
    }
}
//===========================================================================================


//------------------------------------------
function array_shuffle(array $arr)
{

    $items = [];
    foreach ($arr as $item) {
        array_splice($items, rand(0, 5), 0, $item);
    }
    return $items;
}
//===========================================================================================



//---------------------------------------------------------
function myarray_pop(array &$array)
{
    $indexed_array = unindex_to_index_array($array);
    $new_array = [];
    $array_keys = array_keys($array);
    if (empty($array)) {
        $array = [];
    } else {
        $pop_element = $array[end($array_keys)];

        for ($i = 0; $i < count($array) - 1; $i++) {
            $new_array[$array_keys[$i]] = $indexed_array[$i];
        }
        $array = $new_array;
        return $pop_element;
    }
}

//===========================================================================================



//---------------------------------------------------------
function myarray_unshift(array &$array, ...$elements) //elements type is array
{
    $new_array = [];
    $x = count($elements);
    $n = count($array);
    $new_arr_count = $x + $n;
    for ($i = 0; $i < $x; $i++) {
        $new_array[$i] = $elements[$i];
    }
    for ($i = $x, $s = 0; $i < $new_arr_count, $s < $n; $i++, $s++) {
        $new_array[$i] = $array[$s];
    }
    $array = $new_array;
    return $new_array;
}
//===========================================================================================