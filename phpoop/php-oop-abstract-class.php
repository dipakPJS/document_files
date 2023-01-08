<?php

/* abstract class base{

protected $name;
protected $class;

protected abstract function show();


}

class derived extends base{

    public function __construct($a, $b)
    {
        $this->name = $a;
        $this->class = $b;
    }

public function show()
{
    echo $this->name." is my name ".$this->class." is my class ";
}

}

$test  = new derived("Dipak", 20);
$test->show(); */

// example 2


abstract class dipak{

protected $name;
protected $age;

 abstract public function shwo();

}

class pokharel extends dipak{

    public function __construct($a, $b)
    {

        $this->name = $a;
        $this->age = $b;
        
    }

    public function shwo(){

        echo " My name is ".$this->name;
        echo "<br>";
        echo " MY age is ".$this->age;
    }

}

$test = new pokharel("Dipak", 20);
$test->shwo();







?>