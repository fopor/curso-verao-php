<?php
    include('conecta_banco.php');

    $categoria_id = 1;
    $nome = 'CG 150';
    $descricao = 'Moto da Honda';
    $preco = '9999.98';
    $estoque = 10;
    $imagem = 'cg.jpg';

    $strsql = "INSERT INTO produtos (
        categoria_id,    nome,   descricao,    preco,    estoque,    imagem) values(
        $categoria_id, '$nome', '$descricao', '$preco', '$estoque', '$imagem'
    )";

    //echo $strsql . PHP_EOL;

    if(!$banco->query($strsql)){
        exit("Nao deu pra inserir! > " . $banco->error);
    }

    

    $id = $banco->insert_id;

    echo "Produto $id criado com sucesso!" . PHP_EOL;
?>
