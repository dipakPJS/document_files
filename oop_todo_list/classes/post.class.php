<?php

 class post extends dbh{

public function getTodo(){
    $sql = "SELECT * FROM todo";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while($result = $stmt->fetchAll())
    return $result;
}

public function addTodo($name, $work){

    $sql = "INSERT INTO todo(name, work) VALUES(?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name, $work]);

     

}

 public function editTodo($id){
    $sql = "SELECT * FROM todo WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    
    while($result = $stmt->fetchAll())
    return $result;

     
 }

 public function updateTodo($name, $work, $id){
    $sql = "UPDATE todo SET name = ?, work = ? WHERE id = ? ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name, $work, $id]);
   
    

 }


 public function deleteTodo($id){
    $sql = " DELETE FROM todo WHERE id = ? ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
 }



 }