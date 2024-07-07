<?php
require_once './Calculo.php';

if(isset($_POST['btnSomar'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $objcalculo = new Calculo();
    $resultado = $objcalculo -> SomarNumeros($num1, $num2, $num3);

    if($resultado == 0){
        $msgError ="Preencher Todos os Campos Obrigatórios!";
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
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form method="post" action="exemplo1.php">
        <label>Numero 1: </label>
        <br>
        <input type="number" name="num1" value="<?= isset($num1) ? $num1 : '' ?>">
        <br>
        <label>Numero 2: </label>
        <br>
        <input type="number" name="num2" value="<?= isset($num2) ? $num2 : '' ?>">
        <br>
        <label>Numero 3: </label>
        <br>
        <input type="number" name="num3" value="<?= isset($num3) ? $num3 : '' ?>">
        <br><br>
        <button name="btnSomar">SOMAR</button>
        <br> <hr>
    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span><br>
    <?php if (isset($resultado) && $resultado != '' && $resultado != 0) { ?>
        <span><strong>Resultado:</strong></span>
        <input disabled value=" <?= isset($resultado) ? $resultado : '' ?>">
    <?php } ?>
</body>
</html>