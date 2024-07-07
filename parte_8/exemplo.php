<?php
if (isset($_POST['btn_enviar'])) {
    $nome = trim($_POST['nome']);
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);


    /*if ($nome == '' || $num1 == '' || $num2 == '') {
        echo "Preencher Campos Obrigatorios";
    }*/
    if($nome == ''){
    $msgError = '<div style= "color: #FF0000;"> " Prencher Campo Obrigatorio Nome!</div>';
}elseif ($num1 == ''){
    $msgError = '<div style= "color: #FF0000"> "Preencher Campo Obrigatorio Primeiro Número!</div>';
}elseif ($num2 == ''){
    $msgError = '<div style= "color: #FF0000"> "Preencher Campo Obrigatorio Segundo Número!</div>';
}

$resultado = $num1 + $num2;

}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>

<body>
    <form action="exemplo.php" method="post">
        <label>Digite seu Nome: </label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Digite o Primeiro Número: </label>
        <input type="text" name="num1" value="<?= isset($num1) ?  $num1 : '' ?>">
        <br>
        <label>Digite o Segundo Número: </label>
        <input type="text" name="num2" value="<?= isset($num2) ? $num2 : '' ?>">
        <br>
        <button name="btn_enviar">ENVIAR</button>
    </form>
    <?= isset ($msgError) ? $msgError : '' ?>
    <span>RESULTADO FINAL:</span>
    <input disabled  value="<?= isset ($resultado) ? $resultado : '' ?>">
</body>

</html>