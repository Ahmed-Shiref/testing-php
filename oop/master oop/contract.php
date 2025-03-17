<?php
/*
magic methods
- method with special name start with double underscore [__]

construct:
--- clled when object is created 
--- can be inherited

destruct:
--- called when object is destroyed
*/

class iphone
{
    public $name;
    public $ram;
    public function __construct($na, $ra)
    {
        $this->name = $na;
        $this->ram = $ra;
        echo 'hello' . $na . 'your device has' . $ra . 'ram';
    }
}

$phone = new iphone("osama", "2GB");
echo "<pre>";
print_r($phone);
echo "</pre>";
