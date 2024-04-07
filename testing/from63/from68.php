<?php
////////////////////video 68 ///////////
/*
// array function  //

//  array_shift(Array[Required])
//      shift an element off the beginning of array
//      this function will reset => "reset()" The Input Array Pointer

//  array_pop(Array[Required])
//      pop the element off the end of array
//      this function will reset => "reset()" The Input Array Pointer

//  array_push(Array[Required],Values[Optional])
//      push one or more elements onto the end of array
//      you can use $arr[]

//  array_unshift(Array[Required],Values[optional])
//      add one element in the beginning of an array
//      this function will reset => "reset()" The Input Array Pointer
*/

echo "<br>";
echo "video (68)";
echo "<br>";
/*
$chars = ["A", "B", "C", "D"];

$frist = array_shift($chars);
echo "$frist  <br>";
echo "<pre>";
print_r($chars);
echo "</pre>";

$last = array_pop($chars);
echo "$last   <br>";
echo "<pre>";
print_r($chars);
echo "</pre>";


array_push($chars, "x", "y", "z");
echo "<pre>";
print_r($chars);
echo "</pre>";

$chars[] = 1;

echo "<pre>";
print_r($chars); //much easyier for adding on element
echo "</pre>";

array_unshift($chars, "one", "two", "three"); //add elements in the first of array
echo "<pre>";
print_r($chars);
echo "</pre>";


*/


?>

<?php
////////////////////video 69 ///////////
/*
//  array function //

// array_slice(Array[Required],start[Required],length[optional],preserve_keys[Opional])
//    Extract A slice of the array
//    start
//      0 from start
//      -1 from last element
//    length
//      negative => stop slicing until this index
//      not set => all elements from start position
//    preserve keys
//      false => default => reset keys
//      true => preserve keys
//    if array have string keys , it will always preserve the keys


// array_splice(Array[Required],start[Required],length[optional],Array[optional])
//  Remove a porion of the array and replace it with something else
//  start
//    0 from start
//    -1 from last element
//  length
//      negative => sto removing until this index
//      not set => remove all elements from start position
*/
echo "<br>";
echo "video (69)";
echo "<br>";
include("d:/dis elasony/implement builtin/implement/functions.php");
$chars = ["A", "B", "C", "D", "E", "F", "G"];
$chars_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
$chars_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];

// print_r(array_to_string($chars_with_numeric_keys));
echo '<pre>';
// print_r(array_slice($chars, 4)); //[E,F,G]
// print_r($chars);
// print_r(array_slice($chars, -4)); //[D,E,F,G]
// print_r(array_slice($chars, 1, 5)); //[B,C,D,E,F]
// print_r(array_slice($chars, 1, -4)); //[B,C] last 4 elments  Forbidden to sliced 
echo '</pre>';


echo '<pre>';
// print_r(array_slice($chars_with_string_keys, 0, 2)); //if array have string keys , it will always preserve the keys
// print_r(array_slice($chars_with_numeric_keys, 0, 2,));
// print_r(array_slice($chars_with_numeric_keys, 0, 2, true)); //if array have string keys , it won't preserve the keys
echo '</pre>';

echo '<pre>';
// print_r($chars);
echo '</pre>';

$nums = [10, 20, 30, 40, 50, 60, 70];

// function array_shuffle(array $arr)
// {
//     $items = [];
//     foreach ($arr as $item) {
//         array_splice($items, rand(0, 5), 0, $item);
//     }
//     return $items;
// }



// $num = [10, 20];
echo '<pre>';
//Remove a porion of the array and replace it with something else

// print_r($nums);
// print_r(array_splice($nums, 1, -2)); //last 2 elments  Forbidden to spliced 
// print_r(array_splice($nums, 1, 2, ["one", "two", "three"]));
// print_r($nums);
echo '</pre>';


?>


