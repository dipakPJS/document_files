<?php

// Example with normal 'unset' and __unset()
//Exampel 1.
/* 

class abc{
    public $name = "dipak";
    public $class = 12;

    
}

$test = new abc();
unset($test->name); // we cannot do directly with private propeties so we use __unset magic method.

 */

 // Example 2

 class abc{
    public $sub = "PHP";
    private $fname = "Dipak";
    private $lname = "Pokharel";

    public function setName($fname, $lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function __unset($property)
    {
        unset($this->$property);
        
    }
 }

 $test = new abc();
 unset($test->fname);
 echo "<pre>";
 print_r($test);
 echo "</pre>";









?>