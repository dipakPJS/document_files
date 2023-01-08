<?php

   abstract class database
   {
       private $host = 'localhost';
       private $dbname = 'ecommerce';
       private $user = 'root';
       private $password = '';

       // connect() function for database connection

       public function connect()
       {
           $dsn = "mysql:host=$this->host;dbname=$this->dbname";
           $pdo = new PDO($dsn, $this->user, $this->password);
           $pdo->setAttribute(PDO::FETCH_ASSOC, PDO::ATTR_DEFAULT_FETCH_MODE);

           return $pdo;
       }

       abstract protected function sku($sku);
   }

   class sku extends database
   {
       public function sku($sku)
       {
           $stmt = $this->connect()->prepare('SELECT * FROM products WHERE sku = ?');
           $stmt->execute([$sku]);

           return $stmt->rowCount() > 0;
       }
   }

   $skuChecker = new sku();
   $skuExists = $skuChecker->sku($_POST['sku']);

   if ($skuExists) {
       echo 'exists';
   } else {
       echo 'available';
   }