<?php
////////////////////video 70 ///////////
/*
// array functions // 

// sort(Array[Required],Flag[Optional])
//  sort an indexed array in ascending order

// rsort(Array[Required],Flag[Optional]) 
// sort an indecing array descending order

// asort(Array[Required],Flag[Optional])
//  sort an associative array in ascending order according to the value

// arsort(Array[Required],Flag[Optional])
//  sort an associative array in descending order according to the value

// ksort(Array[Required],Flag[Optional])
//  sort an associative array in ascending order according to the key

// krsort(Array[Required],Flag[Optional])
//  sort an associative array in descending order according to the key

// natsort(Array[Required],Flag[Optional])
//  sorts an array by using a "natural order" algorothm
*/
echo "<br>";
echo "video (70)";
echo "<br>";

/*
$nums = [4 => 2, 5 => 7, 1 => 0, 8 => 9, 6 => 8];

echo "<pre>";
// echo 'main';
// print_r($nums);

// sort($nums);
// echo 'sort';
// print_r($nums);

// rsort($nums);
// echo 'rsort';
// print_r($nums);

// asort($nums);
// echo 'asort';
// print_r($nums);

// arsort($nums);
// echo 'arsort';
// print_r($nums);

// ksort($nums);
// echo 'ksort';
// print_r($nums);

// krsort($nums);
// echo 'ksort';
// pr int_r($nums);

echo "</pre>";

$names = ["osama", "ahmed", "samah", "mahmoud", "gamal"];

// sort($names); //sort an indexed array in ascending order
// echo '<pre>';
// print_r($names); //arranged from a to z
// rsort($names); // sort an indecing array descending order
// print_r($names); //arranged from z to a
// echo '</pre>';

$countries = ["S" => "Syria", "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];

// asort($countries);
// echo '<pre>';
// print_r($countries);
// arsort($countries);
// print_r($countries);
// echo '</pre>';



$codes = ["1" => "Syria", "3" => "Egypt", "2" => "Iraq", "5" => "Qatar"];

ksort($codes); //arranged by key
echo '<pre>';
print_r($codes);
krsort($codes);
print_r($codes);
echo '</pre>';


$files = ["Photo1.png", "Photo20.png", "Photo3.png"];
sort($files);
echo '<pre>';
print_r($files);
natsort($files);
print_r($files);
echo '</pre>';
*/

?>

<?php
////////////////////video 71 ///////////
/*
//  array function //

// array_map(Callback Function[Required], Array[Required],other Arrays[Optional])
//  Applies the callback to the Elements of the given arrays

// array_filter(Array[Required], Callback function[Required],flag[optional])
//  filter values of an array using a callback function
//  flag
//     ARRAY_FILTER_USE_KEY
//     ARRAY_FILTER_USE_BOTH
//     0 Default => send Value As Arguments
*/

echo "<br>";
echo "video (71)";
echo "<br>";

/*
function add_title($fname, $lname)
{
    return "hello Mr $fname $lname";
}
// echo add_title("osama");

$first_names = ["osama", "ahmed", "sayed", "mahmoud", "samah", "gamal"];
$last_names = ["ameer", "samy", "shady", "amr", "mohamed", "ibrahim"];

echo "<pre>";
// print_r(array_map("add_title", $first_names, $last_names));
print_r(array_map(fn ($f, $l) => "hello mr $f $l", $first_names, $last_names));
echo "</pre>";

$nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
];

function check_nums($n, $n2)
{
    return $n > 4 || $n2 > 4;
}

echo "<pre>";
// print_r(array_filter($nums, "check_nums")); //check on values 
// print_r(array_filter($nums, "check_nums", ARRAY_FILTER_USE_KEY)); //check on keys
print_r(array_filter($nums, "check_nums", ARRAY_FILTER_USE_BOTH)); //check on keys and values
echo "</pre>";

*/
?>

<?php
////////////////////video 72 ///////////
/*
// array function //
// array_reduce(Array[Required],Callback function[Required],Initial_Value[Optional])
//  Reduce the array to a single value
//  carry => the value of the previous iteration || Initial value
*/

echo "<br>";
echo "video (72)";
echo "<br>";
/*
function add($carry, $item)
{
    echo "$carry <br>";
    echo "$item <br>";
    echo  $carry + $item  . "<br>";
    echo "#####################<br>";
    return $item + $carry;
}
$nums = [10, 20, 50, 100, 10];

echo  array_reduce($nums, "add");

*/


?>