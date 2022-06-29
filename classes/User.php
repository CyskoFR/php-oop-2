<?php

class User {
    public $name;
    public $surname;
    public $email;
    public $discount = 0;
    protected $creditCard;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_surname
     * @param  string $_email
     * @return void
     */
    public function __construct(string $_name, string $_surname, string $_email)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }
    
    /**
     * setCreditCard
     *
     * @param  object $_credit_card
     * @return void
     */
    public function setCreditCard(object $_credit_card)
    {
        $this->creditCard = $_credit_card;
    }
    
    /**
     * getCreditCard
     *
     * @return object
     */
    public function getCreditCard():object
    {
        return $this->creditCard;
    }
}