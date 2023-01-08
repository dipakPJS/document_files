<?php

/* 
class calculation{
    public $a, $b, $c;

    function putho(){
        $this->c = $this->a + $this->b;
        echo $this->c;
    }

    function thopu(){

 $this->c = $this->a - $this->b;
 echo $this->c;

    }
}

$turio = new calculation();

$turio->a = 10;
$turio->b = 20;

$turio->putho();
echo "<br>";
$turio->thopu();


 */

 // now we are practicing php OOP constructor

 //Example 1:

/*  class fruit{
    public $name;
    public $class;

    function __construct($a, $b){
        $this->name = $a;
        $this->a = $b;
    }

    function show(){
       echo $this->name." is my name and ".$this->class." is my class ";
    }
 }

 $apple  = new fruit("banana", "apple");
 $apple->show(); */

 // Example 2.

/*  class fruit{
    public $name, $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function get_name(){
        return $this->name;
    }

    function get_color(){
        return $this->color;
    }
 }

 $test = new fruit("Dipak", "pokharel");
 echo $test->get_name();
 echo "<br>";
 echo $test->get_color(); */

//Example 3

// By setting default value to constructor function

/* class dipak{
    public $name;
    public $age;

  public function __construct($a = "dipak", $b = "pokharel") // setting default value
  {

    $this->name = $a;
    $this->age = $b;
  }

  public function show(){
    echo $this->name." is my name ".$this->age;

  }
}

$dipak = new dipak();
$dipak->show(); */

// Example 4

// Now we are using constructor function for one or more object

/* class person{
    public $name, $age;

    function __construct( $n = "no name", $a = 0)
    {
        $this->name = $n;
        $this->age = $a;
    }

    public function show(){
        echo "My name is ".$this->name." and my age is ".$this->age;
    }
}

$p = new person(); // default value will be printed
 
$p2 = new person("Dipak", 20);
 
$p3 = new person("Billionaire", 96);

$p->show();
echo "<br><br>";
$p2->show();
echo "<br><br>";
$p3->show(); */

/* =================== Now we are learning PHP inheritance ======================= */

/*Inheritance is the special function in php which helps us to use methods and properties from one class to another */

//Example 1.
/* 
class employee{
    public $name;
    public $age;
    public $salary;
 
    function info(){
        echo "<h2>my name is deepak pokharel</h2>";
        echo "Employee Name: ".$this->name."<br>";
        echo "Employee Age: ".$this->age."<br>";
        echo "Employee Salary:".$this->salary;
    }
}

class manager extends employee{

    
  
    function __construct($n, $a, $s){

        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

}


$e2 = new manager("Dipak", "55", "20 billion dollars");
$e2->info();
 */

 //example 2

/*  class employee {
    public $name;
    public $age;
    public $salary;


    function __construct($n, $age, $s){

      $this->name = $n;
      $this->age = $age;
      $this->salary = $s;

    }

    function show(){
        echo "<h2>Employee Profile</h2><br><br>";
        echo "Name of employee is: ".$this->name."<br>";
        echo "Age of Employee is: ".$this->age."<br>";
        echo "Salary of Employee is:".$this->salary."<br><br>";
    }
 }


 class manager extends employee {
    public $ta = 1000;
    public $phone = 300;
    public $totalSalary;

    function show(){
        $this->totalSalary = $this->salary + $this->ta + $this->phone;

        echo "<h4> Manager Profile </h3>";
        echo "Employee Name: ".$this->name."<br>";
        echo "Employee Age: ".$this->age."<br>";
        echo "Employee Salary: ".$this->totalSalary."<br>";
    }

    
 }

 class boss extends manager{

    function show(){
        echo "<h1>Boss Profile</h1>";
        echo "Boss Name: ".$this->name."<br>";
        echo "boss Age:".$this->age."<br>";
        echo "Benefits: ".$this->salary;
    }

 }

 $worker = new employee("Shantosh", 26, 10000);
 $manager = new manager("Dilip", 18, 200000);
 $boss = new boss("Dipak", 20, "10 billion dollars");
 $worker->show();
 $manager->show();
 $boss->show(); */

/* ==== Now we are learning PHP OOP access modifiers ==== */

// All access modifiers simple example

//example 1:
/* 
class fruit {
    public $name;
    private $color;
    protected $weight;


}


$mango = new fruit();
echo $mango->name = "Mango";// no error
echo $mango->color = "yellow"; // error
echo $mango->weight = 20; // error */

