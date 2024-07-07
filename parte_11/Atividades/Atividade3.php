<?php

require_once './function.php';

if(isset($_POST['btnCalcular'])){
    $valor1 = ($_POST['num1']);
    $valor2 = ($_POST['num2']);
    $valor3 = ($_POST['num3']);
    $valor4 = ($_POST['num4']);
    $valor5 = ($_POST['num5']);

    if (CalcularNumeros($valor1, $valor2, $valor3, $valor4, $valor5) == 0){
        $msgError = 'Preencher todos Campos Obrigatorios!';
    }else{
        $resultado = CalcularNumeros($valor1, $valor2, $valor3, $valor4, $valor5);
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<form action="Atividade3.php" method="POST">
    <label>Número 1:</label>
    <br>
    <input type="text" name="num1" value="<?= isset($num1) ? $num1 : '' ?>">
    <br>
    <label>Número 2:</label>
    <br>
    <input type="text" name="num2" value="<?= isset($num2) ? $num2 : '' ?>">
    <br>
    <label>Número 3:</label>
    <br>
    <input type="text" name="num3" value="<?= isset($num3) ? $num3 : '' ?>">
    <br>
    <label>Número 4:</label>
    <br>
    <input type="text" name="num4" value="<?= isset($num4) ? $num4 : '' ?>">
    <br>
    <label>Número 5:</label>
    <br>
    <input type="text" name="num5" value="<?= isset($num5) ? $num5 : '' ?>">
    <br>
    <button name="btnCalcular">CALCULAR</button>
    <hr>
</form>
<span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
<?php if(isset($resultado) && $resultado != '')?>
<?php if(isset($resultado) && $resultado != ''): ?>
        <span>Resultado Final: R$ <?= isset($resultado) ? number_format($resultado, 2, ',', '.') : '' ?></span>
<?php endif; ?>
    
</body>
</html>