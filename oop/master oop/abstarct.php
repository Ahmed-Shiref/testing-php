<?php
/*
    class Abstraction
    - cannot be instantiated [cannot create object from]
    - made for other classes to inherit prop & methods form
    - can have meethods & properities
    - can have abstracted method and not abstracted method 
    - rules to go on
    - force developers to follow your methods
    */

/*
    abstract method
    abstract method can't have implementation
    when you inherit abstract method you should make the visablity of the 
    inherited method like or more than the visablity of abstract method
    */

abstract class MakeDevice
{

    abstract public function testPreformance(); //abstract method cannot have implementation
    abstract public function verifyOwner();
    abstract public function sayWelcome($s);
}
class Iphone extends MakeDevice
{
    public $owner;
    public function testPreformance() {} //should make implementation
    private function verifyOwner() {} //look
    public function sayWelcome($s)
    {
        $this->owner = $s;
        echo "welcome " . $s;
    }
}
// class Ipad extends MakeDevice
// {
//     function testPreformance() {} //should make implementation
//     function verifyOwner() {}
//     function sayWelcome() {}
// }



$iphonego = new Iphone();
$iphonego->sayWelcome("osama");
//$object=new MakeDevice();//can't make object from abstaract class
echo "<pre>";
print_r($iphonego);
echo "</pre>";
