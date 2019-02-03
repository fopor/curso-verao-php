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
        echo ("Error creating database: " . $dbase->error . PHP_EOL);
    }

    if($debug) ECHO ">> creating 'clients' table" . PHP_EOL;
    
    $sqlstr = "CREATE TABLE `cliente-base`.`clients` ( 
        `name` VARCHAR(200) NOT NULL , 
        `gender` VARCHAR(10) NOT NULL , 
        `email` VARCHAR(200) NOT NULL , 
        `pass` VARCHAR(200) NOT NULL ,
        `phone` VARCHAR(200) NOT NULL ,
        `privilege` TINYINT NOT NULL DEFAULT '1' , 
        `id` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`)) 
        ENGINE = InnoDB";

    if ($dbase->query($sqlstr) === TRUE) {
        echo "client table created successfully" . PHP_EOL;
    } else {
        echo ("Error creating client table: " . $dbase->error . PHP_EOL);
    }

    if($debug) ECHO ">> finished" . PHP_EOL;

    $dbase->close();
?>
