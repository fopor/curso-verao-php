<?php
    include('conecta_banco.php');

    $id = 6;
    $preco = 90000;
    $descricao = 'Oferta imperdível';

    $strsql = "UPDATE produtos set PRECO = $preco, descricao = '$descricao' WHERE id = $id";

    if(!$banco->query($strsql)){
        exit($banco->error);
    }

    echo "Sucesso cachoeira!" . PHP_EOL;
?>
