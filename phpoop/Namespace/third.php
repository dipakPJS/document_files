<?php

//Example 1. It is related to example 1 of first.php and second.php
// this is for classes with same name


/* include "first.php";
include "second.php";

$obj = new dipak\first();
$obj = new test\first(); */


// Example 2. It is related to example 2 of first.php and second.php
// this is for functions with same name

/* include "first.php";
include "second.php";

$obj = new bill\product();
$obj2 = new bill2\product2();

$obj->wow();
echo "<br>";
$obj2->wow(); */

// Example 3 ------ same comment as above

/* include "first.php";
include "second.php";

class hello{
    public function __construct()
    {
        echo " I am from Nepal";
    }


    public function wow(){
        echo "This is from third class";
    }
}

$test = new dipak\test();
echo "<br>";
$test->wow();
echo "<br>";
$test1 = new dipak1\test();
echo "<br>";
$test1->wow(); */

 // Exmple 4. this is a example of namespace inside of namespace of first.php file.

 include "first.php";
 include "second.php";

 class hello{
    public function __construct()
    {
        echo "This is third class";
    }
 }


 $test = new dipak\test(); // and the output will be this is second file. because we have used namespace of second.php file inside the namespace of first.php file.



?>