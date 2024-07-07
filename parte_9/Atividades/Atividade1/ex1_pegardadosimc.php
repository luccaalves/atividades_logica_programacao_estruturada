<?php
if (isset($_POST['btnCalcular'])) {
    $nome = trim($_POST['nome']);
    $peso = trim($_POST['peso']);
    $altura = trim($_POST['altura']);

    if ($nome == '' || $peso == '' || $altura == '') {
        $msgError = 'Preencher Campos Obrigatórios!';
    } else {
    

        header("location:ex1_mostrardadosimc.php?nome=$nome&peso=$peso&altura=$altura");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>

<body>
    <form action="ex1_pegardadosimc.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?= isset ($nome) ? $nome : '' ?>">
        <br>
        <label>Peso:</label>
        <input type="text" name="peso" value="<?= isset($peso) ? $peso : '' ?>">
        <br>
        <label>Altura:</label>
        <input type="text" name="altura" value="<?= isset($altura) ? $altura : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
        <br>
    </form>
    <span style="color:#ff0000"><?= isset ($msgError) ? $msgError : '' ?></span>
</body>
</html>