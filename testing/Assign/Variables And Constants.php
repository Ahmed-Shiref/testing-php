<!--------------------first requirement------------------->

<?php $name = "Elzero Courses"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To
        <?php echo $name; ?>
    </title>
</head>

<body>
    <h1>
        <?php echo $name; ?>
    </h1>
    <p>Here In
        <?php echo $name; ?> We Provide Front-End And Back-End Courses
    </p>
    <hr>
    <div>
        <?php echo $name; ?> Is The What You Need.
    </div>
    <footer>All Right Reserved To
        <?php echo $name; ?>
    </footer>
</body>

</html>


<!--------------------second requirement------------------->
<?php
$name = "elzero";
$$name = "Web";

echo $$name;
echo "<br>";
echo $elzero;
echo "<br>";
echo "$elzero";
echo "<br>";
echo "${$name}";
echo "<br>";
echo "" . $$name;
echo "<br>";

?>
<!--------------------third requirement------------------->
<?php
$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100
echo "<br>";

?>
<!--------------------Fourth requirement------------------->
<?php
echo ("<pre>");
print_r($_SERVER["DOCUMENT_ROOT"]);
echo "<br>";
echo ($_SERVER["SERVER_NAME"]);
echo "<br>";
echo ($_SERVER["OPENSSL_CONF"]);
echo "<br>";
print_r($_SERVER["SystemRoot"]);
echo ("</pre>");
?>
<!--------------------Fifth requirement------------------->
<?php
/* // Reserved Words
catch, class, clone, const,default,
  die, do, echo, else, elseif, empty
*/
?>
<!--------------------sixth requirement------------------->
<?php
echo (__LINE__);
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
?>