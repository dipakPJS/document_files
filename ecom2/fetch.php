<?php 

 $host = "localhost";
 $dbname = "ecommerce";
 $user = "root";
 $password = "";

 try{

 $conn = new pdo("mysql:host=$host;dbname=$dbname", $user, $password);
 $conn->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);

 }

 catch (PDOException $e){
    echo $e->getMessage();
 }



// get the entered SKU ID from the ajax requrest

$sku_id = $_POST['sku'];

$stmt = $conn->prepare("SELECT * FROM products WHERE sku = :sku");
$stmt->bindValue('sku', $sku_id);
$stmt->execute();
$row = $stmt->fetch();

 if($row){

    echo "exists";


 }

 else {
    echo "not exists";
 }

?>