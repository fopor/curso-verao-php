<?php
class Conta {
  private $saldo;

  public function __construct($saldo){
    $this->saldo = $saldo;
  }

  public function getSaldo(){
    return $this->saldo;
  }
}

class ContaCorrente extends Conta {
  private $saldo;

  public function __construct($saldo, $limite){
    parent::__construct($saldo);
    $this->saldo = $saldo;
    $this->limite = $limite;
  }
}

$myConta =  new ContaCorrente(100, 10);

print_r($myConta);

$val = $myConta->getSaldo();

ECHO "$val";
?>

