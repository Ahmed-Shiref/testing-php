<?php
/////////////////video 53 ///////////
/* 
///string
//access elements
///string is array of characters
//Access Elements by index "zero based indexing"
//Negative index are allowed

//update elements
///update current elements
///add new elements

//search
//single-byte and multi-byte
*/

echo "<br>";
echo "video (53)";
echo "<br>";
/*
$str = "elzero";
echo "first letter is $str[0]<br>";
echo "4th letter is $str[3]<br>";
echo "number of letter " . strlen($str) . "<br>";
echo "the last number is " . $str[strlen($str) - 1] . "<br>";
echo "the last number is " . $str[-1] . "<br>";

echo $str . "<br>";
$str[0] = "a";

echo $str . "<br>";
$str[6] = "a"; //return to the first letter

echo $str . "<br>";
*/
?>



<?php
////////////////////video 54 ///////////
///////some built in functions
/*
// String functions
// lcfirst(string[required])
// ucfirst(string[required])
// Strtolower(string[required])
// Strtoupper(string[required])
// ucwords(string[required], delimiters[Optional])
// Str_repeat(String[Required],Count[Rrquired])
*/

echo "<br>";
echo "video (54)";
echo "<br>";
/*
echo lcfirst("Elzero Web School") .   "<br>"; //elzero Web School  first letter small
echo ucfirst("elzero web school") .   "<br>"; //Elzero web school first letter capital
echo strtolower("ELZERO WEB SCHOOL") . "<br>"; //elzero web school string to lower
echo strtoupper("elzero web school") . "<br>"; //ELZERO WEB SCHOOL string to upper
echo ucwords("elzero web school") .    "<br>"; //Elzero Web School first letters of each word capital
echo ucwords("elzero web|school", "|") .    "<br>"; //Elzero web|School
echo str_repeat("elzero", 3) . "<br>"; //repeat string number of times
*/
?>




<?php
////////////////////video 55 ///////////
/*
//string functions
//implode(Seoarator[Optional],Array[Required])=> join() Is Alias
//explode(Seoarator[Required],String[Required],Limit[Optional])
//str_shuffle(string[Required])
//strrev(String[Required])
//trim(String[Required],Charslist[Optional])
//ltrim(string[Required],Charslist[Optional])
//rtirm(string[Required],Charslist[Optional])
//Space ""
//Tab \t
//New Line \n
//Carriage Return \r
//Vertical Tab "\x0B"
//Null "\0"
*/

echo "<br>";
echo "video (55)";
echo "<br>";
/*
//implode  join elements of an array into a single string.
$friends = ["Ahmed", "Osama", "Ali", "Salem"];
echo implode(" ", $friends) . "<br>"; //Ahmed Osama Ali Salem
echo implode(", ", $friends) . "<br>"; //Ahmed, Osama, Ali, Salem
echo implode("@@", $friends) . "<br>"; //Ahmed@@Osama@@Ali@@Salem
echo implode($friends) . "<br>";//AhmedOsamaAliSalem
echo "<br><br>";

//explode is used to split a string into an array
$str = "elzero web school is cool";
echo "<pre>";
print_r(explode(" ", $str));
echo "<br>";
print_r(explode(" ", $str, 3));
echo "<br>";
print_r(explode(" ", $str, -2)); //remove the last two elements
echo "<br>";
echo "</pre>";
echo "<br>";

//str_shuffle randomly shuffles the characters of a string
echo str_shuffle("elzero") . "<br>";
//strrev  reverses a string
echo strrev("elzero") . "<br>"; //orezle

//trim remove spaces
echo "   elzero   " . "<br>";
echo trim("   elzero   ") . "<br>";

echo strlen("   elzero   ") . "<br>"; //12 space is character
echo strlen(trim("   elzero   ")) . "<br>"; //6 tirm remove characters

echo trim("#elzero###", "#@") . "<br>"; //elzero it remove every #
echo trim("#@@elzero@@@###", "#@") . "<br>"; //elzero
echo trim("#@@elzero@@@###", "@") . "<br>"; //#@@elzero@@@### will not remove cause there is not @ On the sides 

echo rtrim("#@@elzero@@@###", "@#") . "<br>"; //#@@elzero
echo ltrim("#@@elzero@@@###", "@#") . "<br>"; //elzero@@@###
*/
?>




