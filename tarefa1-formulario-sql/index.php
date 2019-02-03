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
    <li class="active"><a href="#">Home</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="register.php">Cadastro</a></li>
  </ul>
</nav>

<h1>Bem-vindo</h1>

</body>
</html>
