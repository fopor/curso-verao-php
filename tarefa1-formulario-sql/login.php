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

<h1>Login do usuário</h1>

</body>
</html>
