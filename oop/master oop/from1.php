<?php

/* 
clase & object 
class is a blueprint that create object from 
object is a member in the main application
class has properties and methods
variable inside class = [property]
variable outside class = [variable]
function inside class = [method]
function outside class = [function]


[class]= class Keyword
[public , private , protected]= Visiblity Makers
[->] = object operator
[new] = new object key word
[this] = Pseudo Variable [Refer To Object Properties]
[::] = Scope Resolution Operator [Paamayim Nekudotayim] = Double Colon

Apple 
- apple blueprint design = class 
- object = iphones that chaina made 
- application = apple store

web application registiration
- class = code to add new member
- object = the members 
- application = web application registration 

blog system
- class = code to add new post , article , news , information
- object = the post , article , news , information
- application = blog system

/*
self vs $this

self:
-Refer to Current Class
-Access Static Members
-Not use ($) because it's not represent variable but present class constant

$this
-Refer to current Object  
-Access non Static Members
- use ($) Because It Represent a Variable 

*/
//////////////////video 4////////////////////////
//////////////////video 5////////////////////////
//////////// video 6 class properties /////////////
////////// Pseudo Variable//////////////
/////////// video 9 Constants //////////
/////////// video 11 method with arguments ///////

class appledevice
{
    //properties
    public $ram = "8GB";
    public $inch = "5 Inch";
    public $space = "16GB";
    public $color = "green";
    public $ownerName;

    //Constants
    const OWNERCAHR = 5;

    //methods
    public function changeSpac($ra, $in, $sp, $co = "red")
    {
        $this->ram = $ra;
        $this->inch = $in;
        $this->space = $sp;
        $this->color = $co;
    }

    public function setOwnerName()
    {
        if (strlen($this->ownerName) < self::OWNERCAHR) //CALL CONSTANT
        {
            echo " Owner Name Can't be less than " . self::OWNERCAHR . " chars<br>";
        } else {
            echo "your name has been seted<br>";
        }
    }
}


$iphone6plus = new appledevice();
$iphone6plus->ram = "8GB";
$iphone6plus->inch = "5 Inch";
$iphone6plus->space = "16GB";
$iphone6plus->color = "Gray";
$iphone6plus->ownerName = "os";

echo $iphone6plus::OWNERCAHR; //way to echo constant
echo appledevice::OWNERCAHR; //way to echo constant

$iphone6plus->changeSpac("64GB", "432inch", "23gb"); //the $ram in this object will be changed to 64GB



echo "<pre>";
var_dump($iphone6plus); //object(appledevice)#1 (4) {}
echo "</pre>";


//______________________________________________________________

$iphone = new appledevice();
echo "<br>";
var_dump(get_class_methods($iphone)); // it's view the public methods in class
echo "<br>";
echo "<pre>";
var_dump($iphone); //it will the the default value of properites
echo "</pre>";
