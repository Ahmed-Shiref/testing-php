<?php
////////////////////video 20///////////
////////Arithmetic Operators ///////
////Used To Do Arithmetical Operations & Conversion


/*

echo "<br>";
echo"video (20)";
echo "<br>";

//Addition
echo "Addition";
echo "<br>";
echo 10 + 20;
echo "<br>";
echo gettype(10 + 20);
echo "<br>";
echo 9.5 + 20.5;
echo "<br>";
echo gettype(9.5 + 20.5);
echo "<br>";
echo "<br>";

//Subtraction
echo "Subtraction";
echo "<br>";
echo 10 - 20;
echo "<br>";
echo gettype(10 - 20);
echo "<br>";
echo 9.5 - 20.5;
echo "<br>";
echo gettype(9.5 - 20.5);
echo "<br>";
echo "<br>";

//Multiplication
echo "Multiplication";
echo "<br>";
echo 10 * 20;
echo "<br>";
echo gettype(10 * 20);
echo "<br>";
echo 9.5 * 20.5;
echo "<br>";
echo gettype(9.5 * 20.5);
echo "<br>";
echo "<br>";

//Division
echo "Division";
echo "<br>";
echo 20 / 10;
echo "<br>";
echo gettype(20 / 10);
echo "<br>";
echo 20 / 8;
echo "<br>";
echo gettype(20 / 8);
echo "<br>";
echo "<br>";

//Modulus
echo "Modulus";
echo "<br>";
echo 21 % 10; //remove _1_ to become 20 to become divisible by 10  
echo "<br>";
echo gettype(21 % 10); //INTEGER
echo "<br>";
echo 23 % 10; //remove _3_ to become  divisible by 10
echo "<br>";
echo 29 % 10; //remove _9_ to become  divisible by 10 
echo "<br>";
echo 30 % 10; //remove _0_ to become  divisible by 10
echo "<br>";
echo "<br>";

//Exponentiation
echo "Exponentiation";
echo "<br>";
echo 2 ** 4; //16
echo "<br>";
echo 2 * 2 * 2 * 2; //16
echo "<br>";
echo 3 ** 5; //243
echo "<br>";
echo 3 * 3 * 3 * 3 * 3; //243
echo "<br>";
echo "<br>";

//Identity
echo "Identity";
echo "<br>";
echo "100";
echo "<br>";
echo gettype("100"); // string
echo "<br>";
echo +"100";
echo "<br>";
echo gettype(+"100"); //integer
echo "<br>";
//echo +"100a";  // error non-numeric value 
echo "<br>";
echo "<br>";

//Negation
echo "Negation";
echo "<br>";
echo "-100";
echo "<br>";
echo gettype("-100"); // string
echo "<br>";
echo -"-100"; //100
echo "<br>";
echo -"100"; //-100
echo "<br>";
echo gettype(-"-100"); //integer
echo "<br>";
//echo -"-100a";  // error non-numeric value 
echo "<br>";
echo "<br>";
*/

?>


<?php
////////////////////video 21///////////
////////Assignment Operators  ///////
//// Used To Write Value To Another ////

// $a [+=] $b  =>  Addition
// $a [-=] $b  =>  Subtraction
// $a [*=] $b  =>  Multiplication
// $a [/=] $b  =>  Division
// $a [%=] $b  =>  Modulus
// $a [**=] $b  =>  Exponentiation

/*

echo "<br>";
echo"video (21)";
echo "<br>";

$a = 10;
// $a = $a+ 20;
$a = $a + 20;

$b = 20;
//$b= $b-5;
$b -= 5;

$c = 4;
// $c = $c **4;
$c ** 4;


echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
*/

?>


<?php
////////////////////video 22///////////
////////  Comparison Operators  ///////
/////  Used To Compare Two Values
/*
==    => Equal
!=    => Not Equal
<>    => Not Equal
===   => Identical
!==   => Not Identical
*/


/*

echo "<br>";
echo"video (22)";
echo "<br>";

//Test Equal and (not) (===) Compare between Values
echo "Test Equal";
echo "<br>";
var_dump(100 == 100); //TRUE
echo "<br>";
var_dump("100" == 100); //TRUE
echo "<br>";
var_dump(100.0 == 100); //TRUE
echo "<br>";
var_dump(100.1 == 100); //false
echo "<br>";
var_dump(100 != 100); //false 
echo "<br>";
var_dump(100 <> 100); //false
echo "<br>";
echo "<br>";

//Test Identical and (not) (===) Compare between Value and type
echo "Test Identical";
echo "<br>";
var_dump(100 === 100); //TRUE
echo "<br>";
var_dump("100" === 100); //false
echo "<br>";
var_dump(100.0 === 100); //false
echo "<br>";
var_dump(100.1 === 100); //false
echo "<br>";
var_dump(100 !== 100); //false 
echo "<br>";
var_dump("100" !== 100); //TRUE
echo "<br>";
var_dump(100.0 !== 100); //TRUE
echo "<br>";
echo "<br>";
*/
?>

<?php
////////////////////video 23///////////
////////  part2 of Comparison Operators  ///////
/*
   >      =>  Larger Than
   >=     => Larger Than Or Equal
   <      => Smaller Than
   <=     => Smaller Than Or Equal
   <=>    => Spaceship [Less Than, Equal Or Greater]

   Search
- How Does PHP Compare Strings With Comparison Operators
*/

/*

echo "<br>";
echo"video (23)";
echo "<br>";

var_dump(100>50); //true
echo "<br>";
var_dump(100>100); //false
echo "<br>";
var_dump(100>=100); //true
echo "<br>";
var_dump(100>=110); //false
echo "<br>";
var_dump(100<50); //false
echo "<br>";
echo "<br>";
echo "<br>";

//Spaceship [Less Than, Equal Or Greater]
var_dump(100<=>200); //int -1
echo "<br>";
var_dump(100<=>100); //int 0
echo "<br>";
var_dump(100<=>50); //int 1
echo "<br>";
echo "<br>";
*/
?>