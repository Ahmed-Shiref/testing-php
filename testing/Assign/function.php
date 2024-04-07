<!--------------------first requirement------------------->
<?php
/*function greeting($name, $gender = "")
{
    if ($gender == "Male") {
        $gender = "Mr";
    } elseif ($gender == "Female") {
        $gender = "Miss";
    }
    return "hello " . $gender . " " . $name . "<br>";
}
// // Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
*/

use function PHPSTORM_META\type;

?>

<!--------------------second requirement------------------->
<?php
/*
function get_arguments(...$args)
{
    $allargs = "";
    foreach ($args as $arg) {
        $allargs = $allargs . " " . $arg;
    }
    return $allargs . "<br>";
}

echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP

function get_arguments2(...$args)
{
    $allargs = "";
    foreach (func_get_args() as $arg) {
        
        $allargs = $allargs . " " . $arg;
    }
    return $allargs . "<br>";
}
echo get_arguments2("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
*/
?>

<!--------------------third requirement------------------->
<?php
/*
function sum_all(...$numbers)
{
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number === 5) {
            $number = 0;//or
            //continue;
        } elseif ($number === 10) {
            $number = 20;
        }
        $sum += $number;
    }
    return $sum . "<br>";
}

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40
*/
?>

<!--------------------Fourth requirement------------------->
<?php

function multiply(...$numbers)
{
    $sum = 1;
    foreach ($numbers as $number) {
        if (gettype($number) == "string") {
            continue;
        } elseif (gettype($number) === "double") {
            $number = (int)$number;
        }

        $sum *= $number;
    }
    return $sum . "<br>";
}
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000

?>

<!--------------------Fifth requirement------------------->
<?php
/*
function check_status($a, $b, $c)
{
    //////ways to add variables to array  _______important______
    // $getargs[] = $a;
    // $getargs[] = $b;
    // $getargs[] = $c;
    //$getargs=[$a, $b, $c];
    $getargs = array($a, $b, $c);
    //foreach (func_get_args() as $arg){
    foreach (($getargs) as $arg) {
        if (gettype($arg) == "string") {
            $name = $arg;
        } elseif (gettype($arg) == "integer") {
            $age = $arg;
        } elseif (gettype($arg) == "boolean") {
            $state = $arg;
            if ($state == true) {
                $state = "You Are Available For Hire";
            } else $state = "You Are not Available For Hire";
        }
    }

    return $name . " " . $age . " " . $state . "<br>";
}

// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

////////////////////////////////another way
 function check_status($a, $b, $c) {
    $args = [$a, $b, $c];
    $name = "";
    $age = 0;
    $status = false;
    
    foreach ($args as $arg) {
      if (gettype($arg) == 'string') $name = $arg;
      else if (gettype($arg) == 'integer') $age = $arg;
      else $status = $arg;
    }
  
    echo "Hello $name, Your Age Is $age, " . ($status === true ? "You Are" : "You Are Not") . " Available For Hire";
    echo '<br>';
  }
  
*/
?>

<!--------------------sixth requirement------------------->
<?php
/*
function calculate($num1, $num2, $op = "add")
{
    if ($op == "add" || $op == "a") {
        return $num1 + $num2 . "<br>";
    } elseif ($op == "subtract" || $op == "s") {
        return $num1 - $num2 . "<br>";
    } elseif ($op == "multiply" || $op == "m") {
        return $num1 * $num2 . "<br>";
    } else
        return "false operator" . "<br>";
}

echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
echo calculate(10, 20, "r"); // 200*/
?>

<!--------------------Seventh requirement------------------->
<?php
/*
function calculate(int $num_one, int $num_two): float
{
    echo  "<br>";
    return $num_one + $num_two;
}

echo calculate(20, 10); // 30
echo gettype(calculate(20, 10)); // Double
*/ ?>

<!--------------------eighth  requirement------------------->
<?php
/*
$message = "Hello";
// Write Your Code Here
$Hello = fn ($name) => $message . " " . $name;
echo $Hello("Osama"); // Hello Osama
*/
?>

<!--------------------Ninth  requirement------------------->
<?php
/*
// Write Function Content Here
$greet = function () {
    return "Greetings";
};
$greet = fn () => "Greetings";
// Needed Output
echo $greet("Osama"); // Greetings
*/
?>