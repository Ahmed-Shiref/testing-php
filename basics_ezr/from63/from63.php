<?php
////////////////////video 63 ///////////
/*
// array fumctions

//array-chunk(Array[Required], Length[Required],Preserve_key[Optional])
//Split An Array Into Chunks [Return A Multidimensional Indexed Array]
//Preserve_key
//[False => Default] Reindex The Keys
// [True]Preserve The Keys


//array_change_key_case(Array[Required], Case[Optional])
//  Changes The Case Of All Keys In An Array
//  Case
//      [CASE_LOWER => Default] Changes The Keys To Lowercase
//      [CASE_UPPER] Changes The Keys To Uppercase

//array_combine(Array_of_Keys[Required],Array_Of_Values[Required])

//array_count_values(Array[Required])
//  Counts All The Values Of An Array
*/

/*
echo "<br>";
echo "video (63)";
echo "<br>";

$friends = ["osama", "ahmed", "samah", "mahmoud", "gamal"];

echo "<pre>";
print_r(array_chunk($friends, 2, true));
echo "</pre>";

$countries = ["EG" => "egypt", "KSA" => "saudi arabia", "SY" => "syria", "USA" => "united states",];


echo "<pre>";
print_r(array_chunk($countries, 2)); //if make preserve_key = true it will return key value
echo "</pre>";


echo "<pre>";
print_r(array_change_key_case($countries)); //defualt make keys CASE_LOWER  
echo "</pre>";

$keys = ["A", "O", "K"];
$values = ["ahmed", "osama", "kamal"];

echo "<pre>";
print_r(array_combine($keys, $values)); //combine keys and values in one array
echo "</pre>";

$counting = ["A", "A", "B", "B", "B", "C"];

echo "<pre>";
print_r(array_count_values($counting));
echo "</pre>";
*/

?>


<?php
////////////////////video 64 ///////////
/*
//     Array Function     //

//array_reverse(Array[Required],Preserve[Optional])
//  Reverse Array Elements

//array_flip(Array[Required])
//Exchange Keys With Its Values

//count(Array[Required],Mode[Optional])
//Count Array Elements
//  Mode
//      0 => Default => Does Not Count Elements Of Multidimensional Arrays
//      1 => Count Elements Of Multidimensional Arrays

//in_array(Search[Required],Array[Required],Type[Optional])
//Checks If A Value Exists In An Array

//array_key_exists(Key[Required],Array[Required])
//  Check If Key Is Exists

*/
echo "<br>";
echo "video (64)";
echo "<br>";
/*
$family = ["osama", "ahmed", "sameh", "mahmoud", "gamal", ["eman", "noha"]];

echo "<pre>";
print_r($family);
print_r(array_reverse($family, true)); //if i make preserved=true it will reverse keys and values
echo "</pre>";
$countries = ["EG" => "egypt", "KSA" => "saudi arabia", "SY" => "syria", "USA" => "united states"];

echo "<pre>";
print_r(array_flip($countries)); //Replaces keys with values
echo "</pre>";

$counting = [
    "A",
    "B",
    "C",
    [1, 2, 3,]
];
echo count($counting) . "<br>"; //4
echo count($counting, 1) . "<br>"; //7 count the elements in nested array


$search = ["1", 2, 3, 4];

if (in_array(1, $search, true)) { //should be the same type     
    echo "the element is found" . "<br>";
} else echo "the element is not found" . "<br>";

if (in_array(1, $search, false)) { //defualt is flase 
    echo "the element is found" . "<br>";
} else echo "the element is not found" . "<br>";


$courses = [
    "Javascript" => 95,
    "php" => 100,
    "HTML" => 60,
    "CSS" => 65
];


if (array_key_exists("php", $courses)) {
    echo "the course is found and the price is : " . $courses["php"];
}

*/
?>

<?php
//  //////////////////video 65 ///////////
/*
//   Array Functions   //

//array_keys(Array[Required],Value[Optional],Type[Optional])
//  Return The Array keys
//  Type
//      False => Default =>No checking For Type
//      True => Check For Type


//array_Values(Array[Required])
//  Return All The Values Of An Array


//array_pad(Array[Required], Size[Required], Value[Required])
//  Pad Array To The Specified Length With A Value 
//  Negative Value Add Elements Before Original Items
//  If Size < Array Length Nothing Will Be Deleted


//array_product(Array[Required])
//  Calculate The Product Of Values In An Array => Return Int || float
//  In Mathematics, A Product Is The Result Of Multiplication

//array_sum(Array[Required])
//Calculate The Sum Of Values In An Array
*/
echo "<br>";
echo "video (65)";
echo "<br>";

