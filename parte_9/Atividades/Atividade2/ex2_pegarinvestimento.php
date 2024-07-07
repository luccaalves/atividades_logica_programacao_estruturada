<?php
if(isset($_POST['btn_ver'])){
    $nome = trim ($_POST['nome']);
    $valor = trim ($_POST['valor']);
    $situacao = trim($_POST['situacao']);
    $banco = trim($_POST['banco']);

    if($nome == '' && $valor == '' && $situacao == '' && $banco == ''){
        $msgError =  'Preencher Campos Obrigátorios!';
    }else{
header("location:ex2_mostrarinvestimento.php?nome=$nome&valor=$valor&situacao=$situacao&banco=$banco");
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="ex2_pegarinvestimento.php" method="post">
        <lable>Nome: </lable>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Valor Investimento: </lable>
        <input type="text" name="valor" value="<?= isset ($valor) ? $valor : '' ?>">
        <br>
        <label>Situação do investimento:</label>
        <select name="situacao">
        <option value="">Selecione</option>
        <option value="G">Ganho de 3%</option>
        <option value="P">Perca de 5%</option>

        </select>
        <br>
        <label>Banco: </label>
        <select name="banco">
        <option value="">Selecione</option>
        <option value="SANTANDER">SA</option>
        <option velue="ITAÚ">IT</option>
        <option value="SICREDI">SI</option>
        </select>
        <br>
        <button name="btn_ver">VER RESULTADO</button>
        <br>
    </form>
    <span style="color:#ff0000"><?= isset ($msgError) ? $msgError : '' ?></span>
    
</body>
</html>