<?php
    if(
        isset($_GET['nome']) && $_GET['nome'] != '' &&
        isset($_GET['invest']) && $_GET['invest'] != '' &&
        isset($_GET['situacao']) && $_GET['situacao'] != '' &&
        isset($_GET['banco']) && $_GET['banco'] != '' 
    ){
        $nome = $_GET['nome'];
        $investimento = $_GET['invest'];
        $situacao = $_GET['situacao'];
        $banco = $_GET['banco'];

        if($situacao == 'g' || $situacao == 'G'){
            $resultado = $investimento + (($investimento * 3) / 100);
        }else if($situacao == 'p' || $situacao == 'P'){
            $resultado = $investimento - (($investimento * 5) / 100);
        }

        // Condição Lógica para manipulação de Textos (Operação de Investimento)!
        if($situacao == 'g' || $situacao == 'G'){
            $valor = 'Ganhos!';
        }else if($situacao == 'p' || $situacao == 'P'){
            $valor = 'Perda!';
        }
        
        // Condição Lógica para manipulação de Textos (Escolha do Banco)!
        if($banco == 'SA' || $banco == 'sa'){
            $sBanco = 'Santander!';
        }else if($$banco == 'IT' || $banco == 'it'){
            $sBanco = 'Itau!';
        }else if($banco == 'SI' || $banco == 'si'){
            $sBanco = 'Sicredi!';
        }
    }else{
        header('location: inicio.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <strong>Nome da Pessoa: </strong><span><?= isset($nome) ? $nome : '' ?></span>
    <br>
    <strong>Valor do Investimento: </strong><span><?= isset($investimento) ? $investimento : '' ?></span>
    <br>
    <strong>Tipo de Operação: </strong><span><?= isset($valor) ? $valor : '' ?></span>
    <br>
    <strong>Sigla do Banco Escolhido: </strong><span><?= isset($sBanco) ? $sBanco : '' ?></span>
    <br>
    <strong>Situação: </strong><span>R$ <?= isset($resultado) ? number_format($resultado, 2, ',', '.') : '' ?></span>
</body>
</html>