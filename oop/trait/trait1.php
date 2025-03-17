<?php
/*A Mechanism For Code Reuse In Single Inheritance Languages Such As PHP.
Problem With Extending Classes, Is That U Can Only Extend One. This Is A Little Limiting.
With Traits Its Possible For PHP Classes To Inherit Methods & Properties From Multiple Sources.

You Cannot Extend Or Implements.
You Cannot Instantiate.
Its Supporting Class Not Replacing It.
Can Have Methods.
Have Priority Over Class*/
class lg
{
    public $feature1;
    public $feature2;
}
class sony
{
    public $feature3;
    public $feature4;
}
class nokia
{
    public $feature5;
    public $feature6;
}

class newphone extends lg //we can't extend from more than one class 
{}


$phone = new lg();
echo "<pre>";
print_r($phone);
echo "</pre>";
