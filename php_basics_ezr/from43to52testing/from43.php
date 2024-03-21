<?php
/////////////////video 43 ///////////
//funcation
//Introduction And DRY Concept
//Parameter
//Argument


/*
echo "<br>";
echo "video (43)";
echo "<br>";

    echo "<form action='' method='post'>"    ///myselfffffffffffff
        . "<lable for 'someone'> enter your user name</lable> <br>"
        . "<input type='text' name='someone'>"
        . "<input type='submit' value='submit'>"
        . "</form>";
function say_hello_to($someone)
{
    echo "Hello $someone <br>";
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $someone1 = $_POST['someone'];
} else $someone1 = null;
if ($someone1 <> null) {
    say_hello_to($someone1);
} else echo "please put your name ?"
*/
?>



<?php
////////////////////video 44 ///////////
////////  Advanced Examples With Parameters And Arguments
//Real Life Example
/*
echo "<br>";
echo "video (44)";
echo "<br>";
function say_hello_to($one, $two)
{
    echo "Hello $one + $two <br>";
}
say_hello_to("Osama", 4);
say_hello_to("Ahmed", 45);

function deep_freezer($item)
{
    if ($item === "water") {
        echo "Make Ice <br>";
    } elseif ($item === "mango") {
        echo "Make it cold <br>";
    } elseif ($item === "frutis") {
        echo "Make it fresh <br>";
    } else echo "unknown Item";
}
deep_freezer("water");
deep_freezer("frutis");
deep_freezer("mango");
deep_freezer("remote");
*/
?>

<?php
////////////////////video 45 ///////////
//////// function
//////optional return & null
//end after return
/*
echo "<br>";
echo "video (45)";
echo "<br>";
$prizes = ["pc", "playstation", "xbox", "apple tv", "laptop", "ipad", "iphone"];
function get_number($num1, $num2)
{
    return $num1 + $num2;
    //echo $num1 + $num2;
}

//get_number(2, 1); //3
//echo $prizes[3];
//$prize_number = get_number(1, 2);
//var_dump($prize_number);
//echo $prizes[get_number(1, 2)];
*/
?>




<!--IMPORTANT START FROM HERE ===========================-->





<?php
////////////////////video 46 ///////////
////////  function
//defult parameter value
//Using
//test data
//skip Arguments

/*
echo "<br>";
echo "video (46)";
echo "<br>";
function get_data($country = "private country", $name = "private", $age = "private", $address = "private address") //don't put the default parameter first
{
    //if ($address == "") {
    //    $address = "private address";
    //}
    $line_one = "your country is $country and your name is $name <br> ";
    $line_two = "your age is $age and you live in $address";
    return $line_one . $line_two;
}
//echo get_data("egypt", "Ahmed", 18);
echo get_data(address: "cairo"); // echo address only
*/
?>

<?php
////////////////////video 47 ///////////
////// function 
//variable arguments list
//func_num_args()//it consider the array as 1 arg 
//but if you spread (...$arr) the array it will consider it by the number of args in the array 
//func_get_arg(index)
//func_get_args()
//spread syntax //this will collect every arg in array $nums

/*
echo "<br>";
echo "video (47)";
echo "<br>";
function calculate($num1, $num2, $num3, $num4, $num5)
{
    echo "number of arguments " . func_num_args() . "<br>";
    echo "index number 3 " . func_get_arg(3) . "<br>";
    print_r(func_get_args());
    $result = 0;
    foreach (func_get_args() as $args) {
        $result += $args;
    }
    return $result;
}*/

///////////////////   spread syntax ////////////////////////
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
$rr = ["pw", 2, "uu", 7];
ar(...$rr);
*/

////////////////////

/*function calculate(...$nums) //this will collect every arg in array $nums
{
    // echo "index number 3 = " . $nums[3] . "<br>";
    // print_r($nums);
    $result = 0;
    foreach ($nums as $num) {
        $result += $num;
    }
    // return $result;
    echo "total numbers are equal to " . $result;
}
calculate(1, 2, 4, 6, 7);
*/ ?>

<?php
////////////////////video 48 ///////////
//function
//function advanced training
//function unpacking in arguments

///search
//php Variadic functions
//splat operator

/*
echo "<br>";
echo "video (48)";
echo "<br>";
$group_of_skills = ["html", "css", "js", "php"];
function get_data($name, $country = "private", ...$skills) //spread syntax should be the last arg
{
    echo "Hello $name and your country is $country <br>";
    foreach ($skills as $skill) :
        echo "== $skill <br>";
    endforeach;
}
//get_data("osama", "egypt", "html", "css", "js", "php");
//get_data("osama", "egypt", ...$group_of_skills); //////unpacking by 3 dots
get_data("osama", "egypt", ...["html", "css", "js", "php"]); //ok
*/
?>

