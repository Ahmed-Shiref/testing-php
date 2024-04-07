<!-------------------------------first requirement---------------------------------->
<?PHP

echo (int) 15.2 + (int) 14.7 + (10.5 + 10.5); // 50
echo "<br>";
echo gettype((int) 15.2 + (int) 14.7 + (int) (10.5 + 10.5)); // Integer

?>

<!-------------------------------second requirement---------------------------------->
<?php
echo "<br>";
// Method One
echo gettype(100);
echo "<br>";
// Method Two
var_dump(100);
echo "<br>";
// Method Three => Optional
echo get_debug_type(100);
echo "<br>";
?>

<!-------------------------------third requirement---------------------------------->

<?php
echo "<br>";
// Hello "Elzero" \\ """ We Love "$$PHP"
//--------------------
// first way
echo 'Hello "Elzero" \\\ """ We Love "$$PHP"';
echo "<br>";
//second way heredoc
echo <<<"here"
Hello "Elzero" \\\ """ We Love "$\$PHP"
here;
echo "<br>";
//third way nowdoc
echo <<<'now'
Hello "Elzero" \\ """ We Love "$$PHP"
now;
echo "<br>";
?>

<!-------------------------------Fourth requirement---------------------------------->
<?php
echo "<br>";
// first way
echo nl2br("We 
 Love 
  Elzero 
   Web 
    School");
echo "<br>";
//second way
echo nl2br("We \n Love \n Elzero \n Web \n School");
echo "<br>";
?>
<!-------------------------------Fifth requirement---------------------------------->
<?php
echo "<br>";
echo nl2br('
Hello " ' . "'Elzero'" . ' "
We Love $Programming$
Languages Specially "PHP"'
);
/*
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
*/
echo '<br>';
?>
<!-------------------------------sixth requirement---------------------------------->
<?php
echo '<br>';

$something = "Programming";

echo <<<code
Hello \PHP\
We Love $something
code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
//Hello \PHP\ We Love Programming
echo "<br>";
?>

<!-------------------------------Seventh requirement---------------------------------->
<?php
echo "<br>";

echo (bool) "Hello PHP";
echo '<br>';
echo gettype((int) "Hello PHP");
echo "<br>";
?>

<!-------------------------------eighth  requirement---------------------------------->
<?php
echo "<br>";
echo "<pre>";
print_r(
    [
        "FrontEnd" => [
            "html",
            "CSS",
            "JS" => [
                "Vuejs" => ["2" => "v2", "3" => "v3"]
                ,
                "Reactjs"
                ,
                "Svelte"
            ]
        ]

        ,
        "BackEnd" => [
            "PHP",
            "MySQL",
            "Security"
        ]
        ,
        "Git",
        "Github"
        ,
        "Testing" => ["Unit Testing", "End To End", "Integration"]

    ]

);
echo "</pre>";

?>