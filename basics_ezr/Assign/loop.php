<?php
/*
$index = 10;
for (; $index > 0; $index--) {
    echo $index . "<br>";
}
////////////////////////////////////////////
echo "<br>";
$index = 0;
for (; $index < 20;) {
    $index += 2;
    echo $index . "<br>";
}

echo "<br>";
$index = 0;
while ($index < 20) {
    $index += 2;
    echo $index . "<br>";
}

$index = 0;
do {
    $index += 2;
    echo $index . "<br>";
} while ($index < 20);
*/
/////////////////////////////////////
/*
$num = 2;
while ($num < 520) {
    if ($num === 2) {
        $num =$num/$num;
    } else {
        echo $num . "<br>";
        $num = $num * 2 + 2;
    }
}*/
/////////////////////////////////////////
/*
$start = 10;
$end = 0; 
$stop = 3;
for (; $start >= 3; $start--) {
    if ($start == 10) {
        echo  $start . "<br>";
    } else {
        echo $end . $start . "<br>";
    }
}*/

/////////////////////////////////////
/*
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
for (; $start <= 4; $start++) {
    if ($start == 1 || $start == 0) continue;
    echo $start . "<br>";
}*/

/*
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

foreach ($mix as $num) {
    if ((gettype($num)) <> "integer" || $num === 1)
        continue;
    echo $num . "<br>";
}*/
/*
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
for ($i = 0; $i < count($mix); $i++) {
    if (gettype($mix[$i]) === "integer" && $mix[$i] <> 1) {

        echo $mix[$i] . "<br>";
    }
}*/
//////////////////////////////

/*
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
foreach ($money as $name => $cost) {
    echo  "The Name Is $name And I Need $cost Pound From Him" . "<br>";
}*/
/////////////////////

/*
$mix = [1, 2, "A", "B", "C", 3, 4];
$Letters_Ignored = 0;
$Numbers_Printed = 0;
foreach ($mix as $numletter) {
    if (gettype($numletter) === "integer") {
        $Numbers_Printed++;
        echo $numletter . "<br>";
    }
    if (gettype($numletter) === "string") {
        $Letters_Ignored++;
    }
}
echo <<<"here"
"$Numbers_Printed Numbers_Printed"<br>
here;
echo <<<"here"
"$Letters_Ignored Letters Ignored"<br>
here;
*/

////////////////////////////////
/*
$nums = [1, 13, 12, 20, 51, 17, 30];
foreach ($nums as $number) {
    if ($number % 2 == 0) {
        $number = $number / 2;
        echo $number . "<br>";
    }
}
*/
////////////////////
/*
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for ($i = $nums[$help_num]; $i < $help_num; $i++) {

    echo $names[$i] . "<br>";
}*/
////////////////////////////////

/*
$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach ($nums as $num) {
    echo "$num + $nums[$help_num] = " . $num + $nums[$help_num] . "<br>";
    $help_num--;
}
*/
/*
for ($i = 1; $i <= 10; $i++) {
    if ($i < 10) {
        echo $i . "-";
    }  else echo $i;
} $p = 0;
for ($i = 1; $i <= 30; $i++) {
    echo $i . "<br>";

    $p += $i;
}
echo $p;

for ($i = 5; $i >= 1; $i--) {
    echo "<br>";
    for ($s = $i; $s <= 5; $s++) {
        echo "*";
    }
*/
/*
for ($i = 5; $i >= 1; $i--) {
    echo "<br>";
    for ($s = $i; $s <= 5; $s++) {
        echo "*";
    }
}
for ($i = 10; $i >= 1; $i--) {
    echo "<br>";
    //for ($s = $i; $s <= 5; $s++) {
    //    echo "*";
    //}

    for ($s = $i; $s > 5; $s--) {
        echo "*";
    }
}*/