<?php


class dipak{
    public $course;

    public function __construct($a)
    {
        $this->course = $a;
        
    }

    public function __invoke()
    {
        echo "My best subject is ".$this->course;
        
    }
}

$test = new dipak("PHP");
$test(); // new need to write function name here with __invoke() magic method.












?>