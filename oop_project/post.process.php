<?php

include("./includes/class-autoload.inc.php");

$post = new post();

if(isset($_POST['post_submit'])){
    
    
    $title = $_POST['post_title'];
    $body = $_POST['post_content'];
    $author = $_POST['post_author'];


    $post->addPost($title, $body, $author);

    header( "location: {$_SERVER['HTTP_REFERER']}");

}

else if(isset($_POST['post_update'])){
    $id = $_GET['id'];
    $title = $_POST['post_title'];
    $body = $_POST['post_content'];
    $author = $_POST['post_author'];

    $post->updatePost($title, $body, $author, $id);

    // To see server location do the following
   /*  echo $_SERVER['HTTP_REFERER']; */
   // after that you will seee this location::  http://localhost/oop_project/ when user tries to update the post and do the following after replacing::  http://localhost or server name 
   // like this.

    header( "location:  {$_SERVER['HTTP_ORIGIN']}/oop_project/");

 
}

else if($_GET['send'] === 'del'){
   $id = $_GET['id'];
   
   $post->deletePost($id);

   header( "location:  {$_SERVER['HTTP_ORIGIN']}/oop_project/");

}










