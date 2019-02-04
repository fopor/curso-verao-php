<?php
    $PAGE_NAME = 'login';
    $TITLE_NAME = 'Bem-vindo';
?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body>
<?php include('bar.php'); ?>
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
