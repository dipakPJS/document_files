<?php

use Myapp\Project\classes\post;

require_once realpath('vendor/autoload.php');
require_once 'templates/header.php'; ?>

 <div class="container">
    <form action="post.process.php" method="post"> 
    <nav class="navbar">
      <h1>Product Add</h1>

      <div class="btn-section">
  <a href="productAdd.php" class="btn btn-add">ADD</a>
     <button type="submit" id="delete-product-btn" name="delete_product" class="btn btn-delete">MASSDELETE</button>

      </div>
    </nav>
     <div class="product-list-section">
        <div class="main-product-list">

        <!-- php -->
<?php
$getPost = new post();
$row = $getPost->showPost();
if ($row) {
    foreach ($row as $rows) {
        ?>

     <div class="main-product card">
     <input type="checkbox" name="selector[]" id="delete-checkbox" value = <?php echo $rows['id']; ?>>
 
        <p><?php echo $rows['sku']; ?></p>
        <p><?php echo $rows['name']; ?></p>
        <p><?php echo $rows['price']; ?>.00 $</p>


 <?php

        // fetching data with different product types

    if ($rows['size'] > 0) {
        echo '<p>Size: '.$rows['size'].' MB </p>';
    } elseif ($rows['weight'] > 0) {
        echo '<p>Weight: '.$rows['weight'].'KG </p>';
    } elseif ($rows['height'] > 0 && $rows['width'] > 0 && $rows['length'] > 0) {
        echo '<p>Dimensions: '.$rows['height'].' x '.$rows['width'].' x '.$rows['length'].'</p>';
    } else {
    }
        ?>
  
     </div>
     <?php

    }
} else {
    echo '<p class = "empty-post">Post is empty</p>';
}
?>

     
          <!-- //// -->
      
        </div>
     </div>
    </form>
 </div>

<?php require_once 'templates/footer.php'; ?>

 
 