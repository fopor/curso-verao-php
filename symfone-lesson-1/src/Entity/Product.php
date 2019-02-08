<?php
namespace App\Entity;

class Product{
  protected $id;
  protected $name;
  protected $desc;
  protected $price;
  protected $stock;
  protected $img;

  public function getId(){
    return $this->id;
  }
  
  public function setId($inp){
    $this->id = $inp;
  }
  public function getName(){
    return $this->name;
  }
  
  public function setName($inp){
    $this->name = $inp;
  }   
  
  public function getDesc(){
    return $this->desc;
  }
  
  public function setDesc($inp){
    $this->desc = $inp;
  } 
}

