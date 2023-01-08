<?php

// Example 1: without using __isset() function

/* class student{
    public $course;

    public function setName($c){
        $this->course = $c;
    }
}

 

$test = new student();

echo isset($test->course);

 */

// Example 2

/* class dipak{
    private $fname;
    private $lname;

    public function __construct($fname, $lname){
        $this->fname = $fname;
     $this->lname = $lname;

    }

    public function __isset($property){
        return isset($this->$property);
    }

}


$test = new dipak("Dipak", "Pokahrel");
echo isset($test->fname);
 */

 // Example 3

 class student{
    private $student = ["name" =>"dipak", "age" => "20"];
     
    public function __isset($property){
        return isset($this->student[$property]);
    }
 }

 $test = new student();
 echo isset($test->name); // the name is key of the $student array.






?>