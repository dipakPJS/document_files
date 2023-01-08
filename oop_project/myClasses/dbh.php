<?php

 
  class dbh{
   private $host = "localhost";
   private $dbname = "oop_post";
   private $user = "root";
   private $password = "";

   public function connect(){

      $dsn = "mysql:host=$this->host;dbname=$this->dbname";
      $pdo = new PDO($dsn, $this->user, $this->password);
      $pdo->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);

    return $pdo;
   }
  }