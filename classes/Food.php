<?php
require_once __DIR__ . '/Product.php';

class Food extends Product {
    public $expire_date;

    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  int $_quantity
     * @param  string $_animal_type
     * @return void
     */
    public function __construct(string $_name, float $_price, int $_quantity, string $_animal_type = "", string $_expire_date)
    {
        parent::__construct($_name, $_price, $_quantity, $_animal_type);
        $this->expire_date = $_expire_date;
    }
}