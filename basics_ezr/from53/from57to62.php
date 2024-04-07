<?php
/*
    ////////////////////video 58 ///////////
    //string functions
    //pars_str(String[Required],Array[Required])
    //  quotemeta(String[Required])
    //str_pad(String[Required],Length[Required],String[Optional],Pad flag[Optional])
    //STR_PAD_BOTH
    //STR_PAD_LEFT
    //STR_PAD_RIGHT
    //strtr(String[Required],From[Required],To[Required]) || strtr(String[Required],Array[Requierd])
    */
echo "<br>";
echo "video (58)";
echo "<br>";

/*
//pars_str
parse_str("name=Osama&email=ahmed@gmail.com&os=mac", $query);
echo '<pre>';
print_r($query);
echo '<pre>';

echo $query["name"] . "<br>";
echo $query["email"] . "<br>";
echo $query["os"] . "<br>";

echo "Hello [] () * + . <br>";
echo quotemeta("Hello [] () * + . <br>");

//str_pad();
echo str_pad("12", 8, "#", STR_PAD_BOTH) . "<br>"; //###12###
echo str_pad("321", 8, "#", STR_PAD_BOTH) . "<br>"; //##321###
echo str_pad("1313", 8, "#", STR_PAD_LEFT) . "<br>"; //####1313
echo str_pad("15435", 8, "#", STR_PAD_RIGHT) . "<br>"; //15435###
echo str_pad("500432", 8, "#", STR_PAD_BOTH) . "<br>"; //#500432#
echo "<br>";

//strtr
echo strtr("E@zero Web Schoo@", "@", "l") . "<br>"; //Elzero Web School
$translation = ["@" => "l", "#" => "o"];
echo strtr("E@zer# Web Sch##@", $translation) . "<br>"; //Elzero Web School
*/
?>
<?php
////////////////////video 59 ///////////
//string function
//str_replace(Find[Required],Replace with[Required],Data[Required],Replace count[Optional])
//its CaseSensitive
//str_ireplace(Find[Required],Replace with[Required],Data[Required],Replace count[Optional])
// ireplace case insensetive
echo "<br>";
echo "video (59)";
echo "<br>";

/*
//str_replace => CaseSensitive
echo str_replace("@", "o", "Elzer@ Web Sch@@l", $r) . "<br>"; //Elzero Web School
echo "replaces count is $r" . "<br>";
echo str_replace(["@", "#"], "A", "E#zer@ Web Sch@@#",) . "<br>"; //EAzerA Web SchAAA
echo str_replace(["@", "#"], ["o", "l"], "E#zer@ Web Sch@@#",) . "<br>"; //Elzero Web School

//////////////// It take array
$numbers = ["One", "Two", "Three", "One", "One"];
echo '<pre>';
print_r(str_replace("One", 1, ["One", "Two", "Three", "One", "One"]));
echo '</pre>';

echo '<pre>';
print_r(str_replace("One", 1, $numbers));
echo '</pre>';

echo '<pre>';
print_r(str_replace(["One", "Two"], [1, 2], $numbers));
echo '</pre>';

echo '<pre>';
print_r(str_replace(["One", "Two", "Three"], [1, 2], $numbers)); //will replace three by null
echo '</pre>';


/////////////Case Sensitive  
echo '<pre>';
print_r(str_replace(["one", "two"], [1, 2], $numbers));
echo '</pre>';
/////////Case InSensitive
echo '<pre>';
print_r(str_ireplace(["one", "two"], [1, 2], $numbers));
echo '</pre>';

*/
?>

<?php
////////////////////video 60 ///////////
/*
//String function
//substr_replace(String[Required], Replace With Or Insert[Required],Start[required],Length[$])
//$ Positive Number => Length Of String To Be Replaced
//$ Negative Number => Characters Left At The End After Replacement
//$ 0               => Insert Instead Of Replace
*/

echo "<br>";
echo "video (60)";
echo "<br>";

