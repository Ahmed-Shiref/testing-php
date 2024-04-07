<?php
/////////////////video 37 ///////////
//////// loop/////  while  //////////
echo "<br>";
echo "video (37)";
echo "<br>";

/*
$i = 1;
while ($i <= 3) {
    echo "$i <br>";
    $i++;
}

// another way of code
$a = 1;
while ($a <= 3) :
    echo "$a <br>";
    $a++;
endwhile;

$index = 0;
while ($index <= 30) :
    echo "$index <br>";
    $index += 5;
endwhile;
*/

?>


<?php
////////////////////video 38 // /////////
//////// Do While  //////

echo "<br>";
echo "video (38)";
echo "<br>";
/*
$i = 1;
do {                // الاول  وبعدين تبص علي الشرط حتي لو الشرط  غلط هينفذ do بتنفذ 
    echo "$i<br>";
    $i++;
} while ($i <= 3);
*/
?>

<?php
////////////////////video 39 ///////////
//////// for loop//////

//For
//- Expression One Run Once At The First Of The LOOP
//- In The Begining Of Iteration Expression Is Checked [If True Continue I I •Break]
//- At The End Of Iteration Expression Three Are Executed

echo "<br>";
echo "video (39)";
echo "<br>";


for ($i = 1; $i <= 5; $i++) {
    echo "$i<br>";
}
echo "<br>";

// another syntax
$s = 1;
for (;; $s++) {
    if ($s == 4) {
        break;
    }
    echo "$s<br>";
}
echo "<br>";

// another syntax
$q = 1;
for (;; $q++) :
    if ($q == 4) {
        break;
    }
    echo "$q<br>";
endfor;
echo "<br>";

?>

<?php
////////////////////video 40 ///////////
//////// foreach  //////

echo "<br>";
echo "video (40)";
echo "<br>";
/*

$countries = ["EG", "SA", "QA", "SY"];
echo '<pre>';
print_r($countries);
echo '</pre>';

//foreach($array as value )  syntax
foreach ($countries as $country) :  ///   طباعه البلاد بتعمل لوب علي  الاراي كل لوب بتطبع عنصر لحد اما الاراي يخلص     
    echo "$country <br>";
endforeach;
echo "<br>";

$countries_with_discount = ["EG" => 50, "SA" => 30, "QA" => 40, "SY" => 70];
//foreach($array as $key => $value )  another syntax
foreach ($countries_with_discount as $country_name => $discount) {
    echo "country_name is $country_name and discount is $discount" . '<br>';
}
*/
?>

<?php
////////////////////video 41 ///////////
//////// Break, Continue
/*
- Break Ends Execution Of (For, Foreach, OWhi1e, Do-while or Switch)
- Skip Current Iteration
*/
echo "<br>";
echo "video (41)";
echo "<br>";
$countries  = ["EG", "SA", "QA", "SY", "USA", "GER"];
//break make the loop stop
/*
foreach ($countries as $country) {
    echo $country . "<br>";
    if ($country == "USA") break; //it will write USA then will break the loop 
}*/
/*
foreach ($countries as $country) {
    if ($country == "USA") break; //it will break the loop before write USA
    echo $country . "<br>";
}*/
/*
// continue skip every Statements after it 
foreach ($countries as $country) {
    if ($country == "USA") continue; //it will skip writting USA and writting the things after it
    echo $country . "<br>"; //if country == "USA" it will skip this line 
}
foreach ($countries as $country) {
    echo $country . "<br>"; 
    if ($country == "USA") continue; //it wont't do anything because there is not statment after it 
}*/

$w = 45;
$t = 54;
$f = 25;

/*
for (; $w / 9 < 10; $w++) {
    if ($w == 45 || $w == 46 || $w == 47 || $w == 64 || $w == 66) continue;
    echo "ahmed " . $w . "<br>";
    echo  56 . 245 . 45 . "<br>";
    echo "<br>";
}*/
/*
for (; $w / 9 < 10; $w++) {
    if ($w / 5 > 15) continue;
    echo "ahmed " . $w / 5 . "<br>";
    echo "<br>";    
    echo  56 . 245 . 45 . "<br>";
} 
*/
?>


<?php
////////////////////video 42 ///////////
//////// include  and require  //////
//
echo "<br>";
echo "video (42)";
echo "<br>";
/*
include("test.php"); //$a=10;
echo $a . "<br>";
$a = 20;
//include("test.php"); //    علي المتغير فرجعه ب عشره  override هنا عمل
include_once("test.php"); // هنا بيقوله لو انت عملت انكلود قبل كدا متعملش انكلود تامي ملهاش لزمه

echo $a . "<br>";
//include("err.php")
echo "continue";


//require ("err.php")//لما يكون عندك ملف الاسكرب ت مينفعش يعمل رن من غيره 
*/
?>