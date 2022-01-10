<?php
  class User{
      public $name;
      public $mail;
      public $sconto = 0;

      public function setSconto($premium){
         if($premium === false) {
             $this->sconto = 15;
         }
      }
  }

  class Product{
      public $title;
      public $price;
  }

  class UserSpecial extends User{
      public $premium;

      public function setPremio($premium){
          $this->livello = $livello;
      }

      public function setSconto($premium){
        if($premium === true) {
            $this->sconto = 50;
        }else {
            $this->sconto = $this->livello = false;
        }
     }
  }

?>