<?php

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $usuario = strtoupper(trim($_POST["usuario"]));
    $senha = trim($_POST["senha"]);

    if (empty($usuario) || empty($senha)){
        $mensagem = "Inválido: O nome de usuário e a senha são obrigatórios.";
    }

    elseif(strlen($usuario) < 4 || strlen($usuario) > 15){
        $mensagem = "Inválido: O usuário deve ter entre 4 a 15 caracteres.";
    }

    elseif(strlen($senha) < 4 || strlen($senha) > 15){
        $mensagem = "Inválido: A senha deve ter entre 4 a 15 caracteres.";
    }

    elseif(
        ($usuario != "PROFESSOR" && $usuario != "COORDENADOR") || $senha != "DEVISATE"){
            $mensagem = "Inválido: Usuário ou senha inválidos.";
        }

        else{
            $data = date("d/m/Y H:i");
            $mensagem = "Bem-vindo, $usuario! Você realizou o acesso no dia $data .";
        }
}
?>

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
    Senha : <input type="password" name="senha"><br><br>
    <button type="submit">Entrar</button>
</form>

<br>
<strong><?php echo $mensagem; ?></strong>
    
</body>
</html>
