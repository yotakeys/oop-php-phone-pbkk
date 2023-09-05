<?php

// Main Program to Run

include "./Brand.php";
include "./Inventaris.php";

$starterPhone = array();
$starterPhone[0] = new Samsung("Galaxy A51", 3500000, 10);
$starterPhone[1] = new Redmi("Redmi Note 9", 2500000, 10);
$starterPhone[2] = new Iphone("Iphone 11", 15000000, 10);

$inventaris = new Inventaris($starterPhone);