//example 2:
// Public access modifier;
/* 
class base{
    public $name;
    public function __construct($n){
        $this->name = $n;
    }

function show(){
  echo   $this->name." is my name ";
}


}

$test = new base("Dipak POkharel");
$test->show(); */

//example 3:
// Protected access modifier: we can acces it's value with inheritance
/* 
class base{
    protected $name;

    public function __construct($n)
    {
        $this->name = $n;

    }   
}

class brick extends base{

   public function get(){
   echo  $this->name." is my name ";
   }

}

 $test = new brick("pokharel");
 $test->get();
  */

  //example 4: 
  //Private access modifier:
/* 
    class base{
        private $name;
        public function __construct($a){
            $this->name = $a;
        }

        public function show(){
            echo "MY name is : ".$this->name;
        }
    }


    class ded extends base{
        public function get(){
            echo "Your name is: ".$this->name."<br>";
        }
    }

    // if function is set to private we cannot access in base class
    $test = new base("dipak pokharel");
   // $test->name = "baba dipak"; // it will show error
   $test->show();

   //$test2 = new ded("Pokharel"); we cannot access from derived class
   //$test2->get(); so it will show error if we do this

    */

    //NOw we are learning PHP OOP overriding methods and properties

    //Overriding Properties
/* 
    class a{
        public $name = "Some text";
    }

    class b extends a{
        public $name = "Dipak pokharel"; // here we are overriding the value of $name with "Dipak Pokharel"
    }


    //overriding methods

    class a{
        public $name;
        public function show(){
            echo "My name".$this->name;
        }
    }

    class b extends a{
        public function show(){
            echo "Your name is ".$this->name; // here we are overriding the values of method show() with different values 
        }
    } */

    //Properties overriding example

    //NOW WE ARE LEARNING PHP OOP ABSTRACT CLASS

    //Example 1.

 /*    abstract class dipak{
        protected $name;
        protected $age;

 public function __construct($a, $b)
        {
            $this->name = $a;
            $this->age = $b;
        }

        abstract function show();
    }

    class pokharel extends dipak{
        public function show(){
            echo "My name is: ".$this->name;
            echo "<br>";
            echo "My age is:  ".$this->age;
        }
    }

    $test = new pokharel("Dipak POkharel", 20);
    $test->show(); */

    // Example 2.
/* 
    abstract class parentclass{
        public $name;
        abstract protected function calc($a, $b);
    }

    class childclass extends parentclass{

  public function calc($a, $b){
    echo $a + $b;
  }

    }

    $test = new childclass();
    $test->calc(10,20); */

    // NOW ARE LEARNING PHP OOP INTERFACES

    // The main use of interfaces is to connect two or more classes at same place
    // To make interface class we use 'interface' keyword and to connect classes at same class we use 'implements' keyword to connect each other
    // for making interface class we can't use 'class' keyword to interface classess
    //Example 1.

  /*   interface parent1{
        function sub($a, $b);
    }

    interface parent2{
        function sub($c, $d);
    }

    class childclass implements parent2, parent1{
        public function calc($a, $b){
            echo $a + $b;
        }

        public function sub($c, $d){
            echo $c - $d;
        }
    }

    $test = new childclass();

    $test->calc(20, 30);
    echo "<br>";
    $test->sub(50, 900); */

    //Example 2.

   /*  interface a{
        function hello($n);
    }

    interface c{
        function bye($b,$a);
    }

    class b implements a, c{
        public function hello($n){

            echo $n." is my name <br>";

        }

        public function bye($b, $a){
            echo " Bye ".$b." and ".$a;
        }
    }

    $test = new b();
    $test->hello("dipak");
    $test->bye("PHP", "JAVASCRIPT"); */
 
    // =============== NOW WE ARE LEARNING PHP OOP STATIC MEMBERS ===============

    // with the help of static members in php we can call the function of class without making the object of any class
    // remember: we have to use 'static' keyword after access modifiers while using static members;

    // Example 1.
   /*  class personal{
        public static $name = "dipak pokharel";
        public static function show(){
            echo self::$name;
        }
    }

    personal::show(); */

    //Example 1.1.

 /*    class base {
        public static $name = "Yahoo baba";
        public static function show(){
            echo self::$name;
        }
    }

    base::show(); */

    // Example 2.