<?php
////////////////////video 56 ///////////
//string function
//chunk_split(string[Required],Length[Optional],End[Optional])
//strlen(String[Required])
//str_split(string[Required],Length[Optional])
//strip_tags(string[Required],Allowed[optional])
//nl2br(string[Required],XHTML[Optional])

echo "<br>";
echo "video (56)";
echo "<br>";
/*
 //chank_split
 echo chunk_split("elzero web school", 3, "@"); //elz@ero@ we@b s@cho@ol@
 echo "<br>";
 
 //str_split split a string into an array of characters.
 echo "<pre>";
 print_r(str_split("elzero"));
 echo "</pre>";
 
 echo "<pre>";
 print_r(str_split("elzero", 2));
 echo "</pre>";
 echo "<br>";
 
 //strip_tags remove the tags
 echo (strip_tags("<h3>Hello <b?>Elzero</b></h3>"));
echo "<h3>Hello <b>Elzero</b></h3>";
echo (strip_tags("<h3>Hello <b?>Elzero</b></h3>", "<h3>")); //won't delete h3 tag
    echo "<br>";

    echo nl2br("elzero\nweb\nschool"); //defult true
    echo "<br>";
    echo nl2br("elzero\nweb\nschool", false);
    */

    ?>

    <?php
    ////////////////////video 57 ///////////
    /*
//string functions 
//strpos(string[Required],Value[Required],start position[optional])Case Sensitive
//strrpos(string[Required],Value[Required],start position[optional])Case Sensitive
//stripos(string[Required],Value[Required],start position[optional])Case inSensitive
//strripos(string[Required],Value[Required],start position[optional]) Case inSensitive
//substr_count(string[Required],Value[Required],start position[optional], Length[Optional]) case sensitive
*/

    echo "<br>";
    echo "video (57)";
    echo "<br>";
    /*
    //strpos tell you the last index char finded
    var_dump(strpos("Hello Hello", "H")); //0
    echo "<br>";
    var_dump(strpos("Hello Hello", "H", 3)); //6
    echo "<br>";
    var_dump(strpos("Hello Hello", "H", 6)); //6
    echo "<br>";
    var_dump(strpos("Hello Hello", "h")); //false
    echo "<br>";
    var_dump(strpos("Hello Hello", "H", -2)); //false
    echo "<br>";
    var_dump(strpos("Hello Hello", "H", -5)); //6
    echo "<br>";
    var_dump(strpos("Hello Hello", "H", -11)); //0
    echo "<br>";

    //strrpos tell you the last index char finded
    var_dump(strrpos("Hello Hello", "H",)); //6
    echo "<br>";
    var_dump(strrpos("Hello Hello", "H", 5)); //6
    echo "<br>";
    var_dump(strrpos("Hello Hello", "H", -5)); //6
    echo "<br>";
    var_dump(strrpos("Hello Hello", "H", -11)); //0
    echo "<br>";

    //stripos like strpos but case insensitive
    var_dump(stripos("Hello Hello", "h")); //0
    echo "<br>";
    //strripos like strrpos but case insensitive
    var_dump(strripos("Hello Hello", "h")); //6
    echo "<br>";

    //substr_count
    var_dump(substr_count("Hello Hello", "he")); //2
    echo "<br>";
    var_dump(substr_count("Hello Hello", "he", 1)); //1
    echo "<br>";
    var_dump(substr_count("Hello Hello", "he", 1, 7)); //1
    echo "<br>";
    var_dump(substr_count("Hello Hello", "he", 1, 6)); //0
    echo "<br>";
    var_dump(substr_count("abcdabcd", "abcd")); //2 
    echo "<br>";
    var_dump(substr_count("abcdabcda", "abcda")); //1 overlapp string 
    echo "<br>";
    */
    ?>