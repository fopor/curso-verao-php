<?php
  abstract class FormaGeometrica {
    protected $base;
    protected $altura;

    abstract public function calcArea();

    public function getBase() {
      return $this->base;
    }

    public function getAltura() {
      return $this->altura;
    }
  }

  class Retangulo extends FormaGeometrica {
    public funtion __construct(){
      
    }
  }
?>