/* 
    class person{
        public static $name = "Dipak Pokharel ";
        public static $age = 21;


        static function show(){

            echo "My name is ".self::$name."<br>";
            echo "My age is ".self::$age;
        }

       
    }

    person::show(); */

    // if we want to inherit with inheritance we need to use 'parent::' keyword for static class's static method and properties

    // Example 3.

  /*   class personal {

public static $name = "Dipak Pokharel";

    }

    class publics extends personal{
        public function show(){
            echo parent::$name;
        }
    }

$test = new publics();
$test->show(); */

// Now by using __construct function

//Example 4.

/* class dipak{
    public static $name;
    public static $class;
    public static $salary = 300000000;

    public function __construct($a, $b)
    {
        self::$name = $a;
        self::$class = $b;
    }

    public static function show(){
        echo "My name is: ".self::$name;
        echo "<br>";
        echo "I read in class :".self::$class;
    }
}

class pokharel extends dipak{

  public static   function show1(){

        echo " <br> My salary is:".parent::$salary;

    }


}
$test = new pokharel("Dipak", 14);
pokharel::show();
pokharel::show1(); */       


// ================ NOW WE ARE LEARNING PHP OOP LATE STATIC BINDING ===========


//Example 1.

//without using late static binding

/* class base{
    protected static $name = "yahoo";

    public function show(){
        echo self::$name;
    }
}

class derived extends base{
    protected static $name = "Baba";
}

$test = new base();
$test->show(); */

//Example 2
// Now by using late static binding
/* 
class base{
    protected static $name = "Dipak";
    public function show(){
        echo static::$name;
    }
}

class derived extends base{
    protected static $name = "putho";
}

$test = new derived();
$test->show(); */
         
// Example 3.

/* class base{
    protected static $name = "Dipak pokharel";

    public static function show(){
        echo static::$name;
        echo "<br>";
        echo self::$name;
    }
}

class derived extends base{
    protected static $name = "php javascript";
}

derived::show();   */   

// NOW WE ARE LEARNING PHP OOP TRAITS
// The oop trait method enables developers to reuse the methods of independent class to derived classes

// example 1.

/* class mainclass{
    public function greeting(){
        echo " Good day from main class \n";
    }
}

trait desiredclass{
    public function welcome(){
        echo "Welcome to traits ";
    }
}

class derivedclass extends mainclass{
    use desiredclass;
}

$test = new derivedclass();
$test->greeting();
echo "<br>";
$test->welcome(); */

//Example 2
/* 
trait hello{
  function hello(){
    echo " This is trait 1. <br>";
  }
}

trait world{
    function world(){
        echo "Thiys is trait 2. <br>";
    }
}

class main{
    use hello;
}

class classs extends main{
    use world;
}

class derivedclass extends classs {

}

$test = new derivedclass();
$test->hello();
$test->world(); */


// Now we are learning traits method overriding

//Example 1.

/* 
trait dipak{

   public function sayhello(){  // trait method gets highest priority if this trait is used in derived class with same function name of base class
    echo " My name is dipak pokharel ";
   }
}

class base{
    public function sayhello(){ // base class gets last priority if trait is used in derived class with same method name as in base class
        echo " I love to code a lot ";
    }
}

class derived extends base{
    use dipak;  
}

$test = new derived();
$test->sayhello(); */

//Example 2.
/* 
trait hello{
    public function sayhello(){
        echo " MY name is deepak pokharel \n";
    }
}

class base {
    public function sayhello(){
        echo "hello from class \n";
    }
}

class child extends base{
    use hello; //highest priority
    public function sayhello(){ // second highest priority
        echo "hello from child class \n"; 
    }
} */

// Above example can be said as traits overriding

// If there is two or more traits in derived class
/* 
trait hello{
    public function sayhello(){
        echo "Hello from trait \n";

    }
}

trait hi{
    public function sayhello(){
        echo "Hello from hi trait \n";
    }
}

class base{
   // use hello, hi; // we cannot use two or more traits in class to use any one of them there comes a special solution below;
   use hello, hi{
    hello::sayhello insteadof hi;
    hi:: sayhello as mello;
   }
}

$trr = new base();
$trr->sayhello();
$trr->mello(); */

// ============== NOW WE ARE LEARNIGN PHP OOP TYPE HINTING =============== 

        //Example 1 // without using type hinting

       /*  function sum($v){
            echo $v + 1; // this number automatically triggers to nuberic value
        }

        sum("hello"); // output would be error
 */


 //Example 2 

