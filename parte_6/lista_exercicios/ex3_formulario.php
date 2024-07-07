<?php

if (isset($_POST['btn_enviar'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $assunto = $_POST['assunto'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    echo 'Sua Mensagem foi enviada com Sucesso!' . '<br>Nome: ' . $nome . '<br>Sobrenome: ' . $sobrenome . '<br>Assunto: ' . $assunto  . '<br>E-mail: ' . $email  . '<br>Mensagem: ' . $mensagem;
}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ex3_formulario.php" method="post">
        <label>Nome:</label>
        <input name="nome">
        <br>
        <label>Sobrenome:</label>
        <input name="sobrenome">
        <br>
        <label>Assunto:</label>
        <input name="assunto">
        <br>
        <label>E-mail:</label>
        <input type="email" name="email">
        <br>
        <label>Mensagem:</label>
        <textarea rows="4" name="mensagem"></textarea>
        <br>
        <button name="btn_enviar">ENVIAR</button>
    </form>
</body>

</html>