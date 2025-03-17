<?php
/*
Magic Methods
- Method With Special Name Start With Double Underscore [__]
Magic Method Clone & Clone Keyword:
Typical Copy Of Object In Php Works By Reference.
Means Both ( Main And Copied ) Object Will Be Interlinked.
The clone operation creates a so-called shallow copy of the original instance,
which means that it constructs a new object with all fields duplicated
The above technique works with a class having data members that are of intrinsic type i.e. inty
boolean, string, float, etc..
However,
//  "this technique will not work with a class that has a data
// member which is an object of another class". 
In such a scenario, the cloned object continues to share
the reference of the data member object of the class that was cloned.
Magic Method Clone Executes When Object Cloning Is Performed.
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
    public function __clone() //it will help us when we have 
    //object in this class from another class

    {
        $this->name = clone $this->name;
    }
}
$main = new person("osama", "o@gamil.com");
$copy = clone $main; //Object cloning
$main->name = "sayed";
echo "<pre>";
print_r($main);
print_r($copy);
echo "</pre>";
