<?php

class itemDetails{

    private $itemId;
    private $orderId;
    private $productId;
    private $itemQuantity;

    public function __construct($itemId,$orderId, $productId, $itemQuantity)
    {
        $this->itemId = $itemId;
        $this->orderId = $orderId;
        $this->productId = $productId;
        $this->itemQuantity =$itemQuantity;

    }

    public function getItemId()
    {
        return $this->itemId;
    }
    public function setItemId($itemId)
    {
        $this->orderId = $itemId;
    }
    public function getOrderId()
    {
        return $this->orderId;
    }
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    public function getProductId()
    {
        return $this->productId;
    }
    public function setProductId($productId)
    {
        $this->productId = $productId;
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
