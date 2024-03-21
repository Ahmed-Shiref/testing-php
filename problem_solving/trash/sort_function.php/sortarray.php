<?php

////////////////////////main func

// function array_sort(array $so)
// {
//     $sortarr = [];
//     //for($s=count($so);$s<count($so);$s++)


//     for ($i = count($so) - 1; $i >= 0; $i--) {

//         if (gettype($so[$i]) == "string") {
//             for ($d = 0; $d < count($so) - 1; $d++) {
//                 $sortarr[$d] = $so[$i];
//                 if ($sortarr[$d] == $so[$i]) {
//                     break;
//                 }
//             }
//         } elseif (gettype($so[$i]) == "integer") {
//             for ($in = 0; $i < count($so) - 1; $in++) {
//                 $sortarr[$in] = $so[$i];
//                 if ($sortarr[$in] == $so[$i]) {
//                     break;
//                 }
//             }
//         }
//     }
//     return $sortarr;
// }


// $so = array(51, 14, 1, 21, 'hj', "re");
// echo "<pre>";
// echo "sort array <br>";
// print_r(array_sort($so));
// print_r($so);
// echo "</pre>";
// //echo count($so);




//================================================




function array_sort(array $so)
{
    $d = 0;
    $sortarr = [];
    //for($s=count($so);$s<count($so);$s++)


    // for ($i = count($so) - 1; $i >= 0; $i--) {
    for ($i = 0; $i < count($so); $i++) {

        //  if (gettype($so[$i]) == "string") {
        echo "|$i|";
        for (; $d < count($so); $d++) {
            $sortarr[$d] = $so[$i];
            //         if ($sortarr[$d] == $so[$i]) {
            //         $d++;
            // continue;
            //       }
        }
        // } else {
        // $d++;
        // break;
        // }

        // elseif (gettype($so[$i]) == "integer") {
        //     for ($in = 0; $i < count($so) - 1; $in++) {
        //         $sortarr[$in] = $so[$i];
        //         if ($sortarr[$in] == $so[$i]) {
        //         }
        //     }
        // }
    }
    return $sortarr;
}


// $so = [51, 14, 1, 21, "hj", "re"];
// echo "<pre>";
// echo "sort array <br>";
// echo "<br>";
// print_r(array_sort($so));
// echo "<br>";
// echo "<br>";
// print_r($so);
// echo "</pre>";
// //echo count($so);
















// function array_sort(array $so)
// {

//     $sortarr = [];
//     for ($i = 0; $i < count($so); $i++) {

//         for ($d = 0; $d < count($so); $d++) {
//             $sortarr[$d] = $so[$i];
//         }
//     }
//     return $sortarr;
// }
// $so = [51, 14, 1, 21, "hj", "re"];
// print_r(array_sort($so));


function array_sortt(array $so)
{
    $n = count($so);
    // Bubble sort
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Print the array at each iteration
            //            echo "Array at iteration ($i, $j): ";
            //print_r($so);
            echo "\n";
        }
    }
    return $so;
}

$so = [51, 14, 1, 21, "hj", "re"];
$sorted_array = array_sortt($so);

echo "<pre>";
print_r($sorted_array);
echo "<br>";
print_r($so);
echo "</pre>";






// function array_sort(array $so)
// {
//     $sortarr = [];


//     for ($i = count($so) - 1; $i >= 0; $i--) {

//         if (gettype($so[$i]) == "string") {
//             for ($d = 0; $d < count($so) - 1; $d++) {
//                 $sortarr[$d] = $so[$i];
//                 if ($sortarr[$d] == $so[$i]) {
//                     break;
//                 }
//             }
//         }
//     }
//     return $sortarr;
// }






function sort_array_descending(array $arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Swap $arr[$j] and $arr[$j+1]
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// Example usage



$arr = [51, 14, 1, 21, 'hj', "re"];
$sortedArray = sort_array_descending($arr);
print_r($sortedArray);
