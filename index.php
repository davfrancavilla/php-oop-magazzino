<?php

require_once "classes/Product.php";
require_once "classes/Computer.php";


$appleComputer = new Computer("500€", "50A", "250", true,"Laptop", "1TB", "256GB", "16GB", "16\"");


var_dump($appleComputer);