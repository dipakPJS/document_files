<?php

namespace Myapp\Project\classes;

class Post extends connect
{
    // showPost() method for fetching data from database

    public function showPost()
    {
        $sql = 'SELECT * FROM products';
        $stmt = $this->databaseConnection()->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }

// for checking whether the SKU id already exists or not

public function skuCheck($sku)
{
    $sql = 'SELECT * FROM product WHERE sku = :sku';
    $stmt = $this->databaseConnection()->prepare($sql);
    $stmt->bindValue('sku', $sku);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo 'exists';
    } else {
        echo "doesn't exists";
    }
}

// for deleting the product item

    public function deleteProduct($selector)
    {
        $sql = 'DELETE FROM products WHERE id = :id';
        $stmt = $this->databaseConnection()->prepare($sql);
        $stmt->bindValue('id', $selector);
        $stmt->execute();
    }
}
