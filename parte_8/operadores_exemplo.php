<?php

if (isset($_POST['btn_test'])) {
    $num1 = ($_POST['num_test']);
    
    if (trim($num1) == '') {
        echo "Preencher o campo NÚMERO";
    } else {
        if ($num1 > 100) {
            echo ' O número ' . $num1 . ' ' . 'é maior do que 100';
        } else if ($num1 == 100) {
            echo 'O número ' . $num1 . ' ' . 'é igual a 100';
        } else {
            echo 'O número ' . $num1 . ' ' . 'é menor do que 100';
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
    <form method="post" action="operadores_exemplo.php">
        <label>NÚMERO DIGITADO</label>
        <input type="text" name="num_test" value="<?= isset($num1) ? $num1 : '' ?>">
        <button name="btn_test">TESTAR</button>
    </form>
</body>

</html>