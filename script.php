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

  class Product{
    public $title;
    public $price;
  }

  $premium_client = new  User()
  $premium_client->$name = 'Giorgio';
  $premium_client->$mail = 'gmazzon25@gmail.com';
  $premium_client->$sconto = setSconto(true)

  $premium_client = new  User()
  $premium_client->$name = 'Antonio';
  $premium_client->$mail = 'amazzon74@gmail.com';
  $premium_client->$sconto = setSconto(false)
?>