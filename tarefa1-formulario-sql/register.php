<?php
    include('page-info.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $HOME_NAME;?></title>
    <?php bootstrap_load();?>
</head>

<body>
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="login.php">Login</a></li>
    <li class="active"><a href="#">Cadastro</a></li>
  </ul>
</nav>

<div class="container">
    <h1>Tela de Cadastro</h1>
    <form class="form-horizontal" method="post">
        <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-sm-2" for="name">Nome:</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" placeholder="Insira nome completo" name="name">
        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-sm-2" for="phone">Telefone:</label>
        <div class="col-sm-10">
            <input type="phone" class="form-control" id="phone" placeholder="Insira seu telefone" name="phone">
        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-sm-2" for="gender">Gênero:</label>
        <div class="radio control-label col-sm-2">
        <label><input type="radio" name="gender">M</label>
        </div>
        <div class="radio control-label col-sm-2">
        <label><input type="radio" name="gender">F</label>
        </div>
        <div class="radio control-label col-sm-2">
        <label><input type="radio" name="gender">Other</label>
        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Senha:</label>
        <div class="col-sm-10">          
            <input type="password" class="form-control" id="pwd" placeholder="Insira a senha" name="pass">
        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Confirme senha:</label>
        <div class="col-sm-10">          
            <input type="password" class="form-control" id="pwd" placeholder="Insira a senha" name="pass">
        </div>
        </div>

        <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Registrar</button>
        </div>
        </div>
    </form>
</div>

</body>
</html>
