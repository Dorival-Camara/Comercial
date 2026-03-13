<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comercial</title>
</head>
<body>

<h2>Login</h2>

<form method="Post">
    Usuário : <input type="text" name="usuario"><br><br>
    Senha : <input type="passaword" name="senha"><br><br>
    <button type="submit">Entrar</button>
</form>

<br>
<strong><?php echo $mensagem; ?></strong>
    
</body>
</html>
<?php

$mensagem = "";

if ($SERVER["RESQUEST_METHOD"]== "POST"){
    $usuario = strtoupper(trim($_POST["usuario"]));
    $senha = trim($_POST["senha"]);
}
?>