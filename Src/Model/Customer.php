<?php
class customer {

    private $customerId;
    private $name;
    private $email;

    public function __construct($customerId, $name, $email)
    {
        $this->customerId = $customerId;
        $this->name = $name;
        $this->email =$email;

    }

    public function getCustomerId()
    {
        return $this->customerId;
    }
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
}