/* 

function sum(int $v){    // we have used 'int' for integer 
    echo $v + 2;
 }

 sum("hello"); // here we have used string value instead of integer as we have given the type would be int so, there would be an error.
 
 
 */

 // Example 3. with no restriction

/*  function sum($a){
    echo $a + 2;
 }

 sum(50); */

/* 

// Example 4. with foreach loop

 function sum($A){
    foreach ($A as $sum){
        echo $sum."<br>";
    }
 }

 $test = "apple";
 $a($test); // foreach cannot caluculate strings so output would be error
 */

 // Example 5. now if we use any restriction in function and type value in array form, then only the foreach
 // works

/*  function sum(array $name){
    foreach ($name as $sum){
        echo $sum."<br>";
    }
 }

 $test = ["dipak"];  // remember: [ if any type is given in function you need to put value according to those
 sum($test);  // types other wise the output would be error. ]


  */

  // Now we are using type hinting for classes
 // remember: if we use any class names for type and you want to use those function then only
 // the function will accept object of those classes.

 // Example 6

 /* class hello{
    protected $name;
    protected $class;

    public function __construct($n, $c)
    {
        
     $this->name = $n;
     $this->class = $c;

    }


 }

 class bye extends hello{

    public function sayhello(){
        echo "My name is ".$this->name;
        echo "<br> I read in ".$this->class;
    }
 }

 function wow(bye $c){
    $c->sayhello();
 }


$test = new bye("Dipak Pokharel", 13);
wow($test); */

// Example 7:: more advaced concepts of type hinting with class and object 

/* class school{
    public function getNames(student $name){

        foreach($name->names() as $Names){
            echo $Names."<br>";
        }
    }
}

class student{
    public function names(){
        return ["Dipak", "pokharel", "genius"];
    }
}

class library{}

$lib = new library();
$sch = new school();
$stu = new student();

$sch->getNames($stu); */ 

// ======== Now we are learning PHP OOP NAMESPACE ========
// with the help of NAMESPACE we can create a class and functions with same name as many as we want in the same file.

// before running code: first create namespace folder and create file name like: first.php, second.php, third.php.
// all example sample sample see in namespace folder.

//  =================== now we are learning PHP OOP MAGIC METHODS ================
// Remember: In front of magic methods there is always "__" double underscore comes to existence.
  
// Ecample 1. normol methods
/* class abc{
    public function cm(){
        echo "This is first function";
    }
}

$test = new abc();
$test->cm(); 

*/

// **************** PHP oop magic method __construct ================

//Example 2.
/* class dipak{
    protected $name;
    protected $class;

    public function __construct($n, $c)
    {
        $this->name = $n;
        $this->class = $c;
    }


    public function show(){

      echo "MY name is ".$this->name;
      echo "<br> I read in ".$this->class;

    }
}

$construce = new dipak("Dipak Pokharel.", "20 class.");
$construce->show(); 

*/

// ============= PHP OOP DESTRUCT METHOD ===================

// Example 3
/* 
class abc{
    public function __construct(){
        echo "This is a construct function <br>";
    }
   
public function hello(){
    echo "HELLO EVERYONE <br>";
}

public function __destruct()
{
    echo "This is a destruct function <br>";
    echo " <h4> The constructor is called when our object in instantiated or constructed.
            The destructor magic method on the other hand is the exact opposite.The
            __destruct PHP magic method is going to be executed when the object is
            destroyed when the PHP run time is complete.<h4>";
}

}

$test = new abc();
$test->hello(); */

// Example 4

/* class abc{
    public function __construct()
    {
        echo "I love to code a lot";
        
    }

    public function show(){
    echo "I am from nepal";
    }

    public function __destruct()
    {
        echo "This is my __destruct() oop";
    }
}

$dip = new abc(); // after this the descruct() automatically gets called if I call another function then the distructor function automatically
// gets called at last. */

// ====== PHP OOP __AUTOLOAD MAGIC  METHOD is removed instead use spl_autoload_register() ======

// suppose we have different classes in different files and we want to include in same class and there might be 100's of files with different classes
// and to add in the same file, the code becomes more complex and to remove complexity there comes: __autoload which removes complexity of adding 
// different class, methods, properties from other files.

// We are extracting file from autoload folder
// without using spl_autoload_register()

// Example 1::
/* 
include "autoload__OOP/first.php";
require "autoload__OOP/second.php";

$test = new first(); */

//Example 2::

// By using spl_autoload_register()

