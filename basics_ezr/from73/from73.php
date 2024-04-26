<?php

/////////////////video 73 ///////////
/*
math functions

//abs(number[required])
// absolute value => non negative value

//mt_rand(min[optional],max[optional]) || rand(min[optional],max[optional])
//  mt_getrandmax()=> show largest possible random value
//  generate random value via the mersenne twister random number generator algorithm

//intdiv(dividend[Required],divisor[required])
//  iteger division
//intdiv vs /

//fmod(dividend[required],divisor[required])
//  inreger division
//  intdiv vs /
*/
/*
echo "<br>";
echo "video (73)";
echo "<br>";

echo abs(10) . "<br>"; //10
echo abs(-10) . "<br>"; //10
echo rand() . "<br>"; //num between zero to 2147483647
echo rand(4, 99) . "<br>";
echo mt_getrandmax() . "<br>"; //2147483647

echo 11 / 5 . "<BR>"; //2.2;
echo gettype(11 / 5) . "<br>"; //double

echo intdiv(11, 5) . "<BR>"; //2;
echo gettype(intdiv(11, 5)) . "<br>"; //double

echo 11 % 5 . "<BR>"; //1;
echo gettype(11 % 5) . "<br>"; //integer

echo fmod(11, 5) . "<BR>"; //1;
echo gettype(fmod(11, 5)) . "<br>"; //double

echo 11.5 % 5 . "<BR>"; //1 ; remove the .5 from 11 
echo gettype(11.5 % 5) . "<br>"; //integer

echo fmod(11.5, 5) . "<BR>"; //1.5;  didn't remove the .5 from 11 
echo gettype(fmod(11.5, 5)) . "<br>"; //double

*/

?>
<?php
/////////////////video 74 ///////////
/*
math functions

// ceil(number[required])
//  round down to integer

// floor(number[required])
//  round down to integer
*/

/*
echo "<br>";
echo "video (74)";
echo "<br>";

// -1 -2 -3 -4 -5 -6 
// 1 2 3 4 5 6 
echo ceil(5.99) . "<br>"; //6
echo ceil(5.49) . "<br>"; //6
echo ceil(5.10) . "<br>"; //6
echo ceil(5.01) . "<br>"; //6
echo ceil(-5.99) . "<br>"; //-5

echo floor(5.99) . "<br>"; //5
echo floor(5.49) . "<br>"; //5
echo floor(5.10) . "<br>"; //5
echo floor(5.01) . "<br>"; //5
echo floor(-5.99) . "<br>"; //-6

*/

?>

<?php
/////////////////video 75 ///////////
/*
math functions

//round(number[required],precision[optional,mode[optional]])
// round up to integer 
// mode
//   PHP_ROUND_HALF_UP
//   PHP_ROUND_HALF_DOWN
//   PHP_ROUND_HALF_EVEN
//   PHP_ROUND_HALF_ODD

//  ceil, floor, round=>return double
*/

/*
echo "<br>";
echo "video (75)";
echo "<br>";

echo round(5.50) . "<br>"; //6
echo round(5.99) . "<br>"; //6
echo round(5.49) . "<br>"; //5
echo round(5.10) . "<br>"; //5
echo "<br>";
echo round(5.99, 1) . "<br>"; //6
echo round(5.94, 1) . "<br>"; //5.9
echo round(5.995, 2) . "<br>"; //6
echo round(5.994, 2) . "<br>"; //5.99
echo round(5.994, 1) . "<br>"; //6

echo "<br>";
echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>"; //6
echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>"; //5
echo "<br>";

echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>"; //5
echo round(5.55, 0, PHP_ROUND_HALF_DOWN) . "<br>"; //6
echo "<br>";

echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>"; //4
echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>"; //6
echo round(5.49, 0, PHP_ROUND_HALF_EVEN) . "<br>"; //5
echo "<br>";

echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>"; //5
echo round(6.50, 0, PHP_ROUND_HALF_ODD) . "<br>"; //7
echo round(6.49, 0, PHP_ROUND_HALF_ODD) . "<br>"; //6
echo "<br>";
*/

?>

<?php


/////////////////video 76 ///////////
/*
math functions

//sqrt(number[required])
// square root

//min(array[required]) || min(values[required])
// find lowest value

//max(array[required]) || min(values[required])
// find highest value
*/

/*
echo "<br>";
echo "video (76)";
echo "<br>";


// echo "<br>";
// echo sqrt(16) . "<br>"; //4
// echo sqrt(25) . "<br>"; //5
// echo sqrt(100) . "<br>"; //10

// echo "<br>";
// echo min(10, 20, -40, -30, 50) . "<br>"; //-40
// echo min([10, 20, -40, -30, 50]) . "<br>"; //-40

// echo "<pre>";
// print_r(min([1, 3, 5], [1, 2, 6])); //second array start from the right to the left
// echo "</pre>";

// echo max(10, 20, -40, -30, 50) . "<br>"; //50
// echo max([10, 20, -40, -30, 50]) . "<br>"; //50

// echo "<pre>";
// print_r(max([1, 3, 5], [1, 2, 6])); //first array start from the right to the left
// echo "</pre>";
 */

?>

<?php


