<?php

// Example 1:: copy by value
/* 
$a = 20;
$b = $a;
$b = 10;
echo $a;  // $a doesn't gets changed
 */
// Example 2:: copy by reference; use '&' for memory location

/* $a = 20;
$b = & $a;
$b = 10;
echo $a; // $a value gets changed and value of b and a remain same;

 */
// Example 3:: In class there is copy by reference is by default and no need to write '&'
/* 
class dipak{
    public $dipak;

    public function __construct($n)
    {
        $this->dipak = $n;
        
    }


}

$test = new dipak("Deepak POkharel");
$test1 = $test;
$test1->dipak = "JAVASCRIPT";
echo $test; // the output would be 'JAVASCRIPT' instead of Deepak Pokharel.

*/

// Example 4:: Not to make copy by reference in class by default we use clone;
/* 
class shiv{
    public $name;

    public function __construct($a)
    {
        $this->name = $a;
        
    }
}

$student = new shiv("php");
$student1 = clone $student;
$student1->dipak = "JAVASCRIPT"; 

echo $student; // both values will be different due to clone keyword
echo $student1;


 */

 // example 5:: for sub object of the class the 'clone' keyword won't support for this type of proplem we use __clone() magic method.

 class shiv{
    public $name;

    public function __construct($a)
    {
        $this->name = $a;
    }

    public function course(sch $c){
        $this->name = $c;
    }
 }

 class sch{
    public $course;

    public function __construct($c)
    {
        $this->course = $c;
        
    }
 }

 $test = new shiv("dipak");
 $test1 = new sch("PHP");
 $test2 = clone $test;
 $test2->name = "OLA";
 $test->course($test1);

 print_r($test);
 print_r($test2);











?>