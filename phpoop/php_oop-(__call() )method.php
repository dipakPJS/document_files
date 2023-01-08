<?php

 // It also works with private access modifier but it works when user tries to acces private methods or non existing private methods
// and the output will be: fatal error so to professionalize that error we use __call() method.

//Example 1.

/* class student{
    private $first_name;
    private $last_name;

    private function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }


    public function __call($method, $args){ // the $method prarameter shows private methods and $args shows pivate property in array format.
        echo "This is private or non existing method: $method";
        echo "<br><pre>";
        print_r($args);
        echo "</pre>";
    }
}

$test = new student();
$test->setName("Yahoo", "dipak");
echo "<br>";
$test->hello();
 
 */

 // Now if a user wants you to access private methods and set value to it then do the following;

 // Example 2.
 class dipak{
    private $first;
    private $second;

    private function setName($f, $s){
        $this->first = $f;
        $this->second = $s;
    }

    public function __call($method, $args)
    {

        if(method_exists($this, $method)) // $this class name
        
        {

            call_user_func_array([$this, $method], $args); // [$this, $method] means method inside if parent class.

        }

        else{
            echo "Method does't exist: $method"; 
        }
        
    }

 }


 $test = new dipak();
 $test->setName("Diapk", "pokharel");
 echo "<br><pre>";
 print_r($test);
 echo "</pre>";


?>