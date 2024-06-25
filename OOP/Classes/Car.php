<?php

//  OOP

class Car{

    // Properties/also called fields
   public $brand;
   private $color;

   // Constructor 
    public function __construct($brand, $color){
        $this->brand = $brand;
        $this->color = $color;
    }

    // Getter && setter
    public function getBrand(){
        return $this->brand;
    }

    public function setBrand($brand){
        $this->color = $brand;
    }
    // Method
    public function showDetails(){
        return "Brand: {$this->brand}\n Color: {$this->color}";
    }
}
