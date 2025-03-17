 <?php


    final class appledevice //you can not inherit from final class
    {
        //properties
        public $ram = "8GB";
        public $inch = "5 Inch";
        public $space = "16GB";
        public $color = "green";
        public $screen = "lcd";
        public $name;

        public function changeSpac($ra, $in, $sp, $co = "red")
        {
            $this->ram = $ra;
            $this->inch = $in;
            $this->space = $sp;
            $this->color = $co;
        }

        final public function say_hello($n) //final not let you to override function in another class 
        {
            $this->name = $n;
            echo "welcome to " . $n;
        }
    }

    class sony extends appledevice // you extend the properites and method of the Parents class
    {
        public $camera = "25MB";

        public function changeSpac11($ra, $in, $sp, $cam, $co = "red") /*you will have error here if you make
         the name of this function like the name of the Parent method because you change the structure of the parent method*/
        {
            $this->ram = $ra;
            $this->inch = $in;
            $this->space = $sp;
            $this->color = $co;
            $this->camera = $cam;
        }

        public function say_hello($n)
        {
            $this->name = $n;
            echo "welcome to " . $n . " this phone has " . $this->ram . "ram";/*this method will override the parent method and
             won't have error because you didn't change the structure of the method*/
        }
    }

    $iphone6plus = new appledevice();
    $sony1 = new sony();
    //$iphone6plus->price = "$400"; //it will appears in $iphone6plus only

    $iphone6plus->changeSpac("56GB", "15 Inch", "56GB", "Gold");
    $sony1->changeSpac("1GB", "8 Inch", "6GB", "yellow");

    $iphone6plus->say_hello("iphone");
    $sony1->say_hello("sony");
    echo "<pre>";
    print_r($sony1);
    print_r($iphone6plus);
    echo "<pre>";
