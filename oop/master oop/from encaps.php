<?php

class appledevice
{
    //properties
    public $ram = "8GB";
    public $inch = "5 Inch";
    public $space = "16GB";
    public $color = "green";
    private $lock;

    //methods
    public function changelock($lo)
    {
        $this->lock = sha1($lo);
    }

    public function changeSpac($ra, $in, $sp, $co = "red")
    {
        $this->ram = $ra;
        $this->inch = $in;
        $this->space = $sp;
        $this->color = $co;
    }
}


$iphone6plus = new appledevice();
$iphone6plus->changelock("53");
$iphone6plus->ram = "8GB";
$iphone6plus->inch = "5 Inch";
$iphone6plus->space = "16GB";
$iphone6plus->color = "Gray";
// $iphone6plus->lock = "1234";//can't access private properity
//echo $iphone6plus->lock;


echo "<pre>";
var_dump($iphone6plus);
echo "</pre>";
