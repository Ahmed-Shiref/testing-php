<!--------------------first requirement------------------->
<?php

$a = 100;
$b = 200;
$c = 100;


if ($b > $a && $a == $c && $a + $c == $b) {
  echo "yes";
} else {
  echo "no";
}
echo "<br>";

// Check That:
// Variable "b" Larger Than Variable "a"
// Variable "a" Identical To Variable "c"
// Variable "a" Plus Variable "c" Identical To Variable "b"
//"Yes"
?>


<!--------------------second requirement------------------->
<?php

// Test Case 1
$a = 100;
$b = 200;
$c = 300;
if ($a > $b) {
  echo "A Is Larger Than b";
} elseif ($a > $c) {
  echo "A Is Larger Than c";
} else {
  echo "A Is Not Larger Than B or C";
}
echo "<br>";
?>



<!--------------------third requirement------------------->
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>

<?php
//by if

$admins = ["Osama", "Ahmed", "Sayed"];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  echo "The Request Method Is Post And Username Is " . $_POST['user'] . "<br>";
  if ($_POST['user'] ===  $admins[0] || $_POST['user'] === $admins[1] || $_POST['user'] === $admins[2]) {
    echo "This Username " . $_POST['user'] . " Is Admin";
  }
}

/*
//by switch
switch($_POST['user']){
    case $admins[0] :
      echo"This Username ".$_POST['user']." Is Admin";
      break;

      case  $admins[1]:
        echo"This Username ".$_POST['user']." Is Admin";
        break;
        case  $admins[2]:
          echo"This Username ".$_POST['user']." Is Admin";
          break;
  }
   else {
  echo "The Request Method is GET";
}*/


// Input Name "Osama"
// Needed Output
//"The Request Method Is Post And Username Is Osama"
//"This Username Osama Is Admin"

?>




<!--------------------Fourth requirement------------------->
<?php

$a = 30;
$b = 20;
$c = 10;

echo $a + $b === $c ? "A + B = C" : null;

echo $a + $c === $b ? "A + C = B" : null;

echo $b + $c === $a ? "B + C = A" : null;

/*
echo ((($a + $b === $c) ? "A + B = C" : ($a + $c === $b)) ? "A + C = B" : ($b + $c === $a)) ? "B + C = A" : "The End";
echo '<br>';
*/

// Output
//"B + C = A"
?>

<!--------------------fifth requirement------------------->
<?php
$name = "Osama";
$age = 40;
$country = "Egypt";
/*
if ($age > 18) {
  echo "The Age Is Good To Go<br>";
  if (gettype($name) === "string") {
    echo "The Name Is Good To Go<br>";
    if ($country === "Egypt") {
      echo "The Country Is Good To Go<br>";
    }
  }
}
*/
// echo ((($age == 40) ? "The Age Is Good To Go<br>" : (gettype($name) === "string")) ? "The Name Is Good To Go<br>" : ($country === "Egypt")) ? "The Country Is Good To Go<br>" : null;

// Needed Output
//"The Age Is Good To Go"
//"The Name Is Good To Go"
//"The Country Is Good To Go"
?>

<!--------------------sixth requirement------------------->
<?php
$genre = "Platform";

switch ($genre) {
  case "RPG":
    echo "I Recommend Ys Games";
    break;
  case "Hack And Slash":
    echo "I Recommend Castlevania Games";
    break;
  case "FPS":
    echo "I Recommend Uncharted Games";
    break;
  case "Platform":
    echo "I Recommend Megaman Games";
    break;
  case "Puzzle":
    echo "I Recommend Megaman Games";
    break;
  default:
    echo "I Recommend Shadow Of Mordor And Shadow Of War";
}
echo "<br>";
// Needed Output
//"I Recommend Castlevania Games"
?>


<!--------------------Seventh requirement------------------->
<?php
$num_one = 23;
$num_two = 5;
$op = "/";
switch ($op) {

  case "+":
    echo $num_one + $num_two;
    break;

  case "-":
    echo $num_one - $num_two;
    break;

  case "*":
    echo $num_one * $num_two;
    break;
  case "/":
    echo (int)($num_one / $num_two) . "<br>";

    echo $num_one % $num_two;
    break;
  default:
    echo "Unknown Operation";
}
echo "<br>";
?>

<!--------------------eighth  requirement------------------->
<?php
$day = "Sat";

switch ($day) {
  case "Sat":
  case "Sun":
  case "Mon":
    echo "We Are Open All The Day";
    break;
  case "Tue":
  case "Wed":
    echo "We Are Open From 08:12";
    break;
  case "Thu":
  case "Fri":
    echo "We Are Closed";
    break;
  default:
    echo "Unknown Day";
}
if ($day = "Sat" || $day = "Sun" || $day = "Mon") {
  echo "We Are Open All The Day";
} elseif ($day = "Wed" || $day = "Tue") {
  echo "We Are Open From 08:12";
} elseif ($day = "Thu" || $day = "Fri") {
  echo "We Are Closed";
} else echo "Unknown Day";
?>