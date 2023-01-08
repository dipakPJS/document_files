<?php

try{$host = "localhost";
$dbname = "ecommerce";
$user = "root";
$password = "";


$conn = new pdo("mysql:host=$host;dbname=$dbname", $user, $password);
$conn->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);

}

catch(PDOException $e){
    echo "Connection error: ".$e->getMessage();
}


 

?>