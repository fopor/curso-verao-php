<?php
$carros['Palio'] = array('cor' => 'Cinza', 'placa' => 'ABC-1234');
$carros['Sedan'] = "hey";
$carros['possante'] = 12;

if(!is_array($carros)) {
  exit("carros must be an array()");
}

foreach($carros as $model => $details) {
  echo "carro = $model" . PHP_EOL;

  if(is_array($details)) {
   foreach($details as $detName => $detCont) {
      echo "$detName = $detCont" . PHP_EOL;
    }
  } elseif(is_string($details)){
    echo "$details" . PHP_EOL;
  } else {
    exit("Invalid type");
  }
}

echo "Finished script" . PHP_EOL;
exit(0);

?>

