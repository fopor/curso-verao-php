<?php
    include('page-info.php');
    include('dbase/dbasecon.php');

    if($debug) print_r($_POST);

    $errors = array();
    $sucess = array();

    $name = $phone = $gender = $email = $pass = $passcon = '';
    $pass_set = false;
    $privilege = 1;

    if(count($_POST)) {
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        } else {
            $errors[] = 'Selecione uma opção de gênero!';
        }

        $name = $_POST['name'];
        if($name != '') {
            $name = strtolower($name);
            $name = trim($name);
            $name = ucwords($name);
            
        } else {
            $errors[] = 'Digite o nome!'; 
        }
        
        $email = $_POST['email'];
        if($email != '') {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors = "Email inválido!"; 
              }              
        } else {
            $errors[] = 'Insira um email!';
        }

        $phone = $_POST['phone'];
        if($phone != '') {
            
        } else {
            $errors[] = 'Insira um telefone!';
        }

        $pass    = $_POST['pass'];
        $passcon = $_POST['passcon'];
        if($pass != '') {
            if(strlen($pass) < 6) {
                $errors[] = "A senha teve ter mais de 6 caracteres!";
            } elseif ($pass != $passcon) {
                $errors[] = "Confirmação deve ser igual à senha!";
            } else {
                $pass_set = true;
            }
        } else {
            $errors[] = 'A senha não pode ficar em branco!';
        }

        if(!count($errors)){
            $sucess[] = 'Formulário preenchido com sucesso!';
            $pass_hash = md5($pass);

            $strsql = "INSERT INTO clients (name, gender, email, pass, phone, privilege) VALUES ('$name', '$gender', '$email', '$pass_hash', '$phone', $privilege);";

            if($debug) echo $strsql . PHP_EOL;

            if (!$dbase->query($strsql)) {
                exit($dbase->error . PHP_EOL);
            }
            
            if ($debug) echo "End of insertion process" . PHP_EOL;
        }
    }
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

    <?php 
    if (count($errors) > 0) {
        foreach ($errors as $mes) {
            echo "<h6>$mes</h6>";
        }
    }
    if (count($sucess) > 0) {
        foreach ($sucess as $mes) {
            echo "<h6>$mes</h6>";
        }
    }
    ?>

    <form class="form-horizontal" method="post">
        <div class="form-group">
        <label class="control-label col-sm-2" for="name">Nome:</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" value="<?php echo $name; ?>"
            placeholder="Insira nome completo" name="name">
        </div>
        </div>

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
        <label class="control-label col-sm-2" for="phone">Telefone:</label>
        <div class="col-sm-10">
            <input type="phone" class="form-control" id="phone" value="<?php echo $phone; ?>"
            placeholder="(11)-91234-5678" name="phone">
        </div>
        </div>

        <div class="form-group">
        <label class="control-label col-sm-2" for="gender">Gênero:</label>
        <div class="radio control-label col-sm-2">
        <label><input type="radio" name="gender" value='M' <?php if ($gender == 'M') { echo 'checked="checked"'; } ?>>
        M</label>
        </div>
        <div class="radio control-label col-sm-2">
        <label><input type="radio" name="gender" value='F' <?php if ($gender == 'F') { echo 'checked="checked"'; } ?>>
        F</label>
        </div>
        <div class="radio control-label col-sm-2">
        <label><input type="radio" name="gender" value='Other' <?php if ($gender == 'Other') { echo 'checked="checked"'; } ?>>
        Other</label>
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
        <label class="control-label col-sm-2" for="pwd">Confirme senha:</label>
        <div class="col-sm-10">          
            <input type="password" class="form-control" id="confpwd" placeholder="Confirme a senha" name="passcon"
            value="<?php if($pass_set) echo "$pass";?>"
            >
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
