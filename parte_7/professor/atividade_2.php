<?php

    // isset - EXISTIR!
    // ? - ENTÃO!
    // : - CASO CONTRÁRIO!

    // Variável de Tipo Global!
    $valor1 = '';

    if(isset($_POST['btnCalcular'])){
        $valor1 = trim($_POST['vl1']);
        $valor2 = trim($_POST['vl2']);
        $valor3 = trim($_POST['vl3']);
        $valor4 = trim($_POST['vl4']);
        $valor5 = trim($_POST['vl5']);

        $resultado = ($valor4 * $valor4) / ($valor1 + $valor2 + $valor3);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_2.php" method="POST">
        <label>Digite o Primeiro Valor:</label>
        <input type="text" name="vl1" value="<?= $valor1 ?>">
        <br>
        <label>Digite o Segundo Valor:</label>
        <input type="text" name="vl2" value="<?= isset($valor2) ? $valor2 : null ?>">
        <br>
        <label>Digite o Terceiro Valor:</label>
        <input type="text" name="vl3" value="<?= isset($valor3) ? $valor3 : null ?>">
        <br>
        <label>Digite o Quarto Valor:</label>
        <input type="text" name="vl4" value="<?= isset($valor4) ? $valor4 : null ?>">
        <br>
        <label>Digite o Quinto Valor:</label>
        <input type="text" name="vl5" value="<?= isset($valor5) ? $valor5 : null ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <span>Resultado Final: </span>
    <input disabled value="<?= isset($resultado) ? $resultado : null ?>">
</body>
</html>