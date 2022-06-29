<?php

class CreditCard {
    public $number;
    public $expireDate;
    public $brand;
    public $name;
    public $surname;
    public $cvc;

    public function __construct(string $_number, string $_expire_date, string $_brand, string $_name, string $_surname, int $_cvc)
    {
        $this->number = $_number;
        $this->brand = $_brand;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->cvc = $_cvc;

        $this->setExpireDate($_expire_date);
    }

    public function setExpireDate($_expire_date)
    {
        $today = date('Y-m-d');
        if($_expire_date < $today) {
            throw new Exception('La carta è scaduta');
        }

        $this->expireDate = $_expire_date;
    }
}