<?php
/*/////////////////video 30 ///////////
//////// If Elseif Else - Basics  //////
//control Structure

syntax
if (condition){
 // If -Condition Is True Run Me   
}
*/


echo "<br>";
echo "video (30)";
echo "<br>";
/*
if (10 > 10) {
    echo "first condition";
} elseif (10 > 6) {
    echo "second condition";
} else {
    echo "no";
}
*/
?>
<?php
////////////////////video 31 ///////////
////////  control Structure
//- If, : Elseif, , Real Life Examples //////


echo "<br>";
echo "video (31)";
echo "<br>";
/*
$page = "about";
if ($page == "about") {
    echo "this is the page";
}
echo "<br>";

$title = "home";
if ($title == "") {
    echo "unknown page";
} else {
    echo $title;
}
echo "<br>";

//if , elseif , else
$lang = "arabic";
if ($lang == "arabic") {
    echo "مرحبا";
} elseif ($lang == "english") {
    echo "hello";
} elseif ($lang = "spanish") {
    echo "HOLA";
} else {
    echo "unknown language ";
}

*/
?>

<?php
////////////////////video 32 ///////////
//////// control Structure If, Elseif, Else <= Advanced Practice  //////
// 30% TO 60%

echo "<br>";
echo "video (32)";
echo "<br>";
/*
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["lang"] == 'ar') {
        header("Location: ar.php");
        exit();
    } elseif ($_POST["lang"] == 'en') {
        header("Location: en.php");
        exit();
    }

}
*/
?>

<!--
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <select name="lang">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="es">Spanish</option>
        </select>
        <input type="submit" value="Go">
    </form>
</body>

</html>
-->


<?php
////////////////////video 33 ///////////
////////  Control Structure
////if ,Elseif, else <= Alternate Syntax //////
// 60% to 80%


echo "<br>";
echo "video (33)";
echo "<br>";
echo "<br>";
/*
if (1 > 5)
    echo "good";
else
    echo "bad";

?>

<?php if (10 > 1): ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    hello page
</body>

</html>
<?php endif */
?>



<?php
////////////////////video34  ///////////
//////// Nested If And Advanced Practice  //////


echo "<br>";
echo "video (34)";
echo "<br>";
/*
$name = "osama";
$is_student = 1;
$is_orphan = true;
$country = "Egypt";
$country_discount = 50;
$price = 100;
$student_discount = 10;
$orphan_discount = 15;

if ($country == "Egypt") {

    if ($is_student == true) {
        if ($is_orphan == true) {
            echo "hello $name";
            echo "<br>";
            echo "country_discount + student discount + orphan_discount = " . $country_discount + $student_discount + $orphan_discount;
            echo "<br>";
            echo "the final price is " . $price - ($country_discount + $student_discount + $orphan_discount);
        } else {
            echo "hello $name";
            echo "<br>";
            echo "country_discount + student discount = " . $country_discount + $student_discount;
            echo "<br>";
            echo "the final price is " . $price - ($country_discount + $student_discount);
        }

    } else {
        echo "hello $name";
        echo "<br>";
        echo "country_discount  $country_discount";
        echo "<br>";
        echo "the final price is " . $price - $country_discount;
    }
} else {

    echo "hello $name";
    echo "<br>";
    echo "no discount";
    echo "<br>";
    echo "the final price is $price";
}
*/
?>




<?php
//////////////////// video 35  ///////////
////////  Ternary Conditional Operator 
//////  short if

echo "<br>";
echo "video (35)";
echo "<br>";
/*
$a = 10;

if ($a > 8) {
    echo "good";
} else {
    echo "bad";
}

echo "<br>";
// condition ? true : false;
echo $a > 8 ? $d = "good" : $d = "bad";
echo "<br>";
echo "i love php because it's a $d language";
echo "<br>";

echo "i love php because it's a " . ($a > 8 ? "good" : "bad") . " language";
*/
?>



<?php
////////////////////video 36 ///////////
/// cotrol structure
/////  switch //////
/*
 syntax
 switch(expression) {
    case 1 :
        // code block 1
        break;
 
        case 2 :
        // code block 2
        break;

            case 3 :
        // code block 3
        break;    
    }
*/

echo "<br>";
echo "video (36)";
echo "<br>";

$day = "sat";
switch ($day) {

    case "sat":
        echo "Hello Today Is $day We Are Open From 10:16";
        break;

    case "sun":
        echo "Hello Today Is $day We Are Open From 10:16";
        break;

    case "mon":
    case "thu":
        echo "Hello Today Is $day We Are Open From 10:16";
        break;

    default:
        echo "Unknown day ";
}


?>