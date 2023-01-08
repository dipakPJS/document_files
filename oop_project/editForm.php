<?php

require_once('./templates/header.php');
include("./includes/class-autoload.inc.php");

$posts = new post();
$post = $posts->editPost($_GET['id']);
$id = $post['id'];
$title = $post['Title'];
$body = $post['body'];
$author = $post['author'];

?>


<div class="text-center my-4">

<h3> Edit Post</h3>

</div>

<div class="row">

    <div class="col-md-7 mx-auto">
    
      <!-- Form input starts -->

      <form action="post.process.php?id=<?= $id  ?>" method="POST">
         
         <div class="form-group">
           <label>Title: </label>
           <input type="text" name="post_title" class="form-control" value="<?= $title; ?>" required>
         </div>
   
         <div class="form-group">
           <label>Content: </label>
           <textarea type="text" name="post_content" class="form-control"  required><?= $body; ?></textarea>
         </div>
   
         <div class="form-group">
           <label>Author: </label>
           <input type="text" name="post_author" class="form-control" value="<?= $author; ?>" required>
         </div>
          <br><br>
 
           <a href="index.php" type="button" class="btn btn-info mx-2"  >Close</a>
           <button type="submit" name="post_update" class="btn btn-success">Update Post</button>
 
         </form>
   
         <!-- Form input ends -->
    </div>
</div>


<?php

require_once("./templates/footer.php");

?>
 



