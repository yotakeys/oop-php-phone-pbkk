<?php
// Main Program to Run

require "Brand.php";
require "Inventaris.php";


// Initialize
$starterPhone = array();
array_push($starterPhone, new Samsung("Galaxy A51", 3500000, 10));
array_push($starterPhone, new Redmi("Redmi Note 9", 2500000, 10));
array_push($starterPhone, new Iphone("Iphone 11", 15000000, 10));

$inventaris = new Inventaris($starterPhone);

$inventaris->getListPhone();


// Add Phone
$inventaris->addPhone(new Samsung("Galaxy A51", 2500000, 100));
$inventaris->getListPhone();


// Update Phone
$inventaris->updatePhone(0, "Galaxy A52", 4000000, 10);
$inventaris->getListPhone();

// Remove Phone
$inventaris->removePhone(0);
$inventaris->getListPhone();
