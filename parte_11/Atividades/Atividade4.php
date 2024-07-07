<?php

require_once './function.php';

if(isset($_POST['btnCalcular'])){
    $jan = trim ($_POST['jan']);
    $fev = trim ($_POST['fev']);
    $mar = trim ($_POST['mar']);
    $abr = trim ($_POST['abr']);
    $mai = trim ($_POST['mai']);
    $jun = trim ($_POST['jun']);
    $jul = trim ($_POST['jul']);
    $ago = trim ($_POST['ago']);
    $set = trim ($_POST['set']);
    $out = trim ($_POST['out']);
    $nov = trim ($_POST['nov']);
    $dez = trim ($_POST['dez']);

    if(SomarMeses($jan, $fev, $mar, $abr, $mai, $jun, $jul, $ago, $set, $out, $nov, $dez) == 0){
        $msgError = 'Preencher Todos os Campos Obrigatorios!';
    }else{
        $resultado = SomarMeses ($jan, $fev, $mar, $abr, $mai, $jun, $jul, $ago, $set, $out, $nov, $dez);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<form action="Atividade4.php" method="POST">
    <label>Ganho mês Janeiro: </label>
    <br>
    <input type="text" name="jan" value="<?= isset($jan) ? $jan : '' ?>">
    <br>
    <label>Ganho mês Fevereiro: </label>
    <br>
    <input type="text" name="fev" value="<?= isset($fev) ? $fev : '' ?>">
    <br>
    <label>Ganho mês Março: </label>
    <br>
    <input type="text" name="mar" value="<?= isset($mar) ? $mar : '' ?>">
    <br>
    <label>Ganho mês Abril: </label>
    <br>
    <input type="text" name="abr" value="<?= isset($abr) ? $abr : '' ?>">
    <br>
    <label>Ganho mês Maio: </label>
    <br>
    <input type="text" name="mai" value="<?= isset($mai) ? $mai : '' ?>">
    <br>
    <label>Ganho mês Junho: </label>
    <br>
    <input type="text" name="jun" value="<?= isset($jun) ? $jun : '' ?>">
    <br>
    <label>Ganho mês Julho: </label>
    <br>
    <input type="text" name="jul" value="<?= isset($jul) ? $jul : '' ?>">
    <br>
    <label>Ganho mês Agosto: </label>
    <br>
    <input type="text" name="ago" value="<?= isset($ago) ? $ago : '' ?>">
    <br>
    <label>Ganho mês Setembro: </label>
    <br>
    <input type="text" name="set" value="<?= isset($set) ? $set : '' ?>">
    <br>
    <label>Ganho mês Outubro: </label>
    <br>
    <input type="text" name="out" value="<?= isset($out) ? $out : '' ?>">
    <br>
    <label>Ganho mês Novembro:</label>
    <br>
    <input type="text" name="nov" value="<?= isset($nov) ? $nov : '' ?>">
    <br>
    <label>Ganho mês Dezembro: </label>
    <br>
    <input type="text" name="dez" value="<?= isset($dez) ? $dez : '' ?>">
    <br><br>
    <button name="btnCalcular">CALCULAR</button>
    <hr>
</form>
<span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
<?php if(isset ($resultado) && $resultado != ''): ?>
    <span>Resultado Final: R$ <?= isset($resultado) ? number_format($resultado, 2, ',', '.') : '' ?></span>
<?php endif; ?>    
    
</body>
</html>