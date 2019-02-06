<!DOCTYPE html>
<html>
<head>
  <title>Fopor's Site</title>
</head>

<body>
  <h1>Fopor's Website Title</h1>
  <h2>Fopor's Website's subtitle</h2>

  <form method="post">
    Nome: <input type="text" name="nome"> <br>
    Sexo: <input type="radio" name="sexo" value="F">Feminino
    <input type="radio" name="sexo" value="M">Masculino
    <input type="radio" name="sexo" value="0">Outro
    <br>
    <br>
    Onde encontrou? <br>
    <input type="checkbox" name="onde[]" value="Google" checked="checked"> na casa da sua mãe<br>
    <input type="submit" value="Envia">
  </form>
</body>

<?php
var_dump($_POST);
?>

</html>

