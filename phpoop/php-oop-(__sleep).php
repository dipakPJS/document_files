<?php

// Example 1. without __sleep() and only serialize();

/* class abc{
    private $fname;
    private $lname;

    public function setName($fname, $lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }

    
}
$test = new abc();
echo $test->setName("Dipak", "pokharel");
$obj = serialize($test); // It will convert all propeties and methods into an array.
echo $obj;

 */

// Now Example 2. with the help of __sleep() magic method with serialize and the sleep() method only works if someone tries to serialize any object 
// into an array.

/* 
class dipak{
    private $fname;
    private $lname;

public function __construct($a, $b)
{
    $this->fname = $a;
    $this->lname = $b;
    
}

    public function setName($fname, $lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function __sleep()
    {
        return array("fname"); // when we use serialize() function with obj then 'fname' only gets converted into an array.
    }
}

$test = new dipak("Dipak", "Pokahrel");
$test1 = serialize($test);
echo $test1;


 */





















?>