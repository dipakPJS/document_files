<?php

require "connection.php";

/* data inserting section starts */

if(isset($_POST['save'])){
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $product_type = $_POST['product_type'];
    $size = $_POST['size'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    
 $insert = $conn->prepare("INSERT INTO products(sku, name, price, product_type, size, weight, height, width, length) VALUES (:sku, :name, :price, :product_type, :size, :weight, :height, :width, :length)");

 $insert->execute([

':sku' => $sku,
':name' => $name,
':price' => $price,
':product_type' => $product_type,
':size' => $size,
':weight' => $weight,
':height' => $height,
':width' => $width,
':length' => $length


 ]);



}

/* data inserting section ends */

/* data delete using checkbox starts */
 
if(isset($_POST['delete-product-btn'])) {
    if(isset($_POST['selector'])) {
        foreach ($_POST['selector'] as $selector) {
            $stmt = $conn->prepare('delete from products where id = :id');
            $stmt->bindValue('id', $selector);
            $stmt->execute();
        }
    }
}

/* data delete using checkbox ends */



 ?>
 <?php
include_once("header.php");

 ?>
 <style>
    .product{ width:90%;  margin:auto;  height:100px;  align-items:center;  display:flex;  border-bottom:2px solid gray;  justify-content:space-between}

 
.product a{ text-decoration:none;  color:white;  font-size:20px;  font-weight:900;  padding:10px 30px;  border-radius:5px;  background-color:#0984e3;  text-transform:uppercase}

.product #delete-product-btn{ background-color:#d63031 !important;  text-transform:uppercase !important;  padding:10px 20px !important;  outline:none !important;  border:0 !important;  color:white !important;  font-size:16px !important;  font-weight:900 !important;  border-radius:5px !important;  cursor:pointer !important}

.container{ width:90%;  margin:auto}

.container .row{ display:grid;  grid-template-columns:repeat(4,3fr);  margin-top:50px}

.container .row .col{ height:200px;  width:300px;  background-color:#ee5253;  font-size:20px;  font-weight:300;  margin:10px;  transition:0.5s ease-in-out;  color:white;  text-align:center;  letter-spacing:2px;  padding-top:20px;  border-radius:10px;  line-height:2px}

.container .row .col input.delete-checkbox{ height:20px;  width:20px;  margin:0 200px 0 0}

.container .row .col:hover{ box-shadow:0 0 20px black;  transform:scale(1.1)}

footer{ width:90%;  border-top:2px solid black;  height:30px;  display:flex;  justify-content:center;  align-items:center;  margin:auto;  margin-top:300px;  font-family:'Lucida Sans',sans-serif;  padding-top:30px}


 </style>
</head>
<body>
<form action="index.php" method="POST">
    <div class="product">
<h1>Product List</h1>
<div class="button">
    <a href="product-add.php">Add</a>
    <button type="submit" id="delete-product-btn" name="delete-product-btn">Mass Delete</button>
</div>
    </div>
    <div class="container">
      
        <div class="row">

<!-- data fetching starts -->
            
<?php


 $rows = $conn->query("SELECT * FROM products");
 while($row = $rows->fetch(pdo::FETCH_ASSOC)){
   
    ?>
    <div class="col">
        <input type="checkbox" name="selector[]" class="delete-checkbox" value="<?= $row['id'] ?>">
    <p><?= $row['sku'] ?></p>
    <p><?= $row['name'] ?></p>
    <p><?= $row['price'].".00 $" ?></p>
    <?php
    if($row['size'] > 0){
    
      echo "<p>Size:".$row['size']."MB </p>";

    }

    elseif($row['weight'] > 0){
        echo "<p>Weight:".$row['weight']."KG </p>";
    }

    elseif($row['height']>0 && $row['width']>0 && $row['length']>0 ){
    echo "<p>Dimensions:".$row['height']."x".$row['width']."x".$row['length']."</p>";
    }

    else{
        
    }
    ?>

    </div>

    
     
  <?php

 }

 
 ?>

<!-- data fetching ends -->

            
        </div>
     
    </div>
</form>

 
 
</body>
</html>