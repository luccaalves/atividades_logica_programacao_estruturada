<?php

    $janeiro = '';
    $fevereiro = '';
    $marco = '';
    $abril = '';
    $maio = '';
    $junho = '';
    $julho = '';
    $agosto = '';
    $setembro = '';
    $outubro = '';
    $novembro = '';
    $dezembro = '';
    $resultado = '';

    if(isset($_POST['btnSomar'])){
        $janeiro = trim($_POST['janeiro']);
        $fevereiro = trim($_POST['fevereiro']);
        $marco = trim($_POST['marco']);
        $abril = trim($_POST['abril']);
        $maio = trim($_POST['maio']);
        $junho = trim($_POST['junho']);
        $julho = trim($_POST['julho']);
        $agosto = trim($_POST['agosto']);
        $setembro = trim($_POST['setembro']);
        $outubro = trim($_POST['outubro']);
        $novembro = trim($_POST['novembro']);
        $dezembro = trim($_POST['dezembro']);

        $resultado = $janeiro + $fevereiro + $marco + $abril + $maio + $junho + $julho + $agosto + $setembro + $outubro + $novembro + $dezembro;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_1.php" method="POST">
        <label>Valor de Janeiro:</label>
        <input type="text" name="janeiro" value="<?= $janeiro ?>">
        <br>
        <label>Valor de Fevereiro:</label>
        <input type="text" name="fevereiro" value="<?= $fevereiro ?>">
        <br>
        <label>Valor de Março:</label>
        <input type="text" name="marco" value="<?= $marco ?>">
        <br>
        <label>Valor de Abril:</label>
        <input type="text" name="abril" value="<?= $abril ?>">
        <br>
        <label>Valor de Maio:</label>
        <input type="text" name="maio" value="<?= $maio ?>">
        <br>
        <label>Valor de Junho:</label>
        <input type="text" name="junho" value="<?= $junho ?>">
        <br>
        <label>Valor de Julho:</label>
        <input type="text" name="julho" value="<?= $julho ?>">
        <br>
        <label>Valor de Agosto:</label>
        <input type="text" name="agosto" value="<?= $agosto ?>">
        <br>
        <label>Valor de Setembro:</label>
        <input type="text" name="setembro" value="<?= $setembro ?>">
        <br>
        <label>Valor de Outubro:</label>
        <input type="text" name="outubro" value="<?= $outubro ?>">
        <br>
        <label>Valor de Novembro:</label>
        <input type="text" name="novembro" value="<?= $novembro ?>">
        <br>
        <label>Valor de Dezembro:</label>
        <input type="text" name="dezembro" value="<?= $dezembro ?>">
        <br>
        <button name="btnSomar">CALCULAR</button>
    </form>
    <span>Resultado Final:</span>
    <input disabled value="<?= $resultado ?>">
</body>
</html>