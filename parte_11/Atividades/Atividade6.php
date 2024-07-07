<?php
require_once './function.php';

if(isset($_POST['btnCalcular'])){
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);
    $num3 = trim($_POST['num3']);
    $num4 = trim($_POST['num4']);
    $num5 = trim($_POST['num5']);
    $num6 = trim($_POST['num6']);
    $num7 = trim($_POST['num7']);
    $num8 = trim($_POST['num8']);
    $num9 = trim($_POST['num9']);
    $num10 = trim($_POST['num10']);

    if(CalcularValores ($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10) == 0){
        $msgError = 'Preencher Todos os Campos Obrigatorios!';
    }else{
        $resultado = CalcularValores ($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<form action="Atividade6.php" method="post">
    <label>Primeiro Número: </label>
    <br>
    <input type="text" name="num1" value="<?= isset($num1) ? $num1 : '' ?>">
    <br>
    <label>Segundo Número: </label>
    <br>
    <input type="text" name="num2" value="<?= isset($num2) ? $num2 : '' ?>">
    <br>
    <label>Terceiro Número: </label>
    <br>
    <input type="text" name="num3" value="<?= isset($num3) ? $num3 : '' ?>">
    <br>
    <label>Quarto Número: </label>
    <br>
    <input type="text" name="num4" value="<?= isset($num4) ? $num4 : '' ?>">
    <br>
    <label>Quinto Número: </label>
    <br>
    <input type="text" name="num5" value="<?= isset($num5) ? $num5 : '' ?>">
    <br>
    <label>Sexto Número: </label>
    <br>
    <input type="text" name="num6" value="<?= isset($num6) ? $num6 : '' ?>">
    <br>
    <label>Sétimo Número: </label>
    <br>
    <input type="text" name="num7" value="<?= isset($num7) ? $num7 : '' ?>">
    <br>
    <label>Oitavo Número: </label>
    <br>
    <input type="text" name="num8" value="<?= isset($num8) ? $num8 : '' ?>">
    <br>
    <label>Nono Número: </label>
    <br>
    <input type="text" name="num9" value="<?= isset($num9) ? $num9 : '' ?>">
    <br>
    <label>Décimo Número: </label>
    <br>
    <input type="text" name="num10" value="<?= isset($num10) ? $num10 : '' ?>">
    <br><br>
    <button name="btnCalcular">CALCULAR</button>
    <hr>
</form>
<span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span> 
<?php if (isset($resultado) && $resultado != '' ) { ?>
<span>Resultado: </span>
<input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
<?php } ?>
</body>
</html>