<?php
if(
    isset($_GET['nome']) && $_GET['nome'] != '' &&
    isset($_GET['valor']) && $_GET['valor'] != '' &&
    isset($_GET['situacao']) && $_GET['situacao'] != '' && 
    isset($_GET['banco']) && $_GET['banco'] != ''
){
    $nome = $_GET['nome'];
    $valor = $_GET['valor'];
    $situacao = $_GET['situacao'];
    $banco = $_GET['banco'];

    if($situacao == 'G'){
        $resultado = $valor + (($valor * 3 / 100));
    }elseif($situacao == 'P'){
        $Resultado = $valor - (($valor * 5 / 100));

    }
}
else {
    header('location:ex2_pegarinvestimento.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <?php if(isset ($nome) && $nome != '' && isset ($valor) && $valor != '' && isset ($situacao) && $situacao != '' && isset ($banco) && $banco != '') : ?>
    <strong>CLIENTE, </strong><span><?= isset($nome) ? $nome : '' ?></span>
    <br>
    <strong>Seu valor de investimento foi de: <span></strong><?= isset($valor) ? number_format($valor, 2, ',', '.') : '' ?></span>
    <br>
    <strong>A sigla da sua simulação escolhida foi: <span></strong><?= isset($situacao) ? $situacao : '' ?></span>
    <br>
    <strong>O banco escolhido foi: <span></strong><?= isset($banco) ? $banco : '' ?></span>
    <br>
    <strong>E o resultado é de: </strong><span>R$<?= isset($resultado) ?  number_format($resultado, 2, ',', '.') : '' ?></span>
    <?php endif; ?>

</body>
</html>