<?php
/*
auto load classes
*/

spl_autoload_register(function ($class) {
    require "classes/" . $class . ".class.php";
});
$var = new testing1();
print_r($var);