/* spl_autoload_register(function ($class_name) {
    require "autoload__OOP/".$class_name.".php";
});


$test = new first(); 
$test1 = new second(); */


// ========= NOW WE ARE LEARNING PHP OOP __GET METHOD ===========
// The main use of __get() is to professionalize the errors of private properties.

//Example 1.

/* class abc{
    private $name = "dipak";
    public function hello(){
        echo "hello".$this->name;
    }

    public function __get($name){
        echo "this is private or non existing property ";
    }
}

$test = new abc();
echo $test->name; */

// Example 2

/* class abc{
    private $name = "Dipak POkharel";
    public function __get($dipak){
        echo "This is  an error ($dipak)";
    }
}

$test = new abc();
$test->name; 

*/

// Now get method for array values

//Example 3

/* class abc{
    private $data = ["name" => "dipak", "course" => "php", "fee" => "2000"];


 public function __get($property){
    echo " YOu are trying to access non existing property ($property)";
 }

}

$test = new abc();
print_r($test->data); */

// Now checking if the arroy exists or not using get method

/* class abc{
    private $data = ["name" => "dipak", "course" => "php", "fee" => "2000"];

public function __get($key){
    if(array_key_exists($key, $this->data)){
        return $this->data[$key];
    }

    else{
        return "This key ($key) is not defined.";
    }
}

}

$test = new abc();
echo $test->fee; */  

// ======== NOW WE ARE LARNING PHP OOP __SET() METHOD

// It is also same as __get() method but the difference is it takes two paramaters and the first parameter is property and second is property value.
//Example 1.

/* class student{
    private $name;
    public function __get($property)
    {
        echo " This is error from __get() method and the error is:: ($property) \n";
    }

    public function __set($property, $value){

echo "This is non existing or private property: $property";

    }
}

$test = new student();
$test->name; // professional error will be shown 


 */

 // other example see in __set() php file

 // ============= NOW WE ARE LEARNING PHP OOP __CALL MAGIC METHOC ===============
 
//Example 1.

 /* class dipak{

private $name;

private function show($n){

    $this->name = $n;

}

public function __call($method, $args){

    echo "You are trying to access private or non existing private method:: ($method)";

}

 }

 $test = new dipak();
 $test->show(); */

// other examples see from __call() file.

// Now we are learning __callStatic magic method.
// This is also a professnal way of showing error when user calls a private static method.

//Example 1.

/*
class abc {
   private static function hello(){
        echo "This is hello method";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "This is private static method";
    }
}

abc::hello();

 */

 //Now if the user wants to see the value of static private method , then do the following conditions.
/* 
 class student {
    private static function hello(){
        echo "This is static hello function";
    }

    public static function __callStatic($method, $args)
    {
        if(method_exists(__CLASS__, $method)){
            call_user_func_array([__CLASS__, $method], $args);
        }

        else{
            echo "You are trying to access private static method or non existing private method:: ($method)";
        }
    }
 }

 student::hello();
 echo "<br>";
 student::hello("Dipak POkhrel"); */

 // Now we are leraning php oop __isset() magic method
 
// As we know that 'isset' keyword is used to check whether the value is set or not in any properites and methods.
// and while checking those variables or propeties 'isset' always returns; 1 if condition becomes true and 0 if condition becomes false.
// and same 'isset' can be used for our classes as well. for checking properties values are set or not
// But there comes a problem let's see that;

// SYNTAX :;

/* class abc{
    public $name = "Dipak pokharel";
    private $course = "PHP";
}

$test = new abc();
echo $test->isset($this->name);
echo $test->isset($this->course);

// In this case, it doesn't return 0 nor 1. because it is using private properties. so, to solve this problem we use __isset magic method.

//syntax;;

public function __isset($property){
    echo isset($this->$propety);
}

// the __isset() magic method only works whenever we try to check whether the value is set or not with 'isset' keyword in object area of classes.

 */

 // Example 1.
/* 
 class student {
    public $course;
    private $fname;
    private $lname;

    public function setName($fname, $lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }
 }

 $test = new student();
 echo isset($test->course);  
  
 */


// $course is public property so there won't be error and $fname, and $lname are private properties and we cannot use normal 'isset'
 // keyword directly so to solve that do the following;

// Example 2.

/* 

class school{
    private $fname;
    private $lname;

    public function setName($fname, $lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function __isset($property){
        echo isset($this->$property); // here $this means object of class
    }
}

$test = new school();
echo isset($test->fname);


 */

 // Example 3. 
 // For multidimensional array to check it's key is set or not.
 
