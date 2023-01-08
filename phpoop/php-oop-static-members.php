<?php

/* class dipak{
    public static $name = "Dipak";
    public static $class = 20;

    public static function show(){
        echo "My name is : ".self::$name;
        echo "<br>";
        echo "I reade in class ".self::$class;
    }
}

dipak::show(); */

// with __construct() function 

/* class dipak{
    public static $a;
    public static $b;

    public function  __construct($a1, $a2){
        self::$a = $a1;
        self::$b = $a2;
    }

    public static function show(){

        echo self::$a + self::$b;

    }
}

$test = new dipak(30, 50);
dipak::show();
 */


 // with inheritance

 class pro{
    public static $b1;
    public static $b2;

    public function __construct($a, $b){
        self::$b1 = $a;
        self::$b2 = $b;
    }

  
 }

 class pro1 extends pro{

    public static function show(){
        echo parent::$b1 - parent::$b2;
    }

 }

 $test = new pro1(100, 30);
 pro1::show();



?>