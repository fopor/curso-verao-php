<?php
$ra[176848] = 'Rodrigo';
$ra[172017] = 'MrLeoDude';

$raN = array();
foreach($ra as $chave => $valor) {
	$raN[$chave] = $valor;
}

$ra[176848] = 'Rafael';
$raN[172017] = 'Leandro';

print_r($raN);

?>
