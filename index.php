<?php 
// require_once("./Transaction.php");
// $transaction = new Transaction(100,"transaction 1");
// $transaction ->addTax(8);
// var_dump($transaction->getAmount() );

// Create an object (instance of the class)
// $car1 = new Car("Toyota", "Red");
// $car1->displayDetails();  

// // Create another object
// $car2 = new Car("Honda", "Blue");
// $car2->displayDetails();  


require_once("./paymentGatway/padel/Transaction.php");
require_once("./paymentGatway/stripe/Transaction.php");
use PaymentGatway\stripe\Transaction;
use PaymentGatway\padel\Transaction as PadelTransaction;
$paymentOne = new Transaction();
$paymentTwo = new PadelTransaction();
var_dump ($paymentOne, $paymentTwo);