/*  class school{
    private $school = ["name" => "Dipak", "age" => "20"];


    public function __isset($property){
        echo isset($this->school[$property]);
    }



 }

 $test = new school();
 echo isset($test->age);

 */

 // ============== NOW WE ARE LEARNING PHP OOP __UNSET ================
// Normally when we use normal 'unset()' keyword with normal properties and methods we can destroy values of thos properties and methods
// But in the case of private properties we cannot destroy with the help of 'unset()' keyword so to solve that problem, '__unset()
// magical method came.

// Example 1.

// with the help of  'unset()' keyword
/* 

$test = "hello world";

unset($test); // here the $test value and the $test variable gets destroyed

echo $test; // if we try to access this variable then there will be error message

 */


 //Example 2.

/* 

class abc{
    public $name = "dipak pokhrel";
    public $class  = "PHP";
     }

$test = new abc();
unset($test->name);
echo $test->name; // output would be error.

// Remember: we cannot use 'unset()' keyword to private properties.

 */


 // Example 3. 
 // with the help of __unset() magical method for private propeties.

/*  class dipak{
    private $name = "Dipak ";


    public function __unset($name) // this __unset() magic method runs whenever someone tries to unset a private properties.
    {
        unset($this->property);
    }
 }

 $test = new dipak();
 unset($test->name);

 */

 // Example 4.

/* 


 class student {
    public $course = "PHP";
    private $fname;
    private $lname;

    public function setName($fname, $lname){
      $this->fname = $fname;
      $this->lname = $lname;
    }

    public function __unset($property)
    {

        unset ($this->$property);
    }



 }

 $test = new student();
 $test->setName("Dipak", "Pokahrel");
 unset($test->fname); // also try with $test->lname
 echo "<pre>";
 print_r($test);
 echo "</pre>";
 
 
 */


//============= NOW WE ARE LERANING PHP OOP __TOSTRING ===========
// The main use of __toString() method is to professionalize the error, when someone tries to print the OBJECT of any class
// directly as a string.

/* // Example 1.

class  abc{
    
}

$test = new abc();
echo $test; // there will be error so to professnalize this type of error we use __toString() magic method.
 

*/

// Example 2.

/* class student{

    public function __toString(){
       return "You cannot print object of class (".__class__.") directly.";
    }
}

$test = new student();
echo $test;  // output would be professinal.



*/
 
// ============= Now we are learning PHP OOP __SLEEP method ================
// The main use of __sleep() magic method is to clear serialize() which is going to become array.

// **** The sleep method only gets called when we serialize any object. But before object get serialize() fully, then
// **** only __sleep() function gets called.

// Example 1.
/*

class student{
    public $course = "php";
    private $fname;
    private $lname;

    public function setName($fname, $lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }
}

$obj = new student();
$obj->setName("Dipak", "Pokharel");
$srl = serialize($obj); // if we donot use __sleep() then it will call all the properties and methods inside class as an array.
echo "<pre>";
echo $srl;
echo "</pre>";

 */

// Example 2.
 
/*

class abc{
    public $name = "dipak";
    public $course = "PHP";

    public function __sleep(){
        return array("name"); // array key must be written without dollar sign. because in this stage to class 'abc' becomes array with serialize()
                              // and the properties becomes array keys automatically with serialization.  
    }
}

$obj = new abc();
$test = serialize($obj); // The main use of serialize() is to convert any object into array. 
echo $test; 

*/

// Example 3.

/*

class dipak{
     
public $course = "PHP";
private $fname;
private $lname;


public function setName($fname, $lname){
    $this->fname = $fname;
    $this->lname = $lname;


}

public function __sleep(){
    return array("fname", "lname");
}
}

$test = new dipak();
$test->setName("Dipak", "Pokharel");
$obj = serialize($test);
echo "<pre>";
echo $obj;
echo "</pre>";

 */

 // ================= Now we are learning PHP oop __wakeup magic method. =================
// As like __sleep method there is unserialize() method for __wakeup method.

// *********** The unserialize() method is opposite to serialize() and __wakeup is opposite to __sleep method. ***********

