<?php
/* 
  Example 1.

 class student {
    private $name;
    public function __get($property){
        echo "You are my future error ($property) \n";
    }

    public function __set($property, $value){
        echo "This is non existing or private property:$property";
    }
 }


 $test = new student();
 $test->name; // professional error will be shown

  */

  //Example 2.
/* class dipak{
    private $school;
    public function __set($name, $value) --we need to pass two parameters here
    {
        echo "You are trying to access private or non existing property ($name)";
    }
}

$test = new dipak();
$test->school = "Dipak pokhrel"; */

//Example 3.


/* 

class  student{
    private $name;
    public function __get($property){
        echo "This is from __get method. ($property) \n";
    }

    public function __set($property, $value){
        echo "This is from __set method ($property) \n";
    }
}

$test = new student();
$test->name; //this is for __get()
echo "<br>";
$test->name = "Dipak pokharel"; // this is for __set() 

*/

// Remember: The __get method only works who are trying to access private properties. 
//And if we try to set new value to private properties it wil show an error. so, that there comes __set() method.

//Remember: The __set method only works whenever you try to access private properties and try to assign new value to it.

// Now if you want to set values to private properties from outside then do the following;

//Example 4;
class student{
    private $name;

    /*
    also try here;
    publc function hello(){
        echo $this->name;
    }
    
    and in the object area;

     $test->hello()   
    */
    public function __set($property, $value){
     
        if(property_exists($this, $property)) // property_exists(class, property) and the property is $name which is set to __set() -> $property.

        {

         echo   $this->$property = $value; // $this is class and we have given dollar sign to property because it is not a member variable it is just a parameter of __set() magic method.

        }

        else{
            echo "property doesn't exist : $property";
        }

    }
}

$test = new student;
$test->name = "MY name is deepak pokharel";


?>