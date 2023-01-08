<?php

require_once("includes/php-oop.inc.php");

 $todo = new post();

 if(isset($_POST['todo_add'])){
 
    $name = $_POST['todo_name'];
    $work = $_POST['todo_work'];

    $todo->addTodo($name, $work);

    header( "location:  {$_SERVER['HTTP_ORIGIN']}/OOP_TODO_LIST/");
 }

 else if(isset($_POST['update_todo'])){
   
   $id = $_GET['id'];
   $name = $_POST['todo_name'];
   $work = $_POST['todo_work'];

   $todo->updateTodo($name, $work, $id);
 
   header( "location:  {$_SERVER['HTTP_ORIGIN']}/OOP_TODO_LIST/");


 }


 else if($_GET['send'] === 'del'){
$id = $_GET['id'];
$todo->deleteTodo($id);

header( "location:  {$_SERVER['HTTP_ORIGIN']}/OOP_TODO_LIST/");
 }

  




?>