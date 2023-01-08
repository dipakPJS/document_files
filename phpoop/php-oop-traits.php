<?php

/* trait  dip1{
    public function show(){

  echo "MY name is deepak <br>";

    }
}

trait dip2{
    public function show1(){
        echo " I love to code a lot";
    }
}

class derived1{
    use dip1;
    use dip2;
}

 

class dipak extends derived1{

}


$test = new dipak();
$test->show();
$test->show1(); */

//Example 2.

 // if you want to use two or more traits with same method in same class then do the following
/* 
trait d1{

    public function show(){
        echo " MY name is dipak pokharel <br>";
    }
}

trait d2{
    public function show(){
        echo "MY name is PHP-JAVASCRIPT <br><br>";
    }
}



 class dipak{
    protected $name;
    protected $class;

    public function __construct($a, $b)
    {
        $this->name = $a;
        $this->class = $b;
    }

    public function hi(){
        echo " My best friend name is: ".$this->name;
        echo "<br> And he reads in: ".$this->class."<br>";
    }

    use d1, d2{
        d1::show insteadOf d2;
        d2::show as meow;
    }
 }


 $test = new dipak("Elon MUsk", 14);
 $test->hi();
 $test->show();
 $test->meow(); */

 //Example 3
 // If there is private access modifier then do the following
 
 trait hello{
    private function sayhello(){
        echo "HEllo from NEPAL \n";
    }

 }


 class base{
    use hello{
        hello::sayhello as public; // converting private method of trait to public;
    }
 }

 $wer = new base();
 $wer->sayhello();  

 
 
 

?>