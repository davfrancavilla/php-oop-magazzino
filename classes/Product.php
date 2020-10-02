<?php


class Product {
    protected $price;
    protected $shelf;
    protected $quantity;
    protected $availability;


    public function __construct($_price, $_shelf, $_quantity, $_availability = false){
        $this->price = $_price;
        $this->shelf = $_shelf;
        $this->quantity = $_quantity;
        $this->availability = $_availability;
    }

    // set
    public function setPrice($_price){
        $this->price = $_price;
    }

    public function setShelf($_shelf){
        $this->shelf = $_shelf;
    }

    public function setQuantity($_quantity){
        $this->quantity = $_quantity;
    }

    public function setAvailability($_availability){
        $this->availability = $_availability;
    }

    // get
    public function getPrice(){
        if(empty($this->price)){
            die("Prezzo non inserito");
        }
        return $this->price;
    }

    public function getShelf(){
        if(empty($this->shelf)){
            die("Scaffale non inserito");
        }
        return $this->shelf;
    }

    public function getQuantity(){
        if(empty($this->quantity)){
            die("Quantità non inserità");
        }
        return $this->quantity;
    }

    public function getAvailability(){
        return $this->availability;
    }





}