<?php

//isset - EXISTIR!
// ? - ENTÃO!
// : - CASO CONTRÁRIO! 


$soma = '';
$multiplicar = '';
$dividir = '';


if (isset($_POST['btn_calcular'])) {
    $numero1 = trim($_POST['n1']);
    $numero2 = trim($_POST['n2']);
    $numero3 = trim($_POST['n3']);
    $numero4 = trim($_POST['n4']);
    $numero5 = trim($_POST['n5']);



    $soma = $numero1 + $numero2 + $numero3;
    $multiplicar = $numero4 * $numero5;
    $dividir = $soma / $multiplicar;
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

    <form method="post" action="ex2_cal_formulario.php">

        <label>Número 1</label>
        <input type="text" name="n1" value="<?= isset($numero1) ? : '' ?>">
        <br>
        <label>Número 2</label>
        <input type="text" name="n2" value="<?= isset($numero2) ? : '' ?>">
        <br>
        <label>Número 3</label>
        <input type="text" name="n3" value="<?= isset($numero3) ? : '' ?>">
        <br>
        <label>Número 4</label>
        <input type="text" name="n4" value="<?= isset($numero4) ? : '' ?>">
        <br>
        <label>Número 5</label>
        <input type="text" name="n5" value="<?= isset($numero5) ? : '' ?>">
        <br>
        <button name="btn_calcular">Calcular</button>
        <br>
        <label>Resultado Final</label>
        <input disabled value="<?= $dividir ?>">

    </form>



</body>

</html>