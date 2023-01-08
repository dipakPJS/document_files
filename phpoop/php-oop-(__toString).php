<?php
// Example 1. without using __toString() magic method. so output would be an error.

/*

class dipak{

}

$test = new dipak();
echo $test; 

*/

//Example 2.

class pokharel{
    public function __toString(){
        return "You cannot print objects directly";
    }
}


$test = new pokharel();
echo $test; // output would be professioanl.



?>