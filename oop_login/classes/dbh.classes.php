<?php


class dbh {

protected function connect() {

try {

  $username = "root";
  $password = "";
  $dbh = new pdo('mysql:host=localhost;dbname=oopLogin', $username, $password);
  return $dbh;
}

catch (PDOException $e) {

  echo "Error!: " . $e->getMessage() . "<br/>";
  die();


}


}



}








?>