<?php

require_once "classes/Product.php";
require_once "classes/Computer.php";


$appleComputer = new Computer("500€", "50A", 250, true,"Laptop", "1TB", "256GB", "16GB", "16\"");
var_dump($appleComputer);
$appleComputer->setPrice("800€");
$appleComputer->setShelf("34E");
$appleComputer->setQuantity(100);
$appleComputer->setAvailability(false);
$appleComputer->getPrice();
$appleComputer->getShelf();
$appleComputer->getQuantity();
$appleComputer->getAvailability();
var_dump($appleComputer);