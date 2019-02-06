<?php
    include('conecta_banco.php');

    $strsql = "select * from produtos";
    $statement = $banco->prepare($strsql);

    //verifica erro ao passar statemante
    if(!$statement){
        exit("Erro ao passar SQL > " . $statement->error);
    }

    //verrifica se teve erro ao executar
    if(!$statement->execute()) {
        exit($statement->error);
    }

    //pega resultado
    $resultados = $statement->get_result();

    while($linha = $resultados->fetch_object()){
        print_r($linha);
    }
?>
