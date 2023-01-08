
<?php

 
 class dbh{
  
  private $host = "localhost";
  private $dbname = "opp_todo";
  private $user = "root";
  private $password = "";

  public function connect(){
    $conn = new pdo("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
    $conn->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
    
    return $conn;
  }
 
 }
  
 












?>