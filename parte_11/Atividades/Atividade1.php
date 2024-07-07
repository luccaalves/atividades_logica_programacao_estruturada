<?php

    require_once './function.php';

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $descricao  = trim($_POST['desc']);
        $senha = trim($_POST['senha']);
        $repsenha = trim($_POST['repsenha']);

        if(TratarNome($nome) == -1){
            $msgError = 'O Nome deve conter no mínimo 3 caracteres!<hr>';
        }else if(TratarDescricao($descricao) == -2){
            $msgError = 'A Descrição deve conter no mínimo 50 caracteres!<hr>';
        }else if(TratarSenha($senha) == -3){
            $msgError = 'A Senha deve conter no mínimo 6 caracteres!<hr>';
        }else if(TratarRepeticao($senha, $repsenha) == -4){
            $msgError = 'As Senhas devem ser iguais!<hr>';
        }else{
            $resultado = 'Formulário preenchido com sucesso!<hr>';
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<form action="Atividade1.php" method="POST">
<label>Digite seu Nome:</label>
        <br>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>" placeholder="Digite aqui..." style="width: 270px;">
    <br>
    <label>Digite sua Dscrição: </label>
    <br>
    <textarea name="desc" value="<?= isset($descricao) ? $descricao : '' ?>" placeholder="Digite aqui...."></textarea>
    <br>
    <label>Digite uma Senha: </label>
    <br>
    <input type="password" name="senha" value="<?= isset($senha) ? $senha : '' ?>" placeholder="Digite Aqui..." style="width: 270px;">
    <br>
    <label>Digite Novamente sua Senha:</label>
    <br>
    <input type="password" name="repsenha" value="<?= isset($repsenha) ? $repsenha : '' ?>" placeholder="Digite Aqui...." style="width: 270px;">
    <button name="btnEnviar">ENVIAR</button>
    <hr>
</form>
<span style="color: red;"><?= isset($msgError) ? $msgError : '' ?></span>   
<span style="color: green;"><?= isset($resultado) ? $resultado : '' ?></span>   
</body>
</html>