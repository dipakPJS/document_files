<?php

class dipak{
    private $conn;
    public function __construct($c)
    {

        $this->conn = $c;
        
    }

    public function show(){
        echo "MY name is ".$this->conn;
    }

    public function __destruct()
    {
        echo "<br> <h5><u><b>This is from __destruct OOP magic method</b></u></h5>";
    }
}

$test = new dipak("Pokharel Dipak");
$test->show();





?>