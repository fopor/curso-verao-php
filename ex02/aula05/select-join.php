<?php
    include('conecta_banco.php');

    //$categoria_id = 2;
    //$strsql = "SELECT p.id, p.nome, c.nome as categoria FROM produtos as p
    //           INNER JOIN categorias as c on c.id = p.categoria_id
    //           WHERE c.id = $categoria_id";

    $categoria = 'Moto';
    $strsql = "SELECT p.id, p.nome, c.nome as categoria FROM produtos as p
              INNER JOIN categorias as c on c.id = p.categoria_id
              WHERE c.nome = '$categoria'";

    $statement = $banco->prepare($strsql);

    if(!$statement){
        exit($statement->error);
    }

    if(!$statement->execute()){
        exit($statement->error);
    }

    $resultados = $statement->get_result();

    while($linha = $resultados->fetch_object()){
        print_r($linha);
    }
?>
