<?php

namespace App\Entity;

class Client {
  protected $id;
  protected $name;
  protected $gender;
  protected $email;
  protected $pass;  
  protected $phone;
  protected $privilege;

  public function getId(){
    return $this->Id;
  }

  public function setId($id){
    $this->Id = $id;
  }

}

