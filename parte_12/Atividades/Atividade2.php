<?php

require_once './Class.php';

if(isset($_POST['btnCalcular'])){
    $num = $_POST['num'];
    $temp = $_POST['temp'];

    $objtemperatura = new Convercao();
    $resultado = $objtemperatura -> Converter($num, $temp);

    if($resultado ==0){
        $msgError = "Preencher todos os Campos Obrigatórios!";
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
<form method="post" action="Atividade2.php">
    <label>Digite um número:</label>
    <br>
    <input type="text" name="num" value="<?=isset($num) ? $num : '' ?>">
    <br>
    <select name="temp">
        <option value="" >Selecione</option>
        <option value="celsius">Celsius/Fahrenheit</option>
        <option value="fahrenheit">Fahrenheit/Celsius</option>
    </select>
    <br><br>
    <button name="btnCalcular">CONVERTER</button>
    <hr>   
</form>
<span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
<?php if (isset($resultado) && $resultado != '' && $resultado != 0){ ?>
    <span><strong>Resultado:</strong></span>
    <input disabled value="<?= isset($resultado) ? number_format($resultado, '1','.') : '' ?>">
<?php } ?>
    
</body>
</html>