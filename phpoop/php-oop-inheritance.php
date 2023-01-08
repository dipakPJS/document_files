<?php

class test1{
    public $name;
    public $age;
    public $salary;


    public function __construct($n, $a, $s)
    {
        
        $this->name =  $n;
        $this->age = $a;
        $this->salary = $s;

    }

}

class test2 extends test1{

function show(){
    echo "<h1> MY information: </h1>";
    echo "MY name is: ".$this->name;
    echo "<br>";
    echo "My age is: ".$this->age;
    echo "<br>";
    echo "MY salary is: ".$this->salary;

}

}

class  test3 extends test1{

    public $ta = 200;
    public $tn = 6000;
    public $totalsalary;


    function show(){   

 $this->totalsalary = $this->salary - $this->ta - $this->tn;
 echo "php information:";
 echo "Name: ".$this->name;
 echo "<br>";
 echo "Age: ".$this->age;
 echo "<br>";
 echo "Salary: ".$this->totalsalary;
         
    }
}


$test = new test2("Dipak", 21, 800000);
$test2 = new test3("PHP", 16, 10000);
$test->show();
echo "<br><br>";
$test2->show();
 

?>