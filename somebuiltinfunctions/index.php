<?php echo "<h1 style='text-align: center;'>built in functions</h1>";


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
//===========================================================

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

//===========================================================


//=========--------------------------------------------------------------------------
//my reverse indexed array function implementation
function rev_indexed_array(array $array)
{
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $revarr[] = $array[$i];
    }
    return $revarr;
}

//===========================================================

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
//===========================================================




//=========--------------------------------------------------------------------------
// a complete reversed array 
/*
function rev_all_arr(array $array)
{

    $is_indexed_keys = function (array $array)
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
    };
    //if (is_indexed_keys($array)) {
    if ($is_indexed_keys($array)) {

        for ($i = count($array) - 1; $i >= 0; $i--) {
            $revarr[] = $array[$i];
        }
        return $revarr;

        // return rev_indexed_array($array);
    } else {
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

        // return rev_unindexed_array($array);
    }
}*/
//===========================================================

// $colordx = array('white', 'green', 'red', 'blue', 'black');
// $colorundx = array(56 => 'white', 'green', 'red', 'blue', 'black');

// print_r(rev_all_arr($colordx));
// echo "indexed array<br>";
// print_r(rev_all_arr($colorundx));
// echo "uhindexed array<br>";







// function rev_allarr(array $array, bool $preserved = false)
// {
//     if ($preserved == false) {}
//     if (is_indexed_keys($array)) {
//         return rev_indexed_array($array);
//     } else {
//         return rev_unindexed_array($array);
//     }
// }
//===========================================================


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