/////////////////video 77 ///////////
/*
filter functions

//filter_list()
// returns a list of all supported filters

//filter_id(filter_name[required])

//filter_var(value[required],Filter[optional],options[optional])
// filters a variable with a specified filter
*/
/*
echo "<br>";
echo "video (77)";
echo "<br>";

echo "<pre>";
// print_r(filter_list());
echo "</pre>";

echo filter_id("boolean") . "<br>"; //258

$val = "on"; //true || 1 || "yes" || "on"
// if (filter_var($val, 258)) {
    if (filter_var($val, FILTER_VALIDATE_BOOL)) {
        echo "this is true" . "<br>";
    } else {
        echo "this is false" . "<br>";
    }
    */


?>


<?php

/////////////////video 78 ///////////
/*
filter functions

//filter_var(value[required], filter[optional],options[optional])
// validate filters

//  FILTER_VALIDATE_BOOL => [true , 1,yes,on]
//      flag => FILTER_NULL_ON_FAILURE=> flase for [false, 0,no, off, ""] only

//  FILTER_VALIDATE_URL
//    flag => FILTER_NULL_ON_FAILURE
//    flag => FILTER_FLAG_PATH_REQUIRED
//    flag => FILTER_FLAG_QUERY_REQUIRED

//  FILTER_VALIDATE_IP
//    flag => FILTER_NULL_ON_FAILURE
//    flag => FILTER_FLAG_IPV4
//    flag => FILTER_FLAG_IPV6

//  FILTER_VALIDATE_MAC
//    flag=> FILTER_NULL_ON_FAILURE
*/

/*
echo "<br>";
echo "video (78)";
echo "<br>";

$bool = "ELZERO"; //true |1 |"yes"|"on"
var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));
echo "<br>";

$url = "https://elzero.org";
// $url = "https://elzero.org/"; //FILTER_FLAG_PATH_REQUIRED
// $url = "dfvrfdv"; //null | FILTER_NULL_ON_FAILURE
$url = "https://elzero.org/?id=100"; // FILTER_FLAG_QUERY_REQUIRED

var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE));
echo "<br>";
var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
echo "<br>";
var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED));
echo "<br>";
var_dump(filter_var($url, FILTER_VALIDATE_URL, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));
echo "<br>";
echo "<br>";


$ip = "192.168.2.1";
$ip = "2001:db8:3333:4444:5555:6666:7777:8888"; // ip version 6
var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4));
echo "<br>";
var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6));
echo "<br>";
var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));
echo "<br>";
echo "<br>";
echo "<br>";

$mac = "00-B0-D0-63-C2-26";
var_dump(filter_var($mac, FILTER_VALIDATE_MAC, FILTER_NULL_ON_FAILURE));

*/

?>

<?php



/////////////////video 79 ///////////
/*
filter functions

//filter_var(value[required],filter[optional],options[optional])
// validate filters

//   FILTER_VALIDATE_EMAIL
//     flag => FILTER_NULL_ON_FAILURE

//   FILTER_VALIDATE_INT
//     flag => FILTER_NULL_ON_FAILURE
//     options => min_range
//     options => max_range
//     convert to int on success

//   FILTER_VALIDATE_FLOAT
//     flag => FILTER_NULL_ON_FAILURE
//     options => min_range
//     options => max_range
//     convert to float on success
*/


/*
echo "<br>";
echo "video (79)";
echo "<br>";

$email = "ahmedefdsaf@gmail.com";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE));

echo "<br>";
echo "<br>";

$int = "101";
// $int = 90.5; will not work
var_dump(filter_var($int, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE));
echo "<br>";

var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
)); //null
echo "<br>";
echo "<br>";
echo "<br>";

$float = 90.5;
var_dump(filter_var($float, FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE));
echo "<br>";

var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
)); //null
echo "<br>";

 */


?>

<?php

/////////////////video 80 ///////////
/*
filter functions

//filter_var(value[required],filter[optional],options[optional])
// sanitize filters

//  FILTER_SANITIZE_EMAIL
//  Remove all but letters + digits + !#$%&'*+-=?^_`{|}~@.[]
//  TEST ¥


//  FILTER_SANITIZE_NUMBER_INT
//    remove all but difits, +, -

//  FILTER_SANITIZE_NUMBER_FLOAT
//    remove all but difits, +, - and optionally [.,eE]
//  flags =>FILTER_FLAG_ALLOW_THOUSAND
//  flags => FILTER_FLAG_ALLOW_FRACTION

//  FILTER_SANITIZE_URL
//  remove all but letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%":/?:@&=.
//  test ¥ + space

*/
echo "<br>";
echo "video (80)";
echo "<br>";

/*
$email = "o  ¥   @nn.sa";
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
echo "<br>";

$int = "100+ er wd 100er dsar"; //"100+100
var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));

echo "<br>";

$float = "1,950,150.6541";
var_dump(filter_var(
    $float,
    FILTER_SANITIZE_NUMBER_FLOAT,
    ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
));

echo "<br>";

$url = "https://elz¥¥¥¥ero.org";
var_dump(filter_var($url, FILTER_SANITIZE_URL));
echo "<br>";
*/


?>
<?PHP
/////////////////video 81 ///////////
/*
filter functions

//filter_input(type[required],value[required],filter[optional],options[optional])
//  INPUT_GET
//  INPUT_POST
//  INPUT_COOKIE
//  INPUT_SERVER
//  INPUT_ENV

// FILTER_VALIDAE_INT
// FILTER_NULL_ON_FAILURE
*/
echo "<br>";
echo "video (81)";
echo "<br>";

// echo $_GET["num"];

echo filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);

?>

<form action="" method="GET">
    <input type="text" name="num">
    <input type="submit" value="Send">
</form>