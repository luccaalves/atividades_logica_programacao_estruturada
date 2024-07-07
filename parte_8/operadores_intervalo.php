<?php

if (isset($_POST['btn_verificar'])) {
    $inicial = trim($_POST['inicial']);
    $meio = trim($_POST['meio']);
    $final = trim($_POST['final']);

    if (trim($inicial) == '') {
        echo "Preencher o campo INICIAL";
    } else if (trim($meio) == '') {
        echo "Preencher o campo MEIO";
    } else if (trim($final) == '') {
        echo "Preencher o campo FINAL";
    } else {
        if ($inicial <= $meio && $meio <= $final) {
            echo "O número $meio está entre $inicial e $final";
        } else {
            echo "O número $meio NÃO está entre $inicial e $final";
        }
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

<body>
    <form method="post" action="operadores_intervalo.php">
        <label>INICIAL</label>
        <input type="" name="inicial" value="<?= isset($num1) ? $num1  : '' ?>">
        <label>MEIO</label>
        <input type="" name="meio" value="<?= isset($num2) ? $num2 : '' ?>">
        <label>FINAL</label>
        <input type="" name="final" value="<?= isset($num3) ? $num3 : '' ?>">
        <br>
        <button name="btn_verificar">VERIFICAR</button>
    </form>

</body>

</html>