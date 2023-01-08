<?php



class base{
    private $name;
    public function __construct($a){
        $this->name = $a;
    }

    public function show(){
        echo "My name is : ".$this->name;
    }

}




$test = new base("Dipak Pokharel");
$test->show();


 







?>