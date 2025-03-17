<?php
trait MyFeature1
{
    public function feature()
    {
        echo "this is feature number one<br>";
    }
}
trait MyFeature2
{
    public function feature()
    {
        echo "this is feature number two<br>";
    }
}
class toto
{
    use MyFeature1, MyFeature2 {
        //solving the problem
        //trait Name :: method name isteadof other method two
        MyFeature2::feature insteadof MyFeature1; // output >>this is feature number two
        MyFeature1::feature as osamafeat; //new name of method in feature1
    }
}
$phone = new toto();
$phone->feature(); //MyFeature2::feature collision with MyFeature1::feature
echo "<pre>";
print_r($phone);
echo "</pre>";