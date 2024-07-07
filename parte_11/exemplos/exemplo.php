<?php

require_once 'function.php';

if(isset($_POST['btnSomar'])){
    $valor1 = $_POST['vl1'];
    $valor2 = $_POST['vl2'];

    if(SomarExemplo($valor1, $valor2) == 0){
        $msgError = 'Preencher Todos os Campos Obrigatorios!';
    }else{
        $resultado = SomarExemplo($valor1, $valor2);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="exemplo.php" method="POST">
        <label>Primeiro Valor:</label>
        <input type="number" name="vl1" value="<?= isset($valor1) ? $valor1 : '' ?>">
        <br>
        <label>Segundo Valor:</label>
        <input type="number" name="vl2" value="<?= isset($valor2) ? $valor2 : '' ?>">
        <br>
        <button name="btnSomar">SOMAR</button>
    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
    <?php if(isset($resultado) && $resultado != ''){ ?>
        <hr>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    <?php } ?>
</body>
</html>