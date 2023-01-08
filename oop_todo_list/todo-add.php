 <?php

include_once("templates/header.php");
include("./includes/php-oop.inc.php");

 
 ?>

<div class="row">

<div class="text-center my-4 pt-5">

<h3> Add Post</h3>

</div>

<div class="row">

    <div class="col-md-7 mx-auto">
    
      <!-- Form input starts -->

      <form action="post.process.php" method="POST">
         
         <div class="form-group">
           <label>Name: </label>
           <input type="text" name="todo_name" class="form-control"  required>
         </div>
   
         <div class="form-group">
           <label>Work: </label>
          <input type="text" name="todo_work" class="form-control" required>
         </div>

      <div class="mt-5 text-end">
           <a href="index.php" type="button" class="btn btn-info mx-2">Close</a>
           <button type="submit" name="todo_add" class="btn btn-success">Add Todo</button>
         </div>
         </form>
   
         <!-- Form input ends -->
    </div>
</div>

</div>


<?php

include_once("templates/header.php");

 ?>