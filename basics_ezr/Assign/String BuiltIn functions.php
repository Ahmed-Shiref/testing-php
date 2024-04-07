<!--------------------first requirement------------------->
<?php
/*
$num_one = -1;
$num_two = 2.5;
$let_one = "o";
$let_two = "z";
$str = "El%er0";
$str[$num_one] = $let_one;
$str[(int)$num_two] = $let_two;
echo $str; // Elzero
*/
?>

<!--------------------second requirement------------------->
<?php
/*
$str = "Orezle";
echo ucfirst(strrev(strtolower($str))); //Elzero
*/
?>

<!--------------------third requirement------------------->
<?php
/*
$str = 'aAa';
$num = 3;
$char = "_";
echo str_repeat(strtolower($str) . "_", $num);

// aaa_aaa_aaa_

echo str_repeat((strtolower(str_pad($str, 4, $char))), 3);
*/
//another answer
?>

<!--------------------Fourth requirement------------------->
<?php
/*
$str = "<div><b>Elzero</b></div>";
echo strip_tags($str, "<b>");
// <b>Elzero</b>
//another answer
echo htmlspecialchars(strip_tags($str, '<b>'));
*/
?>

<!--------------------Fifth requirement------------------->
<?php
/*
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo ($four - substr_count($str, strtolower($o)));
echo "<br>";
echo $four - substr_count($str, $e);
// 1
// 2
*/
?>

<!--------------------sixth requirement------------------->
<?php
/*
//implode(Seoarator[Optional],Array[Required])=> join() Is Alias
$chars = ["E", "l", "z", "e", "r", "o"];
echo implode($chars);
// Output Elzero
*/
?>
<!--------------------Seventh requirement------------------->
<?php
/*
 $chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
 foreach ($chars as $char) {
     if (gettype($char) == "string") {
         $char = strtolower($char);
         $charr[] = $char;
     } else continue;
 }
 echo ucfirst(implode($charr));
// Output "Elzero"

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
echo ucfirst(strtolower(implode(str_replace([1, 2], ["", ""], $chars))))
*/

?>