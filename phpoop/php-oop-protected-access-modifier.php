<?php

class dipak{
    protected $name;
    protected $age;

    public function __construct($a, $b)
    {

        $this->name = $a;
        $this->age = $b;
        

    }

    
}

Class pokharel  extends dipak{

  

    public function show(){
        echo "MY name is: ".$this->name;
        echo "<br>";
        echo "MY age is: ".$this->age;
    }

}


$test = new pokharel("Dipak Pokharel", 21);
$test->show();



?>