<?php

// class Transaction {
//    private float $amount;
//    private string $descirption;

//     public function __construct(float $amount , string $descirption) {
//     $this->amount = $amount;
//     $this->descirption =$descirption;
//    }
//    public function addTax (float $tax): void{
//     $this->amount += $this->amount *$tax /100; 
//    }
//    public function getAmount (): float{
//     return $this-> amount;
//    }
// }












// Define a class
class Car {
    // Properties
    public $brand;
    public $color;
    
    // Constructor
    public function __construct($brand, $color) {
        $this->brand = $brand;  // Use $this to refer to the object's property
        $this->color = $color;  // Initialize property with the provided value
        echo "A new car object is created! Brand: $brand, Color: $color<br>";
    }
    
    // Method to display car details
    public function displayDetails() {
        echo "This car is a " . $this->color . " " . $this->brand . ".<br>";
    }
    public function displayDetailsMore() {
        echo "This car is a " . $this->color . " " . $this->brand . ".<br>";
    }
    
    // Destructor
    public function __destruct() {
        echo "The car object for {$this->brand} is destroyed.<br>";
    }
}

class User {
    public ?Profile $profile = null;
}

class Profile {
    public function getBio(): string {
        return "This is the bio.";
    }
}

$user = new User();

// Use the null safe operator to avoid explicit null checks
echo $user->profile?->getBio() ?? "Profile not found.";

 
