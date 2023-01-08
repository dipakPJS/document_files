<?php

// Just like __sleep magic method __wakeup method also works opposite. 
// As we know __sleep method uses serialize() method and like __sleep method __wakeup also uses unserialize() method.

//Example 1.

class student{

    private $fname;
    private $lname;

    public function __construct($fname, $lname)
    {
        $this->fname = $fname;
        $this->lname = $lname;

        
    }

    public function show($fname, $lname){

        $this->fname = $fname;
        $this->lanme = $lname;
    }

    public function __sleep()
    {
        return array("fname", "lname");
    }

    public function __wakeup() // The wakeup method is mostly used for database connection.
    {
        echo "This is wakeup method: ";
    }
}

$test = new student("Dipak", "pokahrel");
$test1 = serialize($test);
$test2 = unserialize($test1);
print_r($test2);










?>