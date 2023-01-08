<?php
 include("./includes/class-autoload.inc.php");
 require_once("./templates/header.php");

 
?>

<!-- Button trigger modal -->
<div class="text-center">
<button type="button" class="my-5 btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPostModal">
  Create POST
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="addPostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- Form input starts -->

      <form action="post.process.php" method="POST">
         
      <div class="form-group">
        <label>Title: </label>
        <input type="text" name="post_title" class="form-control" required>
      </div>

      <div class="form-group">
        <label>Content: </label>
        <textarea type="text" name="post_content" class="form-control" required></textarea>
      </div>

      <div class="form-group">
        <label>Author: </label>
        <input type="text" name="post_author" class="form-control" required>
      </div>

      <!-- Modal footer -->

      <div class="modal-footer mt-3">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="post_submit" class="btn btn-success">Add Post</button>
      </div>
      </form>

      <!-- Form input ends -->
      </div>
    
    </div>
  </div>
</div>




<div class="row">

    <?php $posts = new post(); ?>

      <?php if($posts->getPost()) : ?>

     <?php foreach($posts->getPost() as $post) : ?>
      
      <div class="col-md-6 mt-5 mx-auto ">
    <div class="card">
      <div class="card-body post">
        <h5 class="card-title"><?= $post['Title'] ?></h5>
        <p class="card-text"> 
          
        <?= $post['body'] ?>
      
        <h6 class="card-subtitle text-muted ps-5 text-center mb-2">Author: <?= $post['author'] ?></h6>
     
        <a href="editForm.php?id=<?= $post['id'] ?>" class="btn btn-warning">Edit</a>
      <a href="post.process.php?id=<?= $post['id'] ?>&send=del" class="btn btn-danger">Delete</a>
        </div>
    </div>
  </div>
</div>

      <?php endforeach; ?>

    <?php  else: ?>

          <p class=" text-center text-danger   mt-5">Post is empty</p>

          <?php endif; ?>
    </div>



<?php

    require_once("templates/footer.php"); 
    
?>