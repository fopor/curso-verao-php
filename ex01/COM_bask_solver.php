<?php
if(count($argv) !== 4) {
  exit("Invalid number of arguments!" . PHP_EOL);
}

$a = $argv[1];
$b = $argv[2];
$c = $argv[3];

if($a === 0) {
  exit("must have x squared!" . PHP_EOL);
}

$delta = $b*$b-4*$a*$c;

if($delta < 0) {
  echo "There is no real solution!" . PHP_EOL;
  exit(0);
} else {
  $x1 = ((-1)*$b + sqrt($delta))/(2*$a);
  $x2 = ((-1)*$b - sqrt($delta))/(2*$a);
  if($delta === 0){
    echo "x = $x1" . PHP_EOL;
  } else {
    echo "x1 = $x1" . PHP_EOL . "x2 = $x2" . PHP_EOL;
  }
}

?>

