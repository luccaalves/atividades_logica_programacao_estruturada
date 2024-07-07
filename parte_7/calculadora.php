<?php


// ltrim: Remove o execeso de espaço a ESQUERDA do campo que estiver sendo tratado
// rtrim: Remove o execeso de espaço a DIREITA do campo que estiver sendo tratado
// trim: Remove o execeso de espaço a ESQUERDA e DIREITA do campo que estiver sendo tratado

$numero1 = '';
$numero2 = '';

$numero3 = '';
$numero4 = '';

$numero5 = '';
$numero6 = '';

$numero7 = '';
$numero8 = '';


$soma = '';
$subtrair = '';
$multiplicar = '';
$dividir = '';

if (isset($_POST['btn_somar'])) {
    $numero1 = trim( $_POST['n1']);
    $numero2 = trim($_POST['n2']);


    $soma = $numero1 + $numero2;
}

else if (isset($_POST['btn_subtrair'])) {
    $numero3 = trim ($_POST['n3']);
    $numero4 = trim ($_POST['n4']);


    $subtrair = $numero3 - $numero4;
}

else if (isset($_POST['btn_multiplicar'])) {
    $numero5 = trim($_POST['n5']);
    $numero6 = trim($_POST['n6']);


    $multiplicar = $numero5 * $numero6;
}

else if (isset($_POST['btn_dividir'])) {
    $numero7 = trim ($_POST['n7']);
    $numero8 = trim ($_POST['n8']);


    $dividir = $numero7 / $numero8;
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

    <form method="post" action="calculadora.php">

        <label>Número 1 </label>
        <input type="text" name="n1" value="<?= $numero1 ?>">

        <label>Número 2 </label>
        <input type="text" name="n2" value="<?= $numero2 ?>">

        <button name="btn_somar">Somar</button>

        <input disabled value="<?= $soma ?>">

    </form>


    <form method="post" action="calculadora.php">

        <label>Número 1 </label>
        <input type="text" name="n3" value="<?= $numero3 ?>">

        <label>Número 2 </label>
        <input type="text" name="n4" value="<?= $numero4 ?>">

        <button name="btn_subtrair">Subtrair</button>

        <input disabled value="<?= $subtrair ?>">

    </form>

    <form method="post" action="calculadora.php">

        <label>Número 1 </label>
        <input type="text" name="n5" value="<?= $numero5 ?>">

        <label>Número 2 </label>
        <input type="text" name="n6" value="<?= $numero6 ?>">

        <button name="btn_multiplicar">Multiplicar</button>

        <input disabled value="<?= $multiplicar ?>">

    </form>

    <form method="post" action="calculadora.php">

        <label>Número 1 </label>
        <input type="text" name="n7" value="<?= $numero7 ?>">

        <label>Número 2 </label>
        <input type="text" name="n8" value="<?= $numero8 ?>">

        <button name="btn_dividir">Dividir</button>

        <input disabled value="<?= $dividir ?>">

    </form>



</body>

</html>