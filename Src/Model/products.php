<?php

class Product
{
    private $productId;
    private $product_Name;
    private $product_Desc;
    private $food_drink;
    private $itemPrice;
    private $stock;

    public function __construct($productId, $product_Name, $product_Desc, $food_drink, $itemPrice, $stock)
    {
        $this->productId = $productId;
        $this->product_Name = $product_Name;
        $this->product_Desc = $product_Desc;
        $this->food_drink = $food_drink;
        $this->itemPrice = $itemPrice;
        $this->stock = $stock;

    }

    public function getProductId()
    {
        return $this->productId;
    }
    public function getProductName()
    {
        return $this->product_Name;
    }
    public function getProductDesc()
    {
        return  $this->product_Desc;
    }
    public function getFoodDrink()
    {
        return $this->food_drink;
    }
    public function getItemPrice()
    {
        return $this->itemPrice;
    }
    public function getStock()
    {
        return $this->stock;
    }


}

