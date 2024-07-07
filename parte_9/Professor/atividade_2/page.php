<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $investimento = trim($_POST['investimento']);
        $ganhoPerda = trim($_POST['ganhoPerda']);
        $sBanco = trim($_POST['sBanco']);

        if($nome == '' || $investimento == '' || $ganhoPerda == '' || $sBanco == ''){
            $msgError = 'Preencher todos os campos Obrigatórios!';
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
    <form action="page.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>" placeholder="Digite aqui...">
        <br>
        <label>Digite o Valor do Investimento:</label>
        <input type="text" name="investimento" value="<?= isset($investimento) ? $investimento : '' ?>" placeholder="Digite aqui...">
        <br>
        <label>Digite uma Sigla (Operação):</label>
        <select name="ganhoPerda">
            <option value="">Selecione</option>
            <option value="g">Ganho</option>
            <option value="p">Perda</option>
        </select>
        <br>
        <label>Digite a Sigla do Banco:</label>
        <select name="sBanco">
            <option value="">Selecione</option>
            <option value="sa">Santander</option>
            <option value="it">Itau</option>
            <option value="si">Sicredi</option>
        </select>
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <span style="color: #FF0000;"><?= isset($msgError) ? $msgError : '' ?></span>
</body>
</html>