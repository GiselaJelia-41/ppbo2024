<?php

class Publisher
{
    public $name;
    public $address;
    private $phone;

    public function setPhone(int $phone) : void
    {
        $this->phone = $phone;
    }

    public function getPhone() : int
    {
        return $this->phone;
    }
}