// Example 1. Without using __wakeup method and using Unserialize
/* 
class student{
    public $course = "php";
    private $fname;
    private $lname;

    public function setName($fname, $lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function __sleep(){
        return array("fname", "lname");
    }
}

$obj = new student();
$obj1 = serialize($obj);
$obj2 = unserialize($obj1); // The unserialize function basically converts an serialized array into object or any array into obj.
 
print_r($obj2); // we cannot call directly when it becomes OBJ with unserialize() function. So, we use print_r to print it.


 */

 // Example 3.

/*  
class student{
    public $course = "php";
    private $fname;
    private $lname;

    public function setName($fname, $lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function __sleep(){
        return array("fname", "lname");
    }

    public function __wakeup(){        // It shows message for unserialized values.
        echo "This is wakeup method ";
    }
}

$obj = new student();
$obj1 = serialize($obj);
$obj2 = unserialize($obj1);  
 
print_r($obj2); 


 */

 // ============ NOW WE ARE LEARNING PHP OOP __CLONE METHOD =============
 // Before learning __clone() method we must know:; * Copy by value and * Copy by reference.
 
 // =========== Copy by value ============
/* 

 $a = 20;
 $b = $a;
 $b = 10;
 echo $a; 

  */

 // In the above example; $a = 20 and again we have assigned $b value to $a and we have given $b = 10 and again we are printing $a. In this condition the value
 // of $a do not gets changed as we have assigned $b = $a and we have given $b = 10. so $a value must be 10 so, for this condition we can say;
// Copy by value.
//so, to change the value of $a when $b new value is assigned we need to use "&" for memory location. because $a memory location set to 20 and if we use "&"
//while assigning the value of $b to $a, then whenever the $b value changes $a value also will be the same as $b;

// Example;
/* 
$a = 20;
$b = & $a; // This is copy by reference
$b = 10;
echo $a; // at this condition the $a value gets changed to 10 

 */

 // But in the case of classes and objects no need to use any "&" sign because classes and objects does copy by reference by default.
 // and there comes little problem while doing copy by reference so to solve that problem  we use __clone() method.

 // Example 1.

/* 

class student{
    public $name;
    public $course;

    public function __construct($n)
    {
        $this->name = $n;
        
    }
 }

 $student1 = new student("dipak POkharel");
 echo $student1->name;
 
 */

// Example 2.

/*         class student{
            public $name;
            public $course;

            public function __construct($n)
            {
                $this->name = $n;
                
            }
        }

        $student1 = new student("dipak POkharel");
        $student2 = $student1; // ======== copy by reference by default and no need to use "&" here.
        $student2->name = "PHP, JAVASCRIPT";
        echo $student1->name;

        // As in the example above whenever we change the value of $student2 the $student1 value also gets
        // changed and we do not want to change anything in $student1 at some condition we use: 'clone' keyword
        // Example below;  

 */


 // Example 3.

/* 

 class dipak{
   public $dipak;

    
    public function __construct($n)
    {
        $this->dipak = $n;
        
    }

 

 }

 $student1 = new dipak("Dipak");
 $student2 = clone $student1; // As we know class is copy by reference by default and to make copy by value we use 'clone' keyword
 $student2->dipak = "Pokahrel"; // with the help of 'clone', the value of $student1 do not get changed as $student2 value gets changed.

 echo $student1->dipak; // value remain same as it is.
 echo "<br>";
 echo $student2->dipak;

  */

 // And there is one more problem, while using 'clone' the propetries gets cloned but in class, if there is use of
 // another object by passing reference then those objects propeties won't be cloned as in example shown below;

// Example 4.
/* 
class student{
    public $name;
    public $course;
    
    public function __construct($n)
    {
        $this->name = $n;
        
    }

    public function setCourse(course $c)
    {

        $this->course = $c;
        
    }
}


class course{
    public $cname;
    public function __construct($ca)
    {
        $this->cname = $ca;
        
    }
}

$student1 = new student("yahoo baba");
$course1 = new course('PHP');
$student1->setCourse($course1);
$student2 = clone $student1;
$student2->name = 'Ram Kumar'; // name of $student1 and $student2 will be different due to 'clone' keyword. 
$student2->course->cname = "JAVASCRIPT"; // course cname value will be same as $student2 value changes then the value of $student1 also will be same.
// The 'clone' keyword doesn't support sub-object of class, so, to solve this proplem theres comes a __clone() magic method.

echo "<pre>";
print_r($student1); 
echo "</pre>";
echo "<br>";
echo "<pre>";
print_r($student2); 
echo "</pre>";

   */

