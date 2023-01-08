<?php
//example 1.

/* class get{
    private $Pok = "Pokharel";

    public function __get($dipak)
    {
        echo "You can't access private properties directly and the error is:: ($dipak)";
    }
}

$test = new get();
$test->Pok;
 */


 //Example 2.

 class abc{
    private $dipak = ["same" => "Dipak", "age" => "20", "salary" => "200000000"];

    public function __get($property){
        if (array_key_exists($property, $this->dipak)){

return $this->dipak[$property];

        }

        else{
            return "This key ($property) is not existed";
        }
    }
 }

 $test = new abc();
 echo $test->same;




?>