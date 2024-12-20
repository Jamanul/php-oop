<?php 
require_once("./Transaction.php");
$transaction = new Transaction();
$transaction -> $amount =15; 
var_dump($transaction -> $amount);