/*
$friends = ["osama", "ahmed", "samah", "mahmoud", "gamal", "osama", "eman", 1, "1"];

echo '<pre>';
// print_r(array_keys($friends));
// print_r(array_keys($friends, "osama"));
// print_r(array_keys($friends, "1",true));//check about type
echo '</pre>';

$countries = ["EG" => "egypt", "KSA" => "saudi arabia", "SY" => "syria", "USA" => "united states"];
echo '<pre>';
print_r(array_values($countries));
echo '</pre>';

$pad = ["A", "B", "C", "D"];
echo '<pre>';
// print_r(array_pad($pad, 10, "@"));
// print_r(array_pad($pad, -10, "@")); //add the @ elements in the begaing of array
// print_r(array_pad($pad, 2, "@")); //it won't remove any elemants of original array
echo '</pre>';


$sum = [10, 5, 2, 10];
$product = [10, 5, 2, 10];
echo '<pre>';
echo array_product($product) . "<br>"; //1000
echo array_sum($product) . "<br>"; //27
echo '</pre>';

*/

?>

<?php
////////////////////video 66 ///////////
/* 
//  Array Functions  //

//    Every Arrey Has An Internal Pointer To Its "Current" Element
//    which is initialized to the first elment.
//    functions returns value of array element that's currently pointed by the internal pointer

//  current(Array[Required]) => Return The Current Element In An Array
//  next(Array[Required]) => advance the internal pointer
//  prev(Array[Required]) => rewind the internal pointer
//  reset(Array[Required]) => put the internal pointer on first element
//  end(Array[Required]) => put the internal pointer on last element
*/

echo "<br>";
echo "video (66)";
echo "<br>";
/*
$friends = ["osama", "ahmed", "samah", "mahmoud", "gamal", "osama", "eman"];

echo current($friends) . "<br>"; //osama
echo next($friends) . "<br>"; //ahmed
echo current($friends) . "<br>"; //ahmed
echo next($friends) . "<br>"; //sameh
echo current($friends) . "<br>"; //sameh
echo prev($friends) . "<br>"; //ahmed
echo reset($friends) . "<br>"; //osama
echo current($friends) . "<br>"; //osama
echo current($friends) . "<br>"; //osama
echo end($friends) . "<br>"; //osama
*/

?>


<?php
////////////////////video 67 ///////////
/*
// array functions //

//  array_merge(Array[Required], Other_Array/s[Optional])
//   merge one or more arrays
//       later Array key with the same name override the value of the previous one
//       numeric key will be renumberd


//  array_replace(Array[Required], replacment/s[Optional])
//      replaces elements from passed arrays into the first array
//          same key => value in second array replace same key => value in first array
//          if key in second array not found in first array it will be created

//  array_rand(Array[Required], Num[optional])
//      pick one or more random keys out of an array

//  shuffle(Array[Required])
//      shuffle an array
*/

echo "<br>";
echo "video (67)";
echo "<br>";
/*
$merge_one = ["one" => "php", "two" => "css", "three" => "javascript"];
$merge_two = ["one" => "html", "four" => "python"];

echo "<pre>";
print_r(array_merge($merge_one, $merge_two));
echo "</pre>";

$merge_three = [10 => "php", 20 => "css", 30 => "javascript"];
$merge_four = [40 => "python", 10 => "go"];

echo "<pre>";
print_r(array_merge($merge_three, $merge_four)); //numeric key will be renumberd
echo "</pre>";

$main = ["one" => "php", "two" => "css", "three" => "javascript"];
$replace = ["one" => "html", "four" => "python"];

echo "<pre>";
print_r(array_replace($merge_three, $merge_four)); //won't be renumberd
print_r(array_replace($main, $replace));
echo "</pre>";

$nums = [1, 2, 3, 4, 5];
$letters = ['A', 'B', 'C', 'D'];

echo "<pre>";
print_r(array_rand($nums)) . "<br>"; //(gettype =int) pick one or more random keys out of an array
print_r(array_rand($nums, 3)) . "<br>"; //(gettype =array)
echo "</pre>";

echo "<pre>";
//to get values make it like this 
echo $letters[array_rand($letters)] . "<br>";
echo "</pre>";

//to return array of random values
$random_keys = array_rand($letters, 3);
$result_array = [];
foreach ($random_keys as $key) {
    $result_array[] = $nums[$key];
}
print_r($result_array);


shuffle($letters);
echo "<pre>";
print_r($letters) . "<br>";
echo "</pre>";
*/



?>