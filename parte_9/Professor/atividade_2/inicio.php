<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $investimento = trim($_POST['investimento']);
        $ganhoPerda = trim($_POST['ganhoPerda']);
        $sBanco = trim($_POST['sBanco']);

        if($nome == '' || $investimento == '' || $ganhoPerda == '' || $sBanco == ''){
            $msgError = 'Preencher todos os campos Obrigatórios!';
        }else if($ganhoPerda != 'G' && $ganhoPerda != 'g' && $ganhoPerda != 'P' && $ganhoPerda != 'p'){
            $msgError = 'Digite a Sigla correta da Operação (Investimento)!';
        }else if($sBanco != 'SA' && $sBanco != 'sa' && $sBanco != 'IT' && $sBanco != 'it' && $sBanco != 'SI' && $sBanco != 'si'){
            $msgError = 'Digite a Sigla correta do Banco!';
        }else{
            header("location: final.php?nome=$nome&invest=$investimento&situacao=$ganhoPerda&banco=$sBanco");
            exit;
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="inicio.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>" placeholder="Digite aqui...">
        <br>
        <label>Digite o Valor do Investimento:</label>
        <input type="text" name="investimento" value="<?= isset($investimento) ? $investimento : '' ?>" placeholder="Digite aqui...">
        <br>
        <label>Digite uma Sigla (Operação):</label>
        <p>
        <h3 style="padding: 0px; margin: 0px;">"Ganhos de 3%" - SIGLA "G".</h3>
        <h3 style="padding: 0px; margin: 0px;">"Perda de 5%" - SIGLA "P".</h3>
        </p>
        <input type="text" name="ganhoPerda" value="<?= isset($ganhoPerda) ? $ganhoPerda : '' ?>" placeholder="Digite aqui...">
        <br>
        <label>Digite a Sigla do Banco:</label>
        <p>
        <h3 style="padding: 0px; margin: 0px;">"Santander" - SIGLA "SA".</h3>
        <h3 style="padding: 0px; margin: 0px;">"Itau" - SIGLA "IT".</h3>
        <h3 style="padding: 0px; margin: 0px;">"Sicredi" - SIGLA "SI".</h3>
        </p>
        <input type="text" name="sBanco" value="<?= isset($sBanco) ? $sBanco : '' ?>" placeholder="Digite aqui...">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <span style="color: #FF0000;"><?= isset($msgError) ? $msgError : '' ?></span>
</body>
</html>