/*

echo substr_replace("OneTwo", 1, 0); //1
echo "<br>";
echo substr_replace("OneTwo", 1, 3); //One1
echo "<br>";
echo substr_replace("OneTwo", 1, 5); //OneTw1 
echo "<br>";
echo substr_replace("OneTwo", 1, -1); //OneTw1 
echo "<br>";



echo substr_replace("OneTwo", 2, 2); //On2 
echo "<br>";
//length 
echo substr_replace("OneTwo", 2, 1, 4); //Oo 
echo "<br>";
echo substr_replace("Elzero_Web_School", "A", 7, 3); //Elzero_A_School 
echo "<br>";
echo substr_replace("Elzero_Web_School", "A", 7, -1); //Elzero_Al let one character from the end
echo "<br>";
echo substr_replace("Elzero_Web_School", "A", 7, -2); //Elzero_Aol let two character from the end
echo "<br>";
echo substr_replace("Elzero_Web_School", "A", 7, -3); //Elzero_Aool let three character from the end
echo "<br>";
echo substr_replace("Elzero_Web_School", "A", 7, -9); //Elzero_Aeb_School let nine character from the end
echo "<br>";
echo substr_replace("Elzero_Web_School", "A", 7, -10); //Elzero_AWeb_School let ten character from the end
echo "<br>";

//  0 => Insert Instead Of Replace WE BUT ZERO IN THE Length to make insert without replace

echo substr_replace("Elzero_Web_School", "@", 1, 0); //E@lzero_A_School 

echo substr_replace("OneTwo", 1, 0); //1

echo "<pre>";
print_r(substr_replace(["OneTwo", "ThreeFour"], "%", 0));
echo "<br>";
print_r(substr_replace(["OneTwo", "ThreeFour"], "%", 4, 1));
echo "<pre>";
*/
?>

<?php
////////////////////video 61 ///////////
/*
//String functions
//wordwrap(String[Required],width[Optional = 75],Break_Charp[Optinal = "\n"], Cut_long[Optional= False])
//ord(String[Required])
//chr(Int[Required])
//similar_text(String_one[Required],String_Two[Required],Percent[Optional])
//Returns The Number of Matching Characters
*/

echo "<br>";
echo "video (61)";
echo "<br>";

/*
//wordwrap
$str = "Welcome To Elzero Web School Website Very_Very_Very_long";
echo strlen($str) . "<br>";
echo wordwrap($str, 8, "<br>") . "<br>";
echo wordwrap($str, 8, "<br>", true) . "<br>";
echo "<br>";

//ord CONVERT TO ASCII CODE
echo ord("A") . "<br>"; //67
echo ord("a") . "<br>"; //97
//chr CONVERT from ASCII CODE code to character
echo chr(97); //a
echo "<br>";


echo similar_text("Elz#ero", "Elz_eroo") . "<br>"; //6
echo "<br>";
echo similar_text("Elzero", "Elzero", $perc) . "<br>"; //100%similer
echo $perc;
echo "<br>";
similar_text("Elz#ero", "Elz_eroo", $perc) . "<br>"; //80%similer
echo $perc;
echo "<br>";
*/
?>

<?php

////////////////////video 62 ///////////
/*
//String Functions 
//strstr(Srting[Required],Search[Required],Before_Search[Optional]=False)
//=> Alias [strchr]
//Case Sensitive
//stristr(Srting[Required],Search[Required],Before_Search[Optional]=False)
//Case Insensitive
//number_format(Number[Required],Decimal_String[Optional],separator[Optional])
*/

/*
echo "<br>";
echo "video (62)";
echo "<br>";
//the defualt Befor_Search is (false)
echo strstr("elzero web", "w") . "<br>"; //web
echo strstr("elzero web", "z") . "<br>"; //zero web
//true make it print the string befor character
echo strstr("elzero web", "w", true) . "<br>"; //elzero 
echo strlen(strstr("elzero web", "w", true)) . "<br>"; //7

echo strstr("elzero web", "w") . "<br>"; //web
var_dump(strstr("elzero web", "w")) . "<br>"; //web
echo "<br>";
echo "<br>";
echo "<br>";

//case insensitive
echo stristr("Elzero Web", "w") . "<br>"; //web
var_dump(stristr("Elzero Web", "w")) . "<br>"; //web
echo "<br>";

//echo 10_000_000;

echo number_format(1000000.5157415);
echo "<br>";
echo number_format(1000000.5157415, 3); //1,000,000.516
echo "<br>";
echo number_format(1000000.5157415, 3, "@"); //1,000,000@516
echo "<br>";
echo number_format(1000000.5157415, 3, "@", "#"); //1#000#000@516

echo "<br>";
*/

?>