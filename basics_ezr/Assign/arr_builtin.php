<!--------------------first requirement------------------->
<?php
/*
 
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];
echo "<pre>";
print_r(array_chunk(array_change_key_case($friends, CASE_LOWER), 2, true));
echo "</pre>";
*/
?>

<!--------------------second requirement------------------->
<?php
/*
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];
echo "<pre>";
print_r(array_combine($codes, $means));
echo "</pre>";
*/
?>

<!--------------------third requirement------------------->
<?php
/*
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];
echo "<pre>";
print_r(array_reverse(array_change_key_case(array_flip($friends), CASE_LOWER)));
echo "</pre>";
*/
?>
<!--------------------Fourth requirement------------------->
<?php
/*
$nums = [10, 20, 30];
print_r(array_reduce($nums, fn ($n1, $n2) => $n1 + $n2));
echo "<br>";
print_r(array_sum($nums));
*/
?>
<!--------------------Fifth requirement------------------->
<?php
/*
$nums = [5, 10, 20, 5, 30, 40];
function sums($nums)
{
    $sums = 0;
    for ($i = 0; $i < count($nums); $i++) {
        if ($nums[$i] === 5) {
            continue;
        }
        $sums += $nums[$i];
    }
    return $sums;
};
echo sums($nums);
*/
?>
<!--------------------sixth requirement------------------->
<?php
/*
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
echo "<pre>";
print_r(array_pad($chars, 10, $char[$zero]));
echo "</pre>";
*/
?>
<!--------------------Seventh requirement------------------->
<?php
/*
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];
next($names);
next($names);
echo current($names) . "<br>"; // "Sayed"
end($names);
echo current($names) . "<br>"; // "Ali"
reset($names);
echo current($names) . "<br>"; // "Osama"
end($names);
prev($names);
echo current($names) . "<br>"; // "Mahmoud"
*/
?>

<!--------------------eighth  requirement------------------->
<?php
/*
$chars = ["A", "B", "C"];
// $chars[] = "D";
// array_push($chars, "D");
// array_splice($chars, count($chars), 1, "D");
// $chars[count($chars)] = "D";
print_r($chars);
*/
?>
<!--------------------Ninth  requirement------------------->
<?php
/*
$nums = [1, 2, 3, 4, 5, 6];
print_r(array_slice($nums, 1, -2));
*/
?>

<!--------------------Tenth  requirement------------------->
<?php
/*
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here

array_splice($mix, 3, 3, $nums);
print_r($mix);
*/
?>
<!--------------------eleventh  requirement------------------->
<?php
/*
$arr = ["A", "B", "C", "D", "E"];
$count = 0;

foreach ($arr as $element) {
    $count++;
}
echo $count;
*/
?>
<!--------------------twelveth  requirement------------------->
<?php
/*
$sum = function ($nums) {
    $sum = 0;
    for ($i = 0; $i < count($nums); $i++) {
        $sum += $nums[$i];
    }
    return $sum;
};
$nums = [11, 2, 10, 7, 20, 50];
echo $sum($nums);
*/
?>
<!--------------------Thirteenth  requirement------------------->
<?php
/*
$nums = [10, 100, -20, 50, 30];
$max = $nums[0];

for ($i = 1; $i < count($nums); $i++) {
    if ($nums[$i] > $max) {
        $max = $nums[$i];
    }
}
function sum_except_max($nums, $max)
{
    $sums = 0;
    for ($i = 0; $i < count($nums); $i++) {
        if ($nums[$i] === $max) {
            continue;
        }
        $sums += $nums[$i];
    }
    return $sums;
};

echo sum_except_max($nums, $max);
*/

?>
<!--------------------fourteenth  requirement------------------->
<?php
/*
$nums = [10, 100, -20, 50, 30];
$min = 0;
for ($i = 0; $i < count($nums); $i++) {
    if ($nums[$i] < $min) {
        $min = $nums[$i];
    }
}
echo $min;
*/
?>

<!--------------------Fifteenth  requirement------------------->
<?php
/*
$chars = ["o", "r", "e", "z", "l", "E"];
$word = "";
$count = 0;
foreach ($chars as $char) {
    $count++;
}
for ($i = $count - 1; $i >= 0; $i--) {
    $word .= $chars[$i];
}
echo $word;
// Output
"Elzero"
*/
?>

<!--------------------sixteen  requirement------------------->
<?php
/*
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$result = [];
for ($i = 0; $i < count($mix); $i++) {
    if (gettype($mix[$i]) == "integer" && $mix[$i] % 2 !== 0) {
        $result[] = $mix[$i];
    }
}
echo "<pre>";
print_r($result);
echo "</pre>";
// Output
*/
?>


<!--------------------seventeenth  requirement------------------->
<?php


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
    }
}
function array_shuffle(array $arr)
{
    $items = [];
    foreach ($arr as $item) {
        array_splice($items, rand(0, 5), 0, $item);
    }
    return $items;
}
$array = [1, 2, 3, 4, 5, 6];


echo "<pre>";
print_r(myshuffle($array));
echo "</pre>";

?>
<!--------------------eighteen  requirement------------------->
<?php
$title = "E&z\$r0 W\$b Sch00&";
echo str_replace(["&", "\$", "0"], ["l", "e", "o"], $title, $r) . "<br> $r";

// Output
"Elzero Web School"

?>