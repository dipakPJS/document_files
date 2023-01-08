<?php


// __FUNCTION__ example::
/* 

function myfunction(){
    echo __FUNCTION__."<br>";
}

myfunction();

// __FILE__ example::

echo __FILE__."<br>";

// __DIR__ example::

echo __DIR__."<br>";

// __LINE__ example::

echo __LINE__."<br>";

*/

/////////// ============== Magic constants which needs OOP ========== ////////////////

// __CLASS__ example::

/* 
class myclass{
    function show(){
        return __CLASS__."<br>";
    }

}

$test =  new myclass();
$test->show();

//__METHOD__ example::

class mymethod{
    public function mymethod(){
        return __METHOD__."<br>";
    }
}

$test1 = new mymethod();
$test1->mymethod();

 */

// __NAMESPACE__ example::
/*  

namespace dipak;
class dipak{
    public function myfunction(){
        return __NAMESPACE__;
    }
}

$test2 = new dipak();
echo $test2->myfunction();


 */

 // __TRAIT__ example::

 trait BILLIONAIre{
    public function traite(){
        echo __TRAIT__;
    }
 }

 class pokhrel{
    use BILLIONAIre;
 }

 $test = new pokhrel();
 $test->traite();
















?>