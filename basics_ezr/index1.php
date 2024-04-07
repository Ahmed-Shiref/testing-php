<?php
/*
$e = 1;
for ($i = 15; $i >= 1; $i--) {
    for ($s = $i; $s >= 1; $s--) {
        $e *= $s;
    }
    echo $e . "<br>";
    $e = 1;
}
*/

/*
$e = 1;
for ($i = 1; $i <= 15; $i++) {
    for ($s = $i; $s >= 1; $s--) {
        $e *= $s;
    }
    echo $e . "<br>";
    $e = 1;
}
*/
/*
for ($i = 1; $i <= 99; $i++) {
    if ($i < 10) {
        echo 0 . $i . "<br>";
    } else echo $i . "<br>";
}*/

/*
$array = str_split($word);
$i = 786867;
$arri = str_split($i);
//echo $array[1];
echo "<pre>";
print_r($array) . "<br>";
print_r($arri);
echo "</pre>";
*/

/*//how many r's 
$word = "w3resource";
// Now $array contains each character of the string as an element
$count = 0;
foreach (str_split($word) as $wordarray) {
    if ($wordarray == "r") {
        $count++;
    }
}
echo $count;
*/

/*
echo '<table cellpadding="3px" cellspacing="0px" border="1">';
for ($i = 1; $i <= 6; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 5; $j++) {
        echo '<td>';
        echo " $i + $j= " . $i + $j;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
*/
/*//chess board 
echo '<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">';
for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        $total = $col + $row;
        if ($total % 2 == 0) {
            echo '<td width="30px" height="30px" bgcolor="#FFFFFF"></td>'; // White cell
        } else {
            echo '<td width="30px" height="30px" bgcolor="#000000"></td>'; //black cell
        }
    }
    echo "</tr>";
}
echo '</table>';
*/
/* //table from zero to 99
$num = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
echo '<table width="222px" cellspacing="0px" cellpadding="0px" border="1px">';
for ($i = 0; $i <= 9; $i++) {
    echo "<tr>";
    for ($s = 0; $s <= 9; $s++) {
        $q = $num[$i];
        echo "<td>";
        if ($q === 0) {
            echo  $s;
        } else echo $q . $s;
        echo "</td>";
    }
    echo "</tr>";
}
echo '</table>';
*/
/*
echo '<table width="222px" cellspacing="0px" cellpadding="0px" border="1px">';
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($s = 1; $s <= 10; $s++) {
        echo "<td>";
        // $q = $num[$i];
        echo $s * $i;
        echo "</td>";
    }
}
echo "</tr>";
echo '</table>';
*/

/*
for ($i = 1; $i <= 10000; $i++) {

    if ($i % 3 === 0 || $i % 5 === 0) {
        if ($i % 5 === 0 && $i % 3 === 0) {
            echo $i . '- ' . "يقبل القسمه علي الخمسه و التلاته<br><br>";
        } elseif ($i % 3 === 0) {
            echo $i . '- ' . " يقبل القسمه علي التلاته فقط<br><br>";
        } else echo $i . '- ' . "يقبل القسمه علي خمسه فقط<br><br>";
    } else echo $i . '- ' . "لا يقبل القسمه علي تلاته او خمسه<br><br>";
}*/

/*
for ($i = 1; $i <= 15; $i++) {

    if ($i <= 1) {
        echo $i;
        echo "<br>";
    } elseif ($i <= 3) {
        echo $i;
        echo "<br>";
    } elseif ($i <= 6) {
        echo $i;
        echo "<br>";
    } elseif ($i <= 10) {
        echo $i;
        echo "<br>";
    } elseif ($i <= 15) {
        echo $i;
        echo "<br>";
    }
}
*/
/*
for ($i = 1; $i <= 5; $i++) {

    for ($s = 1; $s <= 15; $s++) {
        echo $s;
        if ($i == $s)

            break;
    }
    echo "<br>";
}
*/

/*
function generateFloydsTriangle($n)
{
    $num = 1;
    for ($row = 1; $row <= $n; $row++) {
        for ($col = 1; $col <= $row; $col++) {
            echo $num . " ";
            $num++;
        }
        echo "<br>";
    }
}

// Displaying first 5 lines of Floyd's triangle
echo "First 5 lines of Floyd's triangle:<br>";
generateFloydsTriangle(5);

// Displaying first 11 lines of Floyd's triangle
echo "<br>First 11 lines of Floyd's triangle:<br>";
generateFloydsTriangle(11);
*/


// function sum()
// {
//     echo 73;
// }
// echo sum(10, 20) . '<br>'; // 30
// echo sum(10, 20, 30) . '<br>'; // 60
/*
function sum1()
{
    $total = 0;
    $numbers = func_get_args();
    for ($i = 1; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }
    return $total;
}
echo sum1(525, 25, 62, 345, 6, 46.42, 54.5, 626);
*/