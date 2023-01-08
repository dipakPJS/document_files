<?php

require_once('./templates/header.php');
include("./includes/php-oop.inc.php");


$posts = new post();
$post = $posts->editTodo($_GET['id']);
 foreach ($post as $post1) :
 $id = $post1['id'];
  $name = $post1['name'];
  $work = $post1['work'];
 
?>


<div class="text-center my-4">

<h3> Edit Post</h3>

</div>

<div class="row">

    <div class="col-md-7 mx-auto">
    
      <!-- Form input starts -->

      <form action="post.process.php?id=<?= $id; ?>" method="POST">
         
         <div class="form-group">
           <label>Title: </label>
           <input type="text" name="todo_name" class="form-control" value="<?= $name; ?>" required>
         </div>
   
         <div class="form-group">
           <label>Content: </label>
           <input type="text" name="todo_work" class="form-control" value="<?= $work; ?>" required>
         </div>
         <?php  endforeach;     ?>
  
          <br><br>
 
           <a href="index.php" type="button" class="btn btn-info mx-2"  >Close</a>
           <button type="submit" name="update_todo" class="btn btn-success">Update Todo</button>
 
         </form>
   
         <!-- Form input ends -->
    </div>
</div>


<?php

require_once("./templates/footer.php");

?>