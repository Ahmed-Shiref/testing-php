<!--------------------first requirement------------------->
<?php
/*
// Replace ? With Arithmetic Operators
echo 10 * 20 * 15 * 3 * (190 % 10) * 400; // 0
echo "<br>";
*/
?>
<!--------------------second requirement------------------->
<?php
/*
$a = "10";

//first way
echo $a;
echo "<br>";
echo gettype((int) $a); // integer
echo "<br>";

//second way
echo 0 + $a;
echo "<br>";
echo gettype(0 + $a); // integer
echo "<br>";

//third way
echo false + $a;
echo "<br>";
echo gettype(false + $a); // integer
echo "<br>";

// For The People Who Love Searching
echo intval($a);
echo "<br>";
echo gettype(intval($a)); // integer
echo "<br>";
echo "<br>";
*/
?>

<!-------------------------------third requirement---------------------------------->
<?php
/*
$a = 10;
$b = 20;
echo ($a - $b) / $a;
// Needed Output
echo "<br>";
echo "<br>";
*/
?>
<!-------------------------------Fourth requirement---------------------------------->

<?php
/*
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
echo "<br>";
var_dump($c > $a); // True
echo "<br>";
var_dump($a <= $b); // True
echo "<br>";
var_dump($a != $b); // True
echo "<br>";
var_dump($a !== $c); // True
echo "<br>";
var_dump($a <> $c); // True
echo "<br>";
var_dump(gettype($a) === gettype($b)); // True
echo "<br>";
var_dump(gettype($a) == gettype($b)); // True
echo "<br>";
var_dump((bool)gettype((float) $a) >= (bool)gettype($b)); // True
echo "<br>";
*/
?>

<!-------------------------------Fifth requirement---------------------------------->
<?php
/*
$points = 10;

$points++;$points++;$points++;
echo $points; // 13
echo "<br>";
$points--;$points--;$points--;$points--;$points--; 
echo "<br>";
echo $points; // 8;
*/
?>
<!-------------------------------sixth requirement---------------------------------->
<?php
/*
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
 //$d =$a.' '.' '.$b.' '.$c ;

// Method Two
 //$d = "$a $b $c";

// Method Three
 //$d = "{$a} {$b} {$c}";

// Method Four
 $d = $a . " " ;
$d.=$b . " " ;
$d.=$c . " " ;
echo $d; // Elzero Web School
*/
?>
<!-------------------------------Seventh requirement---------------------------------->
<?php
/*
$a = 10;
$b = 20;

echo ((($a + $b) * ($a + $b ))+ $a * $a) * $a; // 10000
*/?>
<!-------------------------------eighth  requirement---------------------------------->
<?php

// Code 1
$a = @$b or die("Custom Error");

// Code 2
$f = @(file("Not_A_File")) or die("Custom Error");
// Code 3
@include("Not_A_File") or die("Custom Error");

?>