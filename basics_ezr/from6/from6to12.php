<?php

/*
========================
___data types 
-------------------
=type juggling + Automatic type conversion
============================
*/
 /*

echo "<br>";
echo"video (7)";
echo "<br>";
 
echo 1+"2"; // 3
echo "<br>";
echo gettype(1+"2");
echo "<br>";
echo true ;//1
echo "<br>";
echo gettype(true);//boolean
echo "<br>";
echo true + true ;//2
echo "<br>";
echo gettype(true + true);
echo "<br>";
echo 5+ "5 lessons";// 10=>warning
echo "<br>";
echo gettype (5+ "5 lessons");//integr =>warning A non-numeric value 
echo "<br>";
echo 10+15.5;//25.5
echo "<br>";
echo gettype (10+15.5);//double
*/

//////////////////////video 8/////////////////////
/////--------type casting----------///////

/*

echo "<br>";
echo"video (8)";
echo "<br>";

echo 5+ (int)"5 lessons";// 10
echo"<br>";
echo gettype (5+ (int)"5 lessons");//intger
echo"<br>";
echo 10+(int)15.5;//25
echo"<br>";
echo gettype (10+(int)15.5);//int
echo"<br>";
echo gettype(10.5+10.5);//double
echo"<br>";
echo (int)10.5+(int)10.5;//20
echo"<br>";
echo gettype((int)10.5+(int)10.5);//int
echo"<br>";
echo (int)(10.5+10.5);//21
echo"<br>";
echo gettype((int)(10.5+10.5));//int
*/

//////////////////////video 9/////////////////////
/////--------Boolean And Converting To Boolean----------///////

/*

echo "<br>";
echo"video (9)";
echo "<br>";

var_dump((bool)"");
echo"<br>";
var_dump((bool)array());
echo"<br>";
var_dump((bool)[]);
echo"<br>";
var_dump((bool)0);
echo"<br>";
var_dump((bool)"0");
echo"<br>";
var_dump((bool)"elzero");
echo"<br>";
var_dump((bool)array(1));
echo"<br>";
var_dump((bool)[4]);
echo"<br>";
var_dump((bool) -100);
*/

//////////////////////video 10/////////////////////
/////---------String And Escaping---------///////
//===nl2br()
//==============================================


/*
echo "<br>";
echo"video (10)";
echo "<br>";

echo'hallo php';
echo"<br>";
echo "hallo php";
echo"<br>";
echo "hallo 'php'";
echo"<br>";
echo '"hallo" php';
echo"<br>";
echo 'hallo\'php\'';
echo"<br>";
echo "hallo \"php\"";
echo"<br>";
echo "hallo php\\";
echo"<br>";
echo 'hello php on 
multipl lines';
echo"<br>";
echo nl2br("hello php
 on 
multipl lines");
*/

//////////////////////video 11/////////////////////
/////---------heredoc----nowdoc-----///////


/*

echo "<br>";
echo"video (11)";
echo "<br>";

echo"<br>";
$name = "osama";

//heredoc
echo <<<"here"
hallo php 
special characters %^$*#&%';'""''';;'\\
my name is $name
here;


echo '<br>';
//now doc
echo <<<'now'
hallo php 
special characters %^$*#&%';'""''';;'\\\\
my name is $name
now;
echo "<br>";

echo'<ul>';
echo"<li>" . $name . "</li>";
echo"<li>" . $name . "</li>";
echo"<li>" . $name . "</li>";
echo"<li>" . $name . "</li>";
echo'</ul>';


echo <<<"navlinks"
<ul>
<li>  $name </li>
<li>  $name </li>
<li>  $name </li>
<li>  $name </li>
</ul>
navlinks;
*/



//////////////////////video 12/////////////////////
/////------Array with complex tests--------///////
//=Array with key
//=Array without keys
//=Array withone key
//=Array value override
//=------
//=print_r()
//==============================


/*

echo "<br>";
echo"video (12)";
echo "<br>";

echo "<pre>";
print_r([
    0=>"sameh",
    "A"=>"ahmed",
    "k" => "khaled",
    "mahmoud",
    true => "sayed", //override on mohamed
    '1'=> "osama", //override on sayed
    "gamal",
     9 =>"Amera",
    "eman"  //continue after the last biger index (9 >> Amera)
    , "adel"  //continue after the last biger index  ( 10>> eman)
    , false => "asmaa" //override on sameh
    ,8 =>"haytham" 
    ,"omar"  //continue after the last biger index  ( 11>> adel)
    
   , "names" => [
        "a"=>"ahmed", 
        "mohamed",
        "omer",
        "sayed",
        false=>"abdo",
        5=>"amr",
        "khaled"=>[
            "first","second"
                 ]
        
    ]
]);
echo "</pre>";
*/