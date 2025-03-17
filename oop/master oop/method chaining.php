<?php
class ph
{
    public $name;
    public $email;
    public function pressPower()
    {
        echo "you have pressed the power button<br>";
        return $this; //A reference to the calling object
    }
    public function bootphone()
    {
        echo "the phone is bootine now ...<br>";
        return $this; //A reference to the calling object
    }
    public function saywelcome()
    {
        echo "welcome to phone<br>";
        return $this; //A reference to the calling object
    }
}
$phone = new ph();
$phone->pressPower()->bootphone()->saywelcome();