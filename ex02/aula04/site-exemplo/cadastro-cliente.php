<?php

function format_name($text) {
    $text = trim($text);
    $text = strtolower($text);
    $text = ucwords($text);

    return $text;
}

$nomePagina = 'Cadastro do Cliente';

$erros = array();
$sucessos = array();

//validation
$nome = $email = $senha = $cidade = $telefone = $genero = '';

if(count($_POST) > 0) {
    $nome = $_POST['nome'];
    if($nome != ''){
        $nome = format_name($nome);
    }
    else{
        $erros[]='Digite o nome!';
    }

    $senha = $_POST['senha'];
    if(strlen($senha)<6){
        $erros[]='Senha deve ter pelo menos 6 caracteres';
    }

    $email = $_POST['email'];
    if($email != '') {
        $email = strtolower($email);
        $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
        $match = preg_match($pattern, $email);
        
        if($match) {

        } else {
            $erros[] = "Email invalido!";
        }

    } else {
        $erros[] = "Preencha o campo de e-mail!";
    }
    
    $cidade = $_POST['cidade'];
    if($cidade != '') {
        $cidade = format_name($cidade);
    } else {
        $erros[] = "Preencha o campo cidade!";
    }

    $telefone = $_POST['telefone'];
    if($telefone != '') {

    } else {
        $erros[] = "Preencha o campo telefone!";
    }

    $genero = $_POST['genero'];
    if($genero == 'outro' || $genero == 'M' || $genero == 'F') {

    } else {
        $erros[] = "Selecione uma opção de gênero";
    }

    if(count($erros) == 0){
        $sucessos[] = "Tudo certo no formulário";
        $senhaCripto = md5($senha);
        $strsql = "INSERT INTO clientes (nome, telefone, email, senha) values ('$nome', '$telefone', '$email', '$senhaCripto')";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
            echo $nomePagina 
        ?>
    </title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/jquery/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/pooper.js"></script>
</head>

<body>
    <h1><?php echo $nomePagina ?></h1>

    <?php 
        if(count($erros) >= 0) {
            foreach($erros as $erro) {
                echo "<h3>$erro</h3>";
            }
        }

        if(count($erros) >= 0) {
            foreach($sucessos as $mes) {
                echo "<h3>$mes</h3>";
            }
        }
    ?>

    <form method="post">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" <?php if(!empty($_POST["nome"])) echo "value=$nome";?> placeholder="Digite o nome">
            <small class="form-text text-muted">Digite seu lindo nome acima :)</small>
        </div>

        <div class="form-group"> 
            <label>Cidade:</label>
            <input type="text" name="cidade" <?php if(!empty($_POST["cidade"])) echo "value=$cidade";?> class="form-control">
            <small class="form-text text-muted">Diga qual cidade tem o prazer da sua presença</small>
        </div>
    
        <div class="form-group"> 
            <label>E-mail:</label>
            <input type="text" name="email" <?php if(!empty($_POST["email"])) echo "value=$email";?> class="form-control">
            <small class="form-text text-muted">Digite um e-mail VÁLIDO. é sério/small>
        </div>

        <div class="form-group"> 
            <label>Telefone:</label>
            <input type="text" name="telefone" <?php if(!empty($_POST["telefone"])) echo "value=$telefone";?> class="form-control">
            <small class="form-text text-muted">Lembre-se do DDD!</small>
        </div>

        <div class="form-group"> 
            <label>Senha:</label>
            <input type="password" name="senha" class="form-control">
            <small class="form-text text-muted">Mande uma senha A-N-A-B-O-L-I-Z-A-D-A</small>
        </div>
      
        <div class="form-check">
            <input class="form-check-input" type="radio" name="genero" id="" value="M" <?php if($_POST["genero"] == 'M') echo 'checked';?>>
            <label class="form-check-label" for="">
                M
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="genero" id="" value="F" <?php if($_POST["genero"] == 'F') echo 'checked';?>>
            <label class="form-check-label" for="">
                F
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="genero" id="" value="outro" <?php if($_POST["genero"] == 'outro') echo 'checked';?>>
            <label class="form-check-label" for="">
                Outro
            </label>
        </div>
       
        <input type="submit" value="salvar" class="btn btn-primary">
    </form>
</body>
</html>
