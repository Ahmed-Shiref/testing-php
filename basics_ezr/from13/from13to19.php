<?php

///////////////////////////video 13////////////////////////////////
////////////////Introduction To Variables And Naming Rules/////
/*
variables 
---namng rules *info
[1] Star with Dollar sign $
[2] Star with a Letter {a-z} or {A-Z} or underscore
[3] you can Use number inside the name 
[4]no special characters Allowed
[5]case sensitive
--Test Single a Double Quotes  

search
-loosely Typed language
*/



/*

echo "<br>";
echo"video (13)";
echo "<br>";

//code
$username="osama";
$Username="elzero";  //case sensitive letter U
echo $username;
echo '<br>'; 
echo $Username;
echo '<br>'; 
echo "hello $username";  //--Test Single a Double Quotes  
echo '<br>'; 
echo 'hello $username'; //--Test Single a Double Quotes  
echo '<br>'; 


*/



///////////////////////////video 14////////////////////////////////
////////////////Testing Variables In Real World/////
?>


<?php /* 

echo "<br>";
echo"video (14)";
echo "<br>";

<?php $username14="osama";?>
<?php //$username14="elzero";?>

<!DOCTYPE html>
<html lang="en">
<!--
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>php page|
<?php echo $username14?> </title>
</head>

<body>
<div>welcome <?php echo $username14?></div>
<div>you scored 1000 point</div>
<div>
<?php include("score.php") ?>
</div>
</body>

</html>-->

*/
?>


<?php
///////////////////////////video 15////////////////////////////////
////////////////Variable Variable///////
//Takes - The Value Of A Variable And Treats That -As- The Name Of A Nariable

/*

echo "<br>";
echo"video (15)";
echo "<br>";

$a="osama";
$$a="elzero";
$$$a= "school";

echo "<br>";
echo $a;
echo "<br>";
echo $$a;
echo "<br>";
echo $osama;
echo "<br>";
echo $$$a;
echo "<br>";
echo $elzero;
echo "<br>";

echo " hello ${$a}"; //$$a  >>>elzero
echo "<br>";
echo " hello {$$$a}"; //$$$a >>>school
*/
?>

<?php
///////////////////////////video 16////////////////////////////////
//////////////// Assign By Value And By Reference///////

/*

echo "<br>";
echo"video (16)";
echo "<br>";

//Assign By Value
$ss="osama";  
$bb= $ss;     // Assign By value 
$bb="elzero";
$ss="school";
echo $ss;  //>>> school
echo "<br>";
echo $bb; //>>> elzero


echo "<br>";
$s="osama";  
$b= &$s;     // Assign By Reference 
$b="elzero";
$s="school";
echo $s; //>>> school
echo "<br>";
echo $b; //>>> school 
///////////////

*/


?>

<?php
////////////////////video 17///////////
//////// Predefined Variables And Test///////

/*

echo "<br>";
echo"video (17)";
echo "<br>";

echo "<pre>";
print_r  ($_SERVER); 
echo $_SERVER["HTTP_CONNECTION"];
echo "</pre>";


echo $_POST["username"];
*/
?>
<!--
<form action="" method="post">
    <input type="text" name="username">
    <input type="submit" value="send">
</form>
-->

<?php

////////////////////video 18///////////
////////          Constants          ///////
//That value Cannot Change During The Execution
//Constants Always uppercase

/*

echo "<br>";
echo"video (18)";
echo "<br>";

define("DB_NAME", "elzero");
define("MAIN_NUMBER", 5);
//define("MAIN_NUMBER", 10); //error
echo DB_NAME;
echo "<br>";
echo MAIN_NUMBER *50;

*/
?>




<?php //IMPORTANT
////////////////////video 19///////////
/*
Pre-Defined Constants [Case Sensitive]
- PHP VERSION
- PHP OS FAMILY
- PHP INT MAX
- DEFAULT INCLUDE PATH
----------------
Magic •Constants • [Case Insensitive]<<
-   _LINE_
-   _FILE_
-   _DIR_
----------------
Reserved Keywords
 -- break
 -- clone
 some of reserved words __halt_compiler(),
  abstract, and, array, as, break, callable, case, 
 catch, class, clone, const, continue, declare, default,
  die, do, echo, else, elseif, empty, 
 enddeclare, endfor, endforeach, endif, 
 endwhile, eval, exit, extends, final, finally, for, foreach,
  function, global, goto, if, implements,
   include, include_once, instanceof, insteadof, interface,
   isset, list, namespace, new, or, 
   print, private, protected, public, 
   require, require_once, return,
    static, switch, throw, trait, try, 
    unset, use, var, while, xor, yield

----------------
Search
 - PHP Predefined Constants
 -compile iTme vs Runtime
 - List of Reserved Words
 */


/*

echo "<br>";
echo"video (19)";
echo "<br>";

//code
define("CLONE","aa");

echo php_uname();
echo "<br>";
echo PHP_VERSION;  //[Case Sensitive]
echo "<br>";
echo __LINE__;  //[Case Insensitive]
echo "<br>";
echo __file__;  //[Case Insensitive]
echo "<br>";
echo __dir__;  //[Case Insensitive]
echo "<br>";
//echo CLONE ; // error one of the Reserved Words
echo "<br>";


//no problem here
function hello() {  
  return "hello"; 
}
echo hello(); 

// Reserved word 
/*
function break() {  
  return "hello"; 
}
echo break();  // error>> one of the Reserved Words
*/


?>