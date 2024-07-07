<?php
if(
    isset($_GET['num1']) && $_GET['num1'] != '' &&
    isset($_GET['num2']) && $_GET['num2'] != '' &&
    isset($_GET['num3']) && $_GET['num3'] != '' &&
    isset($_GET['num4']) && $_GET['num4'] != '' &&
    isset($_GET['num5']) && $_GET['num5'] != ''
 ){
    $numero1 = $_GET['num1'];
    $numero2 = $_GET['num2'];
    $numero3 = $_GET['num3'];
    $numero4 = $_GET['num4'];
    $numero5 = $_GET['num5'];

    $resultado = round(($numero1 + $numero2 +$numero3) / ($numero4 * $numero5), 2);
 }else{
    header('location: dados.php');
    exit;
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
    <strong>Resultado Final: </strong><span style="color: #4969E0;"><?= ($resultado) ? $resultado : ''?></span>
</body>
</html>