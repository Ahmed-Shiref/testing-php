<?php
echo "<h1 style='text-align: center;'>problem solving</h1>";
//factoral================================================
/*
function recursion($num)
{
    if ($num == 0) {
        return 1;
    } else
        return $num * recursion($num - 1);
}

echo recursion(7) . "<br>";
echo recursion(8) . "<br>";
// yesssssssssssssssssssssssssssssssssss
*/
//if prime number================================================
/*
function if_prime($num)
{
    $count = 0;
    if ($num == 1) {
        return "number $num is not prime";
    } else {
        
        for ($i = $num; $i >= 1; $i--) {
            
            if ($num % $i == 0) {
                $count += 1;
            }
        }
        if ($count <= 2) {
            return "$num is prime number";
        } elseif ($count > 2) {
            return "$num is not prime number";
        }
    }
}
echo "<br>";
echo if_prime(5431);
*/

//is_exsist function================================================
/*
function is_exsist($str)
{
    if ($str === null) {
        return false;
    } elseif ($str === "") {
        return false;
    } elseif ($str === 0) {
        return false;
    } else return true;
}
*/

/*
function strlength($str)
{
    for ($i = 1; $str[$i] == !""; $i++) {
        $i += 1;
    }
    return $i;
} 
*/




// length of string================================================
/*
function lent($str)
{
    $length = 0;

    while ($str[$length] !== "") {
        $length++;
    }
    return $length;
}

echo strlen("123456789") . "<br>";
*/


//reverse string================================================
/*function rev($str)
{
    $strrev = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $strrev = $strrev . $str[$i];
    }
    return $strrev;
}
echo rev("12345");
*/





//website way to reverse function================================================
// Function to reverse a string recursively
/*
function reverse_string($str1)
{
    // Get the length of the string
    $n = strlen($str1);

    // Base case: if the string has only one character, return the string itself
    if ($n == 1) {
        return $str1;
    } else {
        // Decrement the length of the string
        $n--;

        // Recursively reverse the substring starting from the second character
        // and concatenate the first character to it
        return reverse_string(substr($str1, 1, $n)) . substr($str1, 0, 1);
    }
}

// Call the reverse_string function with the argument '1234' and print the result
print_r(reverse_string('1234') . "\n");
*/





//TESTING substr() FUNC================================================
//substr function
/*$str1 = "ils";
echo substr($str1, 1, 2);//ls
*/


echo "<br>";

//spread syntax =================================================
/*
function ar($rr) 
// if{(...$rr)}and{ar($rr)}  ---- type($rr)is array  
// if{($rr)}and{ar($rr)}  ---- type($rr)is array 
// if{($rr)}and{ar(...$rr)} ---- type($rr)is string   
// if{($rr)}and{ar(...$rr)} ---- type($...rr)is array   

{
    echo "<pre>";
    print_r($rr);
    echo "<br>";
    echo "type of \$arr is  " . gettype($rr);
    echo "</pre>";
}
//$rr = ["pw", 2, "uu", 7];
//ar(...$rr);
 */




//reverse array=================================================
/*
    function rev_arr(array $as)
    {
    for ($i = count($as) - 1; $i >= 0; $i--) {
        $revarr[] = $as[$i];
    }
    return $revarr;
    }
$as = array(51, 14, 1, 21, 'hj');
echo "<pre>";
print_r(rev_arr($as));
print_r($as);
echo "</pre>";
*/

//sort array=================================================
/*
function sort_array_descending(array $arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Swap $arr[$j] and $arr[$j+1]
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// Example usage
$arr = [54, 78, 2, 65, 7, 1];
$sortedArray = sort_array_descending($arr);
print_r($sortedArray);
*/





/*
include("functions.php");
function myaarray_pop(array &$array)
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



$array = ["ra" => "A", "B", "C", "D"];

// $array = [];
echo "<pre>";
print_r(array_pop($array));
print_r(myaarray_pop($array));
print_r($array);
echo "</pre>";

$chars = ["A", "B", "C", "D"];
function myaarray_unshift(array &$array, ...$elements) //elements type is array
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

// echo "<pre>";
// print_r(myarray_unshift($chars));
// echo "<pre>";
*/
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div {
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        height: 50%;
        background-color: yellow;
    }

    table {
        background-color: aquamarine;
        width: 100%;
        height: 100%;
    }

    tr,
    td {
        width: 10%;
        height: 20%;
        background-color: antiquewhite;
    }
</style>

<body>
    <div style=' width:50%;height:50%; background-color:yellow;'>

        <form action="" method="get">
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
            </table>
        </form>

    </div>

</body>

</html>

<?php





?>
<!-- 

    -->