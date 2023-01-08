<?php

//Example 1.

/* 

use student as GlobalStudent;

class student{
    private static function hello(){
        echo "MY name is deepak";
    }

    public static function __callStatic($method, $agrs){
        echo " You are trying to access private static method:: ($method)";
    }
}

student::hello();

 */

 //Example 2.

 class school{

    private static function hello(){
        echo "This is static hello function";
    }

public static function __callStatic($method, $args)
{
    if(method_exists(__CLASS__, $method)){
        call_user_func_array([__CLASS__, $method], $args);
    }
    else{
        echo "You are trying to access private static method or non existing private method:: ($method)";
    }
}

 }

 school::hello();




?>