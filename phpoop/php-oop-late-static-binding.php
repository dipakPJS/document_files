<?php


//Example 1.

/* class dipak{
    protected static $name = "Deepak POkharel";
    public function show(){
        echo static::$name;
    }

}

class pokharel extends dipak{

    protected static $name = "PHP JAVSCRIPT";

}  

$test = new dipak();
$test->show();
echo "<br>";
$test1 = new pokharel();
$test1->show(); */
 
//Example 2. 
/* echo "<h2> Another Example </h2><br>";

class base{
    protected static $name = "Dipak Pokharel ";
    protected static $class = 20 ;

    public function base(){

        echo static::$name;
        echo static::$class;
        echo "<br>";
        echo self::$name;
        echo self::$class;

    }
}

class derived extends base{
    protected static $name = " I love to code a lot. ";
    protected static $class = " Infinite times ";
}

$test3 = new derived();
$test3->base(); */
 

?>