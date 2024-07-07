<?php 

    require_once './function.php';

if(isset($_POST['btnCalcular'])){
    $salario = trim($_POST ['salario']);
    $aumento = trim($_POST ['aumento']);

    if(CalcularSalario($salario, $aumento) == 0){
        $msgError =  'Preencher Campos Obrigatorios!';
    }else{
        $resultado = CalcularSalario($salario, $aumento);
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
<form action="Atividade2.php" method="post">
    <label>Digite seu Sálario:</label>
    <input type="text" name="salario" value="<?= isset($salario) ? $salario : '' ?>">
    <br>
    <label>Digite seu Aumento:</label>
    <input type="text" name="aumento" value="<?= isset($aumento) ? $aumento : '' ?>">
    <br>
    <button name="btnCalcular">CALCULAR</button>
    <hr>
</form>
<span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
<?php if(isset($resultado) && $resultado != ''): ?>
        <span>Resultado Final: R$ <?= isset($resultado) ? number_format($resultado, 2, ',', '.') : '' ?></span>
<?php endif; ?>
    
</body>
</html>