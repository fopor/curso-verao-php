<?php
function fibonacci($seqSize) {
  if($seqSize === 2) {
    return array(0,1);
  } elseif($seqSize === 1) {
    return array(0);
  } else {
    $aux = fibonacci($seqSize-1);
    $aux[] = $aux[count($aux)-1] + $aux[count($aux)-2];

    return $aux;
  }
}

//print first 20 fibonacci numbers
$fibSeq = fibonacci(20, array());
foreach($fibSeq as $fibNum){
  echo $fibNum . ' ';
}
echo PHP_EOL;

?>

