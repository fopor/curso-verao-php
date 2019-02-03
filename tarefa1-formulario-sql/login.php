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
    <li class="active"><a href="#">Login</a></li>
    <li><a href="register.php">Cadastro</a></li>
  </ul>
</nav>

<div class="container">
    <h1>Login do usuário</h1>
    <form class="form-horizontal" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
            <input value="<?php echo $email; ?>"
                type="email" class="form-control" id="email" placeholder="Coloque o email" name="email"
                oninvalid="if (this.value == ''){
                    this.setCustomValidity('Este campo é obrigatório')}
                    if (this.value != ''){
                        this.setCustomValidity('Insira um email válido!')}"
                oninput="setCustomValidity('')"
            >
        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Senha:</label>
        <div class="col-sm-10">          
            <input type="password" class="form-control" id="pwd" placeholder="Insira a senha" name="pass"
            value="<?php if($pass_set) echo "$pass";?>"
            >
        </div>
        </div>

        <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Entrar</button>
        </div>
        </div>
    </form>
</div>

</body>
</html>
