<?php

abstract class PruductType
{
    abstract protected function productType();
}
class DvdDisc extends PruductType
{
    public $sku;
    public $name;
    public $price;
    public $size;

    public function __construct($sku, $name, $price, $size)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
    }

    public function productType()
    {
        $sql = 'INSERT INTO products (sku, name, price, size) VALUES (?, ?, ?, ?)';
        $conn = $this->connect()->prepare($sql);
        $conn->bindvalue(1, $this->sku);
        $conn->bindvalue(2, $this->name);
        $conn->bindvalue(3, $this->price);
        $conn->bindvalue(4, $this->size);
        $conn->execute();
    }
}

class Furniture extends PruductType
{
    public $sku;
    public $name;
    public $price;
    public $height;
    public $width;
    public $length;

    public function __construct($sku, $name, $price, $height, $width, $length)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function productType()
    {
        $sql = 'INSERT INTO products (sku, name, price, size) VALUES (?, ?, ?, ?, ?, ?)';
        $conn = $this->connect()->prepare($sql);
        $conn->bindvalue(1, $this->sku);
        $conn->bindvalue(2, $this->name);
        $conn->bindvalue(3, $this->price);
        $conn->bindvalue(4, $this->height);
        $conn->bindvalue(4, $this->width);
        $conn->bindvalue(4, $this->length);
        $conn->execute();
    }
}
