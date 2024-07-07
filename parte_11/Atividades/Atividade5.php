<?php

require_once './function.php';

if (isset($_POST['btnCalcular'])) {
    $produto = trim($_POST['produto']);
    $valor = ($_POST['valor']);
    $qtd = ($_POST['quantidade']);

    if (CalcularValorProduto($produto, $valor, $qtd) == 0) {
        $msgError = 'Preencher Todos os Campos Obrigatorios!';
    } else {
        $resultado = CalcularValorProduto($produto, $valor, $qtd);
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

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="Atividade5.php" method="post">
        <label><strong>Nome do Produto:</strong> </label>
        <br>
        <input type="text" name="produto" value="<?= isset($produto) ? $produto : '' ?>">
        <br>
        <label><strong>Valor do Produto:</strong> </label>
        <br>
        <input type="number" name="valor" value="<?= isset($valor) ? $valor : '' ?>">
        <br>
        <lable><strong>Quantidade do Produto:</strong> </lable>
        <br>
        <input type="number" name="quantidade" value="<?= isset($qtd) ? $qtd : '' ?>">
        <br><br>
        <button name="btnCalcular">CALCULAR</button>
        <hr>
    </form>
    <span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>
    <?php if (isset($resultado) && $resultado != '') { ?>
        <span><strong>Resultado:</strong></span>
        <input disabled value="R$ <?= isset($resultado) ? number_format($resultado, 2, ',', '.') : '' ?>">
    <?php } ?>
</body>

</html>