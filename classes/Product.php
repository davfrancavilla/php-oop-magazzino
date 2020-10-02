<?php


class Product {
    public $price;
    public $shelf;
    public $quantity;
    public $availability;


    public function __construct($_price, $_shelf, $_quantity, $_availability = false){
        $this->price = $_price;
        $this->shelf = $_shelf;
        $this->quantity = $_quantity;
        $this->availability = $_availability;
    }





}