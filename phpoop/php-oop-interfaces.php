<?php

interface dipak{
    function show($name, $class, $age);
}

interface pokharel{
    function show1($salary);
}

class middle implements pokharel, dipak{

    public function show($name, $class, $age){
 
         echo "<h1> <u> My information </u> </h1><br>";
         echo "My name is: ".$name."<br>";
         echo "I read in: ".$class." class <br>";
         echo "My age is: ".$age."<br>";
 
    }

    public function show1($salary){
        echo "<h3> My salary is:</h3> ". $salary;
    }
}

$test = new middle();
$test->show("Dipak", 14, 21);
$test->show1(200000);


?>