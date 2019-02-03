<?php

function makeTri($size) {
	$size_aux = 0;

	while($size_aux !== $size){
		for($i=0;$i<$size_aux;$i++){
			echo "*";
		}
		echo PHP_EOL;
		$size_aux++;
	}
}

makeTri(40);
?>