<?php
////////////////////video 49  ///////////
//////// function  //
//variable function
//PHp Allow To Usevariab1e Like Function
//when you append parentheses () to variable php will look for function with that name
//function Exists

/*
echo "<br>";
echo "video (49)";
echo "<br>";
//variable function
function one()
{
    return "one form function";
}
$func1 = "one";
echo $func1();
echo "<br>";
function say_hello_to($someone)
{
    return "hello $someone";
}
$func2 = "say_hello_to";
echo $func2("ahmed");
echo "<br>";
//function Exists
function testing()
{
    return "testing from function";
}
if (function_exists("testing")) {
    echo testing();
} else {
    echo "function not found";
}
echo "<br>";
//string lenth
echo strlen("elzero"); //6
echo "<br>";
$func3 = "strlen";
echo $func3(testing());
*/
?>

<?php
////////////////////video 50 ///////////
////////  function
// passing arguments by refrance
// by default, function arguments are passed by value
// if the value of the argument inside the function changed it will not change outside
// to change it outside pass the argument by reference

//return type declaration

/*
echo "<br>";
echo "video (50)";
echo "<br>";
//passed by value
function add_five(&$number)
{
    $number += 5;
    return $number;
}
$n = 15;
echo add_five($n);
echo "<br>";
//echo $n; //15 if by value
echo $n; //20 if by refrance
echo "<br>";
function calculate($n1, $n2): int //<<<<<<make output data integer
{
    return $n1 + $n2;
}
echo calculate(10.5, 9.5);
echo "<br>";
//echo gettype(calculate(10.5, 9.5)); //double
echo gettype(calculate(10.5, 9.5)); //integer
*/
?>

<?php
////////////////////video51  ///////////
//function
//Anonymous function
//when we create a function we give it a name so we can call it later with that name
//sometimes we need to create a function a function for specific task <= this is not against DRY

//variable inherit from parent scope 
//variable inherit by referance from parant scope
//anonymous function can be passed to a function
//anonymous function can be return from a function

//search
//closure
echo "<br>";
echo "video (51)";
echo "<br>";
/*
//normal function with parameter
function say_hello_to($someone)
{
    return "hello $someone";
}
echo "<br>############<br>";

//Anonymous function in variable
$say_hello = function () {
    return "hello";
};
echo $say_hello(); //hello
echo "<br>############<br>";

//Anonymous function with parameter in variable
$say_hola = function ($someone = '') {
    return "hola $someone";
};
echo $say_hola("ahmed");

echo "<br>############<br>";

//inherit variable from parent scope 
$msg = "hi";
$say_hi = function ($someone = '') use ($msg) {
    return "$msg $someone";
};
echo $say_hi("ahmed");
echo "<br>############<br>";

//pass anonymuos function to function => array_map
$nums = [10, 20, 30, 54, 415];
function add_five($item)
{
    return "$item>>" . $item + 5;
}
$nums_after_adding_five = array_map("add_five", $nums);
echo gettype($nums_after_adding_five);
echo "<pre>";
print_r($nums_after_adding_five);
echo "</pre>";
echo "<br>############<br>";

$nums_after_adding_ten = array_map(function ($item) {
    return "$item>>" . $item + 10;
}, $nums);
echo "<pre>";
print_r($nums_after_adding_ten);
echo "</pre>";
*/
?>

<?php
////////////////////video 52 ///////////
///  function 
//arrow function
//short syntax for anonymous function
//automatic use varibles from parent scope

// syntax
//function replaces with fn
//no need for curly braces
//return is omitted

echo "<br>";
echo "video (52)";
echo "<br>";

//Arrow function in variable
$say_hello = fn () => "hello";
echo $say_hello(); //hello
echo "<br>############<br>";

//arrow function with parameter in variable
$say_hola = fn ($someone = '') => "hola $someone";
echo $say_hola("ahmed");
echo "<br>############<br>";

//arrow inherit variable from parent scope is automatic
$msg = "hi";
$say_hi = fn ($someone = '') => "$msg $someone"; //not need to use>> use($msf)

echo $say_hi("ahmed");
echo "<br>############<br>";

//pass arrow function to function => array_map
$nums = [10, 20, 30, 54, 415];
$nums_after_adding_ten = array_map(fn ($item) => $item + 10, $nums);
echo "<pre>";
print_r($nums_after_adding_ten);
echo "</pre>";

?>