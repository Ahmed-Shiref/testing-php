<?php
////////////////////video 24///////////
//////// Increment And Decrement Operators //////
/*
//Incrementing & Decrementing Operators
//- Increase And Decrease Values*/

/*
echo "<br>";
echo"video (24)";
echo "<br>";

$likes = 0;
$likes++;
$likes++;
$likes--;
$likes++;
$likes++;

echo $likes; //3
echo "<br>";
echo "<br>";


//  post and pre  increment and decrement
$a = 0;
//post 
echo $a++; // 0
echo "<br>";
echo $a; //1
echo "<br>";
echo "<br>";

//pre 
$b = 0;
echo ++$b; // 1
echo "<br>";
echo $b; //1
echo "<br>";
echo "<br>";
*/
?>

<?php
////////////////////video 25///////////
//////// Logical Operators //////
/*
Logical Operators
Compare Conditions
 and => And  => Two Are True
  && =>  And => Two Are True ["&&" Has A Greater Precedence Than "and"]
  or=>  OR => one Or Both Is True
  ||=> OR  => One -Or Both Is True L I I " -Has LA Greater Precedence Than • "or"]
  xor=> xor  => One Is - True But Not Both
  !=> not  => Not True    
*/

/*

echo "<br>";
echo"video (25)";
echo "<br>";

//and
echo "and";
echo "<br>";
var_dump(100 > 50 and 100 > 80 and 100 > 90); //true
echo "<br>";
var_dump(100 > 50 && 100 > 80 && 100 > 100); //false
echo "<br>";
echo "<br>";
echo "<br>";

//or
echo "or";
echo "<br>";
var_dump(100 > 50 or 100 > 80 or 100 > 200); //true
echo "<br>";
var_dump(100 > 300 || 100 > 400 || 100 > 200); //false
echo "<br>";
echo "<br>";
echo "<br>";

//xor
echo "xor";
echo "<br>";
var_dump(100 > 50 xor 100 > 80); //false
echo "<br>";
var_dump(100 > 50 xor 100 > 100); //true
echo "<br>";
echo "<br>";

echo "Three-sided xor";
echo "<br>";
var_dump(100 > 50 xor 100 > 80 xor 100 > 90); //true
echo "<br>";
var_dump(100 > 300 xor 100 > 400 xor 100 > 200); //false
echo "<br>";
var_dump(100 > 50 xor 100 > 400 xor 100 > 200); //true
echo "<br>";
var_dump(100 > 50 xor 100 > 80 xor 100 > 200); //false
echo "<br>";
echo "<br>";
*/
?>

<?php
////////////////////video 26///////////
//////// string Operators //////

/*
echo "<br>";
echo"video (26)";
echo "<br>";


$a="elzero";
$b="web";
$c="school"; 
define("ELZERO","1");
function testing(){return 1;}
$x = "elzero";
$x.="web";// $x = $x . "web"
$x.= "school";  // $x = $x . "school" => elzero web school

echo "$a $b $c";
echo "<br>";
echo "{$a} {$b} {$c}";
echo "<br>";
echo $a ." ".$b." " . $c ;
echo "<br>";
echo "{$a} {$b} {$c}" . ELZERO ;
*/
?>

<?php
////////////////////video 27///////////
//////// array Operators //////
///deal with Arrays
/*
+     =>    Union
==    =>    Equal => Same key And Value
!=    =>    not Equel
<>    =>    not Equel
===   =>    Identical => Same key And Value , same order , same Type
!==   =>    not Identical
*/

/*
echo "<br>";
echo"video (27)";
echo "<br>";

$arr1 = [1 => "A", 2 => "B"];
$arr2 = [3 => "c", 4 => "d"];
$arr3 = $arr1 + $arr2;

echo "<pre>";
print_r($arr1 + $arr2);
echo "</pre>";
echo "<br>";
echo "<br>";


$arr4 = [1 => "10", 2 => "20"];
$arr5 = [2 => 20, 1 => 10];
echo "<br>";
var_dump($arr4 == $arr5); //true >>> Equal => Same key And Value
echo "<br>";
var_dump($arr4 != $arr5); //false
echo "<br>";
var_dump($arr4 <> $arr5); //false
echo "<br>";
echo "<br>";


//Identical
$arr6 = [1 => "100", 2 => "200"];
$arr7 = [1 => "100", 2 => "200"];
$arr8 = [1 => 100, 2 => 200];
$arr9 = [2 => "200", 1 => "100"];
$arr10 = [3 => "100", 4 => "200"];

echo "Identical";
var_dump($arr6 === $arr7); //true Same key And Value,same order and Type
echo "<br>";
var_dump($arr6 === $arr8); //false not Same type
echo "<br>";
var_dump($arr6 === $arr9); //false not the same order
echo "<br>";
var_dump($arr6 === $arr10); //false not the same key
echo "<br>";
echo "<br>";
echo "<br>";
*/
?>

<?php
////////////////////video 28///////////
//////// Error control Operators //////
/* Control The Errors
@
variable
file
include*/

/*

echo "<br>";
echo"video (28)";
echo "<br>";

//variable
$a = 10;
$b = @$a or die("variable not found ");
echo "number" . $b;
echo "<br>";


//file
$f = (@file("osama.txt")) or die("file not found");
echo "<pre>";
print_r($f);
echo "</pre>";

//include
(@include("osama elzero.php")) or die("Include File Not Found");
echo "<br>";
echo "<br>";
echo "<br>";

*/
?>

<?php
////////////////////video 29///////////
//////// Operator Precedence //////
// "||" Has A Greater Precedence Than "or"
// "&&" Has greater Precedence Than "and"

/*
echo "<br>";
echo"video (28)";
echo "<br>";

echo 2+4 * 5;//22
echo"<br>";
echo (2+4) * 5;//22
echo"<br>";
echo 10 || false ||0||[]||""; //true => 1
echo"<br>";
echo true; //1
echo"<br>";
var_dump(10 || false ||0||[]||""); //true 
echo"<br>";
echo 10 || false; //1
echo"<br>";

$a =10 || false; //$a = (10 || false) => $a=1
echo $a; //1 

echo"<br>";

$b =10 or false; //($b = 10) or false
echo $b;//10 
*/


?>