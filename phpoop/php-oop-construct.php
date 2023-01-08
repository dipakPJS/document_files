<?php

class cons{
    public $name;
    public $class;

    function __construct($c, $n){
        $this->name = $n;
        $this->class = $c;
    }

    function show(){
        echo "My name is ".$this->name." I read in Class ".$this->class;
    }
}

$test = new cons(25, "Dipak");
$test->show();



?>