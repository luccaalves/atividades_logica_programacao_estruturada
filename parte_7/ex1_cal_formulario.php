<?php

$numero1 = '';
$numero2 = '';
$numero3 = '';
$numero4 = '';
$numero5 = '';
$numero6 = '';
$numero7 = '';
$numero8 = '';
$numero9 = '';
$numero10 = '';
$numero11 = '';
$numero12 = '';
$soma = '';

if (isset($_POST['btn_somar'])) {
    $numero1 = trim($_POST['n1']);
    $numero2 = trim($_POST['n2']);
    $numero3 = trim($_POST['n3']);
    $numero4 = trim($_POST['n4']);
    $numero5 = trim($_POST['n5']);
    $numero6 = trim($_POST['n6']);
    $numero7 = trim($_POST['n7']);
    $numero8 = trim($_POST['n8']);
    $numero9 = trim($_POST['n9']);
    $numero10 = trim($_POST['n10']);
    $numero11 = trim($_POST['n11']);
    $numero12 = trim($_POST['n12']);


    $soma = $numero1 + $numero2 + $numero3 + $numero4 + $numero5 + $numero6 + $numero7 + $numero8 + $numero9 + $numero10 + $numero11 + $numero12;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post" action="ex1_cal_formulario.php">

        <label>Ganho de Janeiro</label>
        <input type="text" name="n1" value="<?= $numero1 ?>">
        <br>
        <label>Ganho de Fevereiro</label>
        <input type="text" name="n2" value="<?= $numero2 ?>">
        <br>
        <label>Ganho de Março</label>
        <input type="text" name="n3" value="<?= $numero3 ?>">
        <br>
        <label>Ganho de Abril</label>
        <input type="text" name="n4" value="<?= $numero4 ?>">
        <br>
        <label>Ganho de Maio</label>
        <input type="text" name="n5" value="<?= $numero5 ?>">
        <br>
        <label>Ganho de Junho</label>
        <input type="text" name="n6" value="<?= $numero6 ?>">
        <br>
        <label>Ganho de Julho</label>
        <input type="text" name="n7" value="<?= $numero7 ?>">
        <br>
        <label>Ganho de Agosto</label>
        <input type="text" name="n8" value="<?= $numero8 ?>">
        <br>
        <label>Ganho de Setembro</label>
        <input type="text" name="n9" value="<?= $numero9 ?>">
        <br>
        <label>Ganho de Outubro</label>
        <input type="text" name="n10" value="<?= $numero10 ?>">
        <br>
        <label>Ganho de Novembro</label>
        <input type="text" name="n11" value="<?= $numero11 ?>">
        <br>
        <label>Ganho de Dezembro</label>
        <input type="text" name="n12" value="<?= $numero12 ?>">
        <br>
        <button name="btn_somar">Somar</button>
        <br>
        <label>Total de Ganho Anual</label>
        <input disabled value="<?= $soma ?>">

    </form>



</body>

</html>