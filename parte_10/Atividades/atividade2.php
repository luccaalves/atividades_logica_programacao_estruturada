<?php
$fruta = array();

if(isset($_POST['btnMostrar'])){
    $fruta1 = trim($_POST['fruta1']);
    $fruta2 = trim($_POST['fruta2']);
    $fruta3 = trim($_POST['fruta3']);
    $fruta4 = trim($_POST['fruta4']);
    $fruta5 = trim($_POST['fruta5']);

    if($fruta1 == '' || $fruta2 == '' || $fruta3 == '' || $fruta4 == '' || $fruta5 == '' ){
        $msgError = 'Preencher Todos os Campos Obrigatorios!';
    }else{
        $frutas = array($fruta1, $fruta2 ,$fruta3, $fruta4, $fruta5);

        for($i=0; $i < count($frutas); $i++){
            echo 'A fruta digitada foi ' . $frutas[$i] . '. Posição Renderizda ' . $i . '<br>';     
        }
        echo '<hr>';
    }
}

echo 'TOTAL ' . count($fruta) . '<br>';

for($i=0; $i< count($fruta); $i++){
    echo 'As frutas armazenadas são: ' . $fruta[$i] . '<br>'; 
}
var_dump($fruta)



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade2.php" method="post">
        <label>Fruta 1:</label>
        <input type="text" name="fruta1" value="<?= isset($fruta1) ? $fruta1 : '' ?>">
        <br>
        <label>Fruta 2:</label>
        <input type="text" name="fruta2" value="<?= isset($fruta2) ? $fruta2 : '' ?>">
        <br>
        <label>Fruta 3:</label>
        <input type="text" name="fruta3" value="<?= isset($fruta3) ? $fruta3 : '' ?>">
        <br>
        <label>Fruta 4:</label>
        <input type="text" name="fruta4" value="<?= isset($fruta4) ? $fruta4 : '' ?>">
        <br>
        <label>Fruta 5:</label>
        <input type="text" name="fruta5" value="<?= isset($fruta5) ? $fruta5 : '' ?>">
        <br>
        <button name="btnMostrar">CONFIRMAR</button>
    </form>
</body>
</html>