<?php
if (isset($_POST['btnCalcular'])) {
    $bimestre1 = trim($_POST['bimestre1']);
    $bimestre2 = trim($_POST['bimestre2']);
    $bimestre3 = trim($_POST['bimestre3']);
    $bimestre4 = trim($_POST['bimestre4']);

    if ($bimestre1 == '' || $bimestre2 == '' || $bimestre3 == '' || $bimestre4 == '') {
        $msgError = '<div style="color:#ff0000"> Preencher Campos Obrigatórios! <div/>';
    } else {
        $resultado1 = $bimestre1 + $bimestre2 + $bimestre3 + $bimestre4;
        $resultado2 = $resultado1 / 4;

        if ($resultado2 <= 39) {
            $status = '<div style="color:#ff0000"> Reprovado!</div>';
        } elseif ($resultado2 >= 40 && $resultado2 <= 59) {
            $status = '<div style="color:#ff8c00">Exame!</div>';
        } elseif ($resultado2 >= 60 && $resultado2 <= 100) {
            $status = '<div style="color:#006400">Aprovado!</div>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>

<body>
    <form action="ex3_operadores.php" method="post">
        <label>1° Bimestre</label>
        <input type="" name="bimestre1" value="<?= isset($bimestre1) ? $bimestre1 : '' ?>">
        <br>
        <label>2° Bimestre</label>
        <input type="" name="bimestre2" value="<?= isset($bimestre2) ? $bimestre2 : '' ?>">
        <br>
        <label>3° Bimestre</label>
        <input type="" name="bimestre3" value="<?= isset($bimestre3) ? $bimestre3 : '' ?>">
        <br>
        <label>4° Bimestre</label>
        <input type="" name="bimestre4" value="<?= isset($bimestre4) ? $bimestre4 : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
        <br>
        <input disabled value="<?= isset($resultado2) ? $resultado2 : '' ?>">
        <?= isset($msgError) ? $msgError : '' ?>
        <?= isset($status) ? $status : '' ?>

    </form>

</body>

</html>