<?php
require_once './Calculo.php';

if(isset($_POST ['btnCalcular'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST ['operacao'];

        $objcalc = new Calculo();
        $resultado = $objcalc -> CalcularCalculadora($num1, $num2, $operacao);
    
    if($resultado == 0){
        $msgError =  'Preencher Todos os Campos Obrigatorios!';}
    
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
    <form method="post" action="exemplo2.php">
        <label>Número 1: </label>
        <br>
        <input type="text" name="num1" value="<?= isset($num1) ? $num1 : '' ?> ">
        <br><br>
        <select name="operacao">
          <option value="">SELECIONE</option>
          <option value="+">Somar</option>  
          <option value="*">Multiplicar</option>  
          <option value="/">Dividir</option>  
          <option value="-">Subitrair</option>  
        </select>
        <br><br>
        <label>Número 2:</label>
        <br>
        <input type="text" name="num2" value="<?= isset($num2) ? $num2 : '' ?> ">
        <br><br>
        <button name="btnCalcular">CALCULAR</button>
        <hr>
        
    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
    <?php if (isset($resultado) && $resultado != '' && $resultado != 0) { ?>
        <span><strong>Resultado:</strong></span>
        <input disabled value=" <?= isset($resultado) ? $resultado : '' ?>">
    <?php } ?>
</body>
</html>