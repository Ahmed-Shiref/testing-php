<?php
/* magic methods
- method with special name start with double underscore [ __ ]

get:
-called when getting a property not accessible or not found 
-accept one parameter [$prop]

set:
-called when setting a property not accessible or not found 
-accept two parameter [$prop,$value]
*/

class phone
{
    public $name;
    public $ram;
    public function __get($prop)
    {
        echo "the property [ " . $prop . " ] not found or not accessible";
    }
    public function __set($prop, $value)
    {
        echo "the property [ " . $prop . " ] not found or not accessible";
    }
}
$obj = new phone();
$obj->go; // here we do get and i will have a message "the property not found or"
$obj->color = 12;
echo "<pre>";
print_r($obj);
echo "</pre>";
