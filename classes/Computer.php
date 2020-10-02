<?php


require_once "Product.php";


class Computer extends Product{
    public $type;
    public $hdStorage;
    public $ssdStorage;
    public $ram;
    public $screenSize;



    public function __construct($_price, $_shelf, $_quantity, $_availability = false, $_type, $_hdStorage, $_ssdStorage, $_ram, $_screenSize){
        parent::__construct($_price, $_shelf, $_quantity, $_availability);
        $this->type = $_type;
        $this->hdStorage = $_hdStorage;
        $this->ssdStorage = $_ssdStorage;
        $this->ram = $_ram;
        $this->screenSize = $_screenSize;
    }
}