// Example 5 by using __clone() magic method
/* 
class student{
    public $name;
    public $course;
    
    public function __construct($n)
    {
        $this->name = $n;
        
    }

    public function setCourse(course $c)
    {

        $this->course = $c;
        
    }

    public function __clone() // it gets called when we use 'clone' keyword as well it will also help to clone sub object of a class
    {
      $this->course = clone $this->course;
    }
}


class course{
    public $cname;
    public function __construct($ca)
    {
        $this->cname = $ca;
        
    }
}

$student1 = new student("yahoo baba");
$course1 = new course('PHP');
$student1->setCourse($course1);
$student2 = clone $student1;
$student2->name = 'Ram Kumar'; 
$student2->course->cname = "JAVASCRIPT"; 
 echo "<pre>";
print_r($student1); 
echo "</pre>";
echo "<br>";
echo "<pre>";
print_r($student2); 
echo "</pre>";


 */

 // =============== NOW WE ARE LERNING PHP OOP INVOKE ========

 // Example 1;


/* 

 class dipak{
    public $dipak;

    public function __construct($d)
    {
        $this->dipak = $d;
    }

    public function __invoke(){
        echo "My name is ".$this->dipak;
    }
 }

 $test = new dipak("Dipak Pokharel");
 $test(); 

 */
 
// ============ NOW WE ARE LEARNIGN PHP OOP MAGIC CONSTANTS =========== // ALL magic constants must be in CAPITAL LETTER
/* 

// Magic constants which do not require oop are: __LINE__, __FILE__, __DIR__, __FUNCTION__
// __LINE__ = It return line number.
// Example 1.
echo "line Number".__LINE__;

// __FILE__ = It returns the absolute path of file if we put in any php file.
// Example 1.
echo "The full file path is".__FILE__;


//__DIR__ = It returns the absolute path of folder of any specific file.
// Example 1.
echo "The absolute path of folder is ".__DIR__;

// __FUNCTION__ = if we pass this magic constants in any function then, It returns function name.
// Example 1.

function myfunction(){
    echo "The function name is ".__FUNCTION__;
}

myfunction();

 */

 // Magic Constants which require OOP are: __CLASS__, __NAMESPACE__, __TRAIT__, __METHOD__.
 //__CLASS__ = if we put this method inside class then it returns the class nme.
 // Example 1.
/*

class myclass{
    public function getclassname(){
        return __class__;
    }


 }

 $test = new myclass();
 echo $test->getclassname(); 
 
 */

// __METHOD__ = It returns method name.
// Example 1.

/* use myclass as GlobalMyclass;

class myclass{
    public function getMethodName(){
        echo __METHOD__;
    }
}

$test = new myclass();
$test->getMethodName();
 */


//__NAMESPACE__ = It returns Namespace name.
// Example 1.

/* namespace mynamespace;
class dipak{
    public function getnamespace(){
        return __NAMESPACE__;
    }
}

$test = new dipak();
echo $test->getnamespace();

 */

//__TRAIT__ = If we use this constant inside trait then it will return existing trait name.
// Example 1.
/* 
 

trait mytrait{
    public function getTraitName(){
        echo __TRAIT__;
    }


}

class myclass{
    use mytrait;
}

$test = new myclass();
$test->getTraitName();

*/

////// ================ NOW WE ARE LEARNING PHP OOP CONDITIONAL FUNCTIONS ============
// list of conditional functions ::

// * class_exists = it checks whether the particular name of the class exists or not. And same
// as it is for other conditional functions.
// Example::1

/* class myclass{}

if(class_exists('myclass')){
    $obj = new myclass(); // if class exists then the object of class will be created and if not the message will shown.
}

else{
    echo "This class doesn't exists";
}

 */

 // Example::2

 /* class myclass{}

 if(class_exists('myclass')){
    echo "the class exists";
 }
 else {
    echo "The class does not exist";
 }

 */
// * interface_exists() = IT checks whether the interface exists or not.
// Example::

/*

interface dipak{

}
 class myclass{}

 if(interface_exists('dipak')){
    echo "This interfase exists";
 }
 else{
    echo "does not exist";
 }

 */

 // Example 2::

// main use of interface__exists

/* interface dipak{}
class myclass{}


if(interface_exists('dipak')){
    class myclass implements dipak{}
}
else {
    echo "This interface doesn't exist.";
}
 */

// * is_a() = it helps to check whether the object of class exists or not in particular class.

// * is_subclass_of() = it helps to check the particular object is of subclass's object or not.


?>  
          
 
  