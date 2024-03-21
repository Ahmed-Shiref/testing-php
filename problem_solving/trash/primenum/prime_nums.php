<?php

/*
// if ($x == 1) {
    //     echo "$x is not prime";
    // } else {
        for ($r = 1; $r < 40; $r++) {
            $count = 0;
            $x = $r;
            echo "the first x = $x<br>";
            echo "count befor for count $count <br>";
            for ($i = $x; $i >= 1; $i--) {
                if ($x % $i == 0) {
                    echo "x%i => $x%$i = " . $x % $i . "<br>";
                    $count += 1;
                }
            }
            if ($count <= 2) echo "x $x prime number <br> count = $count <br><br>";
            elseif ($count > 2) {
                echo "x $x not prime number <br> count = $count <br><br>";
            }
            $count = 0;
            echo "count after for count $count <br>";
        }
        
        */
//}


/////////////////

/*

// if ($x == 1) {
    //     echo "$x is not prime";
    // } else {
        for ($r = 1; $r < 300; $r++) {
            $count = 0;
            $x = $r;
            for ($i = $x; $i >= 1; $i--) {
                if ($x % $i == 0) {
                    $count += 1;
                }
            }
            if ($count <= 2) echo "x $x prime number <br> count = $count <br><br>";
            elseif ($count > 2) {
                echo "x $x not prime number <br> count = $count <br><br>";
            }
        }
        */



// $x = 973;
// $count = 0;
// for ($i = $x; $i >= 1; $i--) {
//     if ($x % $i == 0) {
//         $count += 1;
//     }
// }
// if ($count <= 2) echo "x $x prime number <br> count = $count <br><br>";
// elseif ($count > 2) {
//     echo "x $x not prime number <br> count = $count <br><br>";
// }








/*
for ($r = 1; $r < 300; $r++) {
    
    $count = 0;
    $x = $r;
    if ($x == 1) {
        echo "$x is not prime number <br><br>";
    } else {
        for ($i = $x; $i >= 1; $i--) {
            if ($x % $i == 0) {
                $count += 1;
            }
        }
        if ($count <= 2) {
            echo "x $x prime number <br> count = $count <br><br>";
        } elseif ($count > 2) {
            echo "x $x not prime number <br> count = $count <br><br>";
        }
    }
}
*/

/*
echo "<form action='' method='post'>"    ///myselfffffffffffff
    . "<lable for 'someone'> enter your user name</lable> <br>"
    . "<input type='text' name='someone'>"
    . "<input type='submit' value='submit'>"
    . "</form>";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $x = $_POST['someone'];
} else $someone1 = null;

$count = 0;
if ($x == 1) {
    echo "$x is not prime";
} else {
    for ($i = $x; $i >= 1; $i--) {
        if ($x % $i == 0)
            $count = $count + 1;
    }
    if ($count <= 2) echo "$x prime number <br> count = $count <br><br>";
    elseif ($count > 2) {
        echo "$x not prime number <br> count = $count <br><br>";
    }
}
*/

// done

/*
// Function to check if a number is prime
function IsPrime($n)
{
    // Loop through all numbers from 2 to n-1
    for ($x = 2; $x < $n; $x++)
    {
        // If n is divisible by any number other than 1 and itself,
        // it's not prime, so return 0
        if ($n % $x == 0)
        {
            return 0;
        }
    }
    // If no divisor found, n is prime, so return 1
    return 1;
}

// Call the IsPrime function to check if 3 is prime
$a = IsPrime(3);

// Check the return value and print the result
if ($a == 0)
    echo 'This is not a Prime Number.....' . "\n";
else
    echo 'This is a Prime Number..' . "\n";
*/