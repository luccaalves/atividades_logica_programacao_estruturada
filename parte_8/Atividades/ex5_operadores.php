<?php
if (isset($_POST['btnCalcular'])) {
    $peso = trim($_POST['peso']);
    $altura = trim($_POST['altura']);

    if ($peso == '' || $altura == '') {
        $msgError = '<span style="color:#ff0000">Preencher Campos Obrigatórios!</span>';
    } else {
        $resultado = round($peso / ($altura * $altura), 2);
    }
    if ($resultado <= 0){
        $status = '<span style="color: #FF4500;">Calculo Errado!</span>';
    }
    else if($resultado > 0 && $resultado <= 20) {
        $status = '<span style="color:#006400">Magro.</span>';
    } else if ($resultado >= 20 && $resultado <= 25) {
        $status = '<span style="color:#006400">Peso Ideal!</span>';
    } else if ($resultado >= 25 && $resultado <= 30) {
        $status = '<span style="color:#006400">Obeso!</span>';
    } else {
        $status = '<span style="color:#006400">Muito Obeso!</span>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>

<body>
    <form action="ex5_operadores.php" method="post">
        <label>Peso</label>
        <input type="text" name="peso" value="<?= isset($peso) ? $peso : '' ?>">
        <br>
        <label>Altura</label>
        <input type="text" name="altura" value="<?= isset($altura) ? $altura : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
        <br>
    </form>
<?= isset ($msgError) ? $msgError : '' ?>
<?php if(isset($resultado) && $resultado != '' && isset($status) && $status != '') : ?>
    <strong>Resultado do IMC: </strong><?= isset($resultado) ? $resultado : '' ?>
    <br>
    <strong>Situação: </strong><?= isset($status) ? $status : '' ?>
    <?php endif; ?>
</body>
</html>