<?php

class viewOrder{

    private $itemId;
    private $productId;
    private $product_Name;
    private $productPrice;
    private $itemQuantity;

    public function __construct($itemId, $productId, $product_Name, $itemPrice, $itemQuantity)
    {
        $this->itemId = $itemId;
        $this->productId = $productId;
        $this->product_Name = $product_Name;
        $this->productPrice = $itemPrice;
        $this->itemQuantity = $itemQuantity;
    }

    public function getItemId()
    {
        return $this->itemId;
    }
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    public function getProductId()
    {
        return  $this->productId;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function getProduct_Name()
    {
        return  $this->product_Name;
    }
    public function setProduct_Name($product_Name)
    {
        $this->product_Name = $product_Name;
    }

    public function getItemPrice()
    {
        return $this->productPrice;
    }
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
    }

    public function getItemQuantity()
    {
        return $this->itemQuantity;
    }
    public function setQuantity($itemQuantity)
    {
        $this->itemQuantity = $itemQuantity;
    }




}
