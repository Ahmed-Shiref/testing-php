<?php
/*
magic methods
- method with special name start with double underscore [__]

call:
-called when invoking function not accessible or not found 
*/

    class phone
    {
        public $name;
        public $ram;
        public function __call($method, $params)
        {
            echo "the method [ " . $method . " ] not found or not accessible";
            print_r($params);
        }
        private function sayhello() {}
    }
    $obj = new phone();
    $obj->sayhello();
    echo "<pre>";
    print_r($obj);
    echo "</pre>";