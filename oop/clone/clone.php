<?php
/* 
magic method clone & clone keyword:
-typical copy of object in php works by reference.
means both (main and copied ) object will be interlinked
*/
class person
{
    public $name;
    public $email;
    public function __construct($n, $e)
    {
        $this->name = $n;
        $this->email = $e;
    }
}
$main = new person("osama", "o@gamil.com");
$copy = clone $main; //Object cloning
// $copy = $main; //copy by reference
$main->name = "sayed"; //if copy by reference the two names equal sayed
echo "<pre>";
print_r($main);
print_r($copy);
echo "</pre>";
