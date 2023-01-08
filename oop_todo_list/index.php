 <?php   
 require_once("includes/php-oop.inc.php");
 require_once("templates/header.php"); 
 
 
 ?>
 


 <!-- Data table starts -->

 <table class="table caption-top table-dark mt-5">
  <div class="text-center ">
<a href="todo-add.php" class="btn btn-success mt-5">Add Post</a>
  </div>
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Work</th>
      <th scope="col">Time</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php

     $test = new post();
     $test->getTodo();
 
     if($test->getTodo()) :
     foreach($test->getTodo() as $tests) : ?>
    <tr>
      <th scope="row"><?= $tests['id'] ?></th>
      <td><?= $tests['name'] ?></td>
      <td><?= $tests['work'] ?></td>
      <td><?= $tests['time'] ?></td>
      <td><a href="edit_todo.php?id=<?= $tests['id'] ?>" class="btn btn-warning">Edit</a></td>
      <td><a href="post.process.php?id=<?= $tests['id'] ?>&send=del" class="btn btn-danger">Delete</a></td>
    </tr>
  </tbody>

  <?php endforeach; ?>
  
  <?php else : ?>
    <h5 class="text-danger fw-bold">List is is Empty</h5>
    <?php endif; ?>
   


</table>

<!-- Data table ends -->

<?php require_once("templates/footer.php"); ?>