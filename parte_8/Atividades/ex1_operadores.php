<?php
if(isset($_POST['btn_Calcular'])){
    $num1 = trim($_POST ['num1']);
    $num2 = trim($_POST ['num2']);
    $num3 = trim($_POST ['num3']);
    $num4 = trim($_POST ['num4']);
    $num5 = trim($_POST ['num5']);

    if($num1 == null || $num2 == null || $num3 == null || $num4 == null || $num5 == null ){
        $msgError = '<div style="color : #ff0000"> Preencher Campos Obrigátorios!</div>';
    }else{

        $resultado = (($num1 + $num2) * 2) + $num3 + $num4 + $num5;
        
        if($resultado > 100){
            $status = '<div style="color: #006400"> O Resultado é maior do que 100!</div>';
        }else if($resultado < 100){
            $status = '<div style="color: #006400"> O Resultado é menor do que 100!</div>';
        }else {
            $status = '<div style="color: #006400"> O Resultado é igual a 100!</div>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
    <form action="ex1_operadores.php" method="post">
        <label>Número 1: </label>
        <input type="text" name="num1" value="<?= isset ($num1) ? $num1 : '' ?>">
        <br>
        <label>Número 2: </label>
        <input type="text" name="num2" value="<?= isset ($num2) ? $num2 : '' ?>">
        <br>
        <label>Número 3: </label>
        <input type="text" name="num3" value="<?= isset ($num3) ? $num3 : '' ?>">
        <br>
        <label>Número 4: </label>
        <input type="text" name="num4" value="<?= isset ($num4) ? $num4 : '' ?>">
        <br>
        <label>Número 5: </label>
        <input type="text" name="num5" value="<?= isset ($num5) ? $num5 : '' ?>">
        <br>
        <button name="btn_Calcular">CALCULAR</button>
        <br>
        <input disabled value="<?= isset ($resultado) ? $resultado : '' ?>">
    </form>
    <?= isset ($msgError) ? $msgError : '' ?>
    <?= isset ($status) ? $status : '' ?>   
</body>
</html>