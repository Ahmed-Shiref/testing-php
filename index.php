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
echo "command line";
for ($i = 0; $i = 0; $i++) {
    echo "$i command line <br>";
}
for ($i = 0; $i == 0; $i++) {
    echo "$i command line <br>";
}
for ($i = 0; $i == 1; $i++) {
    echo "$i command line <br>";
}