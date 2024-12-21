<?php 
require_once("./Transaction.php");
$transaction = new Transaction(100,"transaction 1");
$transaction ->addTax(8);
var_dump($transaction->amount );

// Create an object (instance of the class)
// $car1 = new Car("Toyota", "Red");
// $car1->displayDetails();  

// // Create another object
// $car2 = new Car("Honda", "Blue");
// $car2->displayDetails();  


