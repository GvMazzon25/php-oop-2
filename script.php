<?php
  class User {
      protected $name;
      protected $product;
      protected $product;

      public function __construct($name, $product, $price)
      {
          $this->name = $name;
          $this->product = $price;
          $this->price = $price;
      }
      public function getName(){
          return $this->name;
      }
      public function getProduct(){
          return $this->product;
      }
      public function getPrice(){
          return $this->price;
      }
  }
?>