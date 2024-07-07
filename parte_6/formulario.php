<?php

if (isset($_POST['btn_mostrar'])) {

    $nome = $_POST['nome_usuario'];
    $sobrenome = $_POST['sobrenome_usuario'];
    $rua = $_POST['rua_usuario'];
    $bairro = $_POST['bairro_usuario'];
    $cep = $_POST['cep_usuario'];

    // echo "Nome completo: $nome $sobrenome <br> Rua: $rua <br>  Bairro: $bairro <br> CEP: $cep";

    echo 'Nome Completo: ' . $nome . ' ' . $sobrenome . '<br>';
    echo 'Rua: ' . $rua . '<br>';
    echo 'Bairro: ' . $bairro . '<br>';
    echo 'CEP: ' . $cep . '<br>' . '<hr>';
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
    <form action="formulario.php" method="post">
        <label>Nome:</label>
        <input name="nome_usuario">
        <br>
        <label>Sobrenome:</label>
        <input name="sobrenome_usuario">
        <br>
        <label>Rua:</label>
        <input name="rua_usuario">
        <br>
        <label>Bairro:</label>
        <input name="bairro_usuario">
        <br>
        <label>CEP:</label>
        <input name="cep_usuario">
        <br>
        <button name="btn_mostrar">Mostrar</button>
    </form>
</body>

</html>