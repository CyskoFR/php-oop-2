<?php

class Product {
    public $name;
    public $price;
    public $quantity;
    public $animal_type;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  int $_quantity
     * @param  string $_animal_type
     * @return void
     */
    public function __construct(string $_name, float $_price, int $_quantity, string $_animal_type = "")
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->quantity = $_quantity;
        $this->animal_type = $_animal_type;
    }
}