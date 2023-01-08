<?php

class dipak{
    public $dipk;
    public $pokharel;

    public function __construct($a, $b)
    {

        $this->dipk = $a;
        $this->pokharel = $b;
        
    }

    public function show(){
      return  $this->dipk." is my name ".$this->pokharel." is my surname ";
    }
}


$test = new dipak("Dipak", "pokharel");
echo $test->show();







?>