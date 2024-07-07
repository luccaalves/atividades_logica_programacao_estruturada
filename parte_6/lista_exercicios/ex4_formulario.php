<?php

if (isset($_POST['btn_enviar'])) {
    $data = $_POST['data'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
   

    echo 'Londrina, ' . $data . ' ' .'de' . ' ' . $mes . ' de' . ' ' . $ano;
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
    <form action="ex4_formulario.php" method="post">
        <label>Data de Hoje:</label>
        <input name="data">
        <br>
        <label>Mês atual:</label>
        <input name="mes">
        <br>
        <label>Ano Atual:</label>
        <input name="ano">
        <br>

        <button name="btn_enviar">ENVIAR</button>
    </form>
</body>

</html>