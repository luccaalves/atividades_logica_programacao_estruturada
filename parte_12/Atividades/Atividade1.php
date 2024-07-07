<?php

require_once './Class.php';

if(isset($_POST['btnCalcular'])){
    $combustivel = $_POST['combustivel'];
    $qtdtotal = $_POST['qtdtotal'];

    $objcombustivel = new Combustivel();
    $resultado = $objcombustivel -> CalcularTotalLitros($combustivel, $qtdtotal);

    if($resultado == 0){
        $msgError = "Preencher todos os Campos Obrigatórios!";
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
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<form action="Atividade1.php" method="post">
    <label>Selecione o Combustivel:</label>
    <select name="combustivel">
        <option value="">Selecione</option>
        <option value="gas">Gasolina</option>
        <option value="eta">Etanol</option>
    </select>
    <br>
    <label>Quantidade de Litros Total:</label>
    <input type="number" name="qtdtotal" value="<?=isset ($qtdtotal) ? $qtdtotal : '' ?>">
    <br>
    <button name="btnCalcular">CALCULAR</button>
</form>
<span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
<?php if(isset($resultado) && $resultado != '' && $resultado != 0){?>
    <span><strong>Total Final:</strong></span>
    <input disabled value="R$<?= isset($resultado) ? number_format($resultado, '2', ',','.') : '' ?>">
<?php } ?>   
    
</body>
</html>