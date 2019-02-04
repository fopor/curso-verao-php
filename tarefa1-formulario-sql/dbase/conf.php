<?php
    $debug = false;

    $host = 'localhost';
    $user = 'root';
    $pass = 'senha';
    $base = 'cliente-base';

    if($debug) {
        if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
            exit('mysqli not installed' . PHP_EOL);
        } else {
            echo '>> mysqli found' . PHP_EOL;
        }
    }
?>
