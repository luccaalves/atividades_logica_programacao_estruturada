<?php

require_once 'function.php';

if (isset($_POST['btnContar'])) {
    $nome = $_POST['nome'];
    $sobre = $_POST['sobrenome'];

    if ($nome == '' || $sobre == '') {
        $msgError = 'Preencher todos os Campos Obrigatorios';
    }

    $qtdnome = ContarCaracteres($nome);
    $qtdsobre = ContarCaracteres($sobre);
    $qtdtotal = SomarCaracteresTotal($qtdnome, $qtdsobre);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="exemplo2.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Sobrenome:</label>
        <input type="text" name="sobrenome" value="<?= isset($sobre) ? $sobre : '' ?>">
        <br><br>
        <button name="btnContar">Contar Caracteres</button>
        <hr>
    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
    <hr>
    <?php if(isset($qtdnome) && $qtdnome != '' 
    && (isset($qtdsobre) && $qtdsobre != '')){ ?>
        <span>Quantidade Caracteres Nome:</span>
        <input disabled value="<?= isset($qtdnome) ? $qtdnome : '' ?>">
        <br>
        <span>Quantidade Caracteres Sobrenome:</span>
        <input disabled value="<?= isset($qtdsobre) ? $qtdsobre : '' ?>">
        <br>
        <span>Quantidade Caracteres Total:</span>
        <input disabled value="<?= isset($qtdtotal) ? $qtdtotal : '' ?>">
    <?php } ?>

</body>

</html>