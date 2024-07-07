<?php

    // $_POST é um array para trafego de dados (http / https)!
    // var_dump($_POST);

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $altura = trim($_POST['altura']);
        $peso = trim($_POST['peso']);

        if($nome == '' || $altura == '' || $peso == ''){
            $msgError = 'Preencher todos os campos Obrigatórios!';
        }else{
            // O GET sera realizado via PHP e não por HTML.
            header("location: pagina_2.php?pessoa=$nome&tamanho=$altura&massa=$peso");
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
    <form action="pagina_1.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Digite sua Altura:</label>
        <input type="text" name="altura" value="<?= isset($altura) ? $altura : '' ?>">
        <br>
        <label>Digite seu Peso:</label>
        <input type="text" name="peso" value="<?= isset($peso) ? $peso : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <span style="color: #FF0000;"><?= isset($msgError) ? $msgError : '' ?></span>
</body>
</html>