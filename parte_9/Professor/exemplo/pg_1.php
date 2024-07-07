<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $idade = $_POST['idade'];
        $cidade = trim($_POST['city']);

        if($nome == '' || $idade == '' || $cidade == ''){
            $msgError = 'Preencher todos os campos Obrigatórios!';
        }else if(!is_numeric($idade)){
            $msgError = 'Preencher apenas números no campo Idade!';
        }else{
            header("location: pg_2.php?pessoa=$nome&idade=$idade&local=$cidade");
            exit;
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="pg_1.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Digite sua Idade:</label>
        <input type="number" name="idade" value="<?= isset($idade) ? $idade : '' ?>">
        <br>
        <label>Digite sua Cidade:</label>
        <input type="text" name="city" value="<?= isset($cidade) ? $cidade : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <span style="color: #FF0000;"><?= isset($msgError) ? $msgError : '' ?></span>
</body>
</html>