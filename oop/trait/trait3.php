<?php
trait MyFeature
{
    public function sayhello()
    {
        echo "hello from trait";
    }
}
class goal
{
    public function sayhello()
    {
        echo "hello from class";
    }
}
class ton extends goal
{
    use MyFeature;
}
$phone = new ton();
$phone->sayhello();//trait Have Priority Over Class