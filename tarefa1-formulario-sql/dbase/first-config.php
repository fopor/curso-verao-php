<?php
    include('conf.php');

    if($debug) ECHO ">> loaded first-config.php file" . PHP_EOL;

    $dbase = new mysqli($host, $user, $pass);
    
    if(mysqli_connect_error()){
        exit(mysqli_connect_error() . PHP_EOL);
    }

    if($debug) ECHO ">> trying to create necessary tables and bases" . PHP_EOL;

    // Create database
    $sqlstr = "CREATE DATABASE `$base`";

    if($debug) ECHO ">> sqlstr = $sqlstr" . PHP_EOL;

    if ($dbase->query($sqlstr) === TRUE) {
        echo "Database created successfully" . PHP_EOL;
    } else {
        exit ("Error creating database: " . $dbase->error . PHP_EOL);
    }

    if($debug) ECHO ">> finished" . PHP_EOL;

    $dbase->close();

?>
