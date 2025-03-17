<?php
/*
[ Static Keyword ]
Static Properties [Methods are Used to Access Properties/Methods in a Global Scope
Declaring class Properties or Methods as Static
Makes Them Accessible Without Needing an Instantiation of the Class.
1
Because Static Methods are Callable Without an Instance of the Object Created,
the Pseudo-Variable $this is not Available Inside the Method Declared as Static.
A Property Declared as Static Cannot be Accessed
With an Instantiated Class Object (Though a Static Method Can).
"One of the Major Benefits to Using Static Properties
is That They Keep Their Stored Values For The Duration of The Script.'
 */
class device
{
    public static $name = "osama";
    public $ram = "2GB";
    public static function sayhello()
    {
        return "hello";
    }
}

$tele = new device();
echo $tele->$name; // object can't use static properity put static method can
echo device::$name; //it will appear if the name was static
echo device::sayhello(); //it will appear if the method was static
// $this-> will not work in this way because we dealing with class not object       