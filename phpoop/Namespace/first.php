<?php

// Example 1.

/* namespace dipak; // remember: Namespace must be in the top of a file.
class first{
     public function __construct( )
    {
        
        echo "This is the first product class <br>";
    }
}
 */

 // Example 2.
 // Now by making function
  
/*  namespace bill;
 class product{
    public function __construct()
    {

        echo "This is a product class ";
    }

 function wow(){
    echo "Wow from products file. <br>";
 }
 } */

 //Example 3
/* namespace dipak;

 class test{
    public function __construct()
    {

        echo "This is first file";
        
    }

    public function wow(){
        echo "This is from Pro class";
    }
 } */

 //Example 4 . Now we are using namespace inside another namespace.
 

namespace dipak;

 class test{
    public function __construct()
    {

     $test = new \dipak1\test();   // while using namespace inside namespace we need to give one more '\' infront of namespace name. otherwise there will be an error.
        
    }

    public function wow(){
        echo "This is from Pro class";
    }
 } 



?>