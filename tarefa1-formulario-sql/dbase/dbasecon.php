<?php
    include('conf.php');

    if($debug) ECHO ">> loaded conf.php file" . PHP_EOL;

    $dbase = new mysqli($host, $user, $pass, $base);

    if(mysqli_connect_error()){
        exit(mysqli_connect_error() . PHP_EOL);
    }

    if($debug) ECHO ">> reached end of dbasecon.php file sucessfully" . PHP_EOL;
?>
