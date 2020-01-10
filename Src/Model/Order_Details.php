<?php
class orderDetails
{
    private $orderId;
    private $customerId;
    private $tableNum;
    private $time;

    public function __construct($orderId, $customerId, $tableNum, $time)
    {
        $this->orderId = $orderId;
        $this->customerId = $customerId;
        $this->tableNum =$tableNum;
        $this->time = $time;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    public function getTableNum()
    {
        return $this->tableNum;
    }
    public function setTableNum($tableNum)
    {
        $this->tableNum = $tableNum;
    }

    public function getTime()
    {
        return $this->time;
    }
    public function setTime($time)
    {
        $this->time = $time;
    }



}