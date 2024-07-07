<?php

    // ltrim: Remove o excesso de espaço a ESQUERDA do campo que estiver sendo tratado.
    // rtrim: Remove o excesso de espaço a DIREITA do campo que estiver sendo tratado.
    // trim: Remove o excesso de espaço a ESQUERDA e DIREITA do campo que estiver sendo tratado.

    // Variável de Tipo Global.
    $numero1 = '';
    $numero2 = '';
    $soma = '';

    if(isset($_POST['btnSomar'])){
        $numero1 = trim(rtrim($_POST['valor1']));
        $numero2 = trim($_POST['valor2']);

        $soma = $numero1 + $numero2;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="exemplo.php" method="POST">
        <label>Primeiro Valor:</label>
        <input type="text" name="valor1" value="<?php echo $numero1 ?>">
        <br>
        <label>Segundo Valor:</label>
        <input type="text" name="valor2" value="<?= $numero2 ?>">
        <br>
        <button name="btnSomar">SOMAR</button>
    </form>
    <span>Resultado Final:</span>
    <input disabled value="<?= $soma ?>">
</body>
</html>