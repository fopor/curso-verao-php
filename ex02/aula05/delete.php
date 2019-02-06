<?php
    include('conecta_banco.php');

    $id = 7;

    $strsql = "DELETE FROM produtos WHERE id = $id";

    if(!$banco->query($strsql)){
        exit($banco->error);
    }

    echo 'Remocao feita com sucesso!' . PHP_EOL;
?>