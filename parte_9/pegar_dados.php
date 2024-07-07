<?php

if (isset($_POST['btn_mostrar'])) {
    $nome = $_POST['nome_usuario'];
    $sobre = $_POST['sobrenome_usuario'];

    if ($nome == '' || $sobre == '') {
        $msgError = '<span style="color:#ff0000"> Preencher Campos Obrigátorios!</span>';
    } else {

        header("location: mostrar_dados.php?nome=$nome&sobrenome=$sobre");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
    <form action="pegar_dados.php" method="post">
        <label>Nome:</label>
        <input name="nome_usuario" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Sobrenome:</label>
        <input name="sobrenome_usuario" value="<?= isset($sobre) ? $sobre : '' ?>">
        <br>
        <button name="btn_mostrar">Mostrar</button>

    </form>
    <?= isset($msgError) ? $msgError : '' ?>

</body>

</html>