<?php

use Myapp\Project\classes\connect;

class SkuCheck extends connect
{
    public function skuCheck($sku)
    {
        $sql = 'SELECT * FROM products WHERE sku = :sku';
        $stmt = $this->databaseConnection()->prepare($sql);
        $stmt->bindValue('sku', $sku);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
}
