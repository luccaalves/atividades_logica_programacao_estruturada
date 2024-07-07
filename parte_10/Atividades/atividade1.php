<?php
if(isset($_POST['btnMostrar'])){
    $total = trim($_POST['qtd']);
    $nome = trim($_POST['nome']);
    $sobre = trim($_POST['sobrenome']);
    $idade = trim($_POST['idade']);


    if($total == '' || $nome == '' || $sobre == '' || $idade == '' ){
        $msgError = 'Preencher todos os Campos Obrigatorios!';
    }

    for($i=1; $i<=$total; $i++){
        echo'Meu Nome é '  . $nome . ' ' . $sobre .  ' ' . 'e tenho ' . $idade .' ' .  'Anos de Idade' . '<br>';
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
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<form action="atividade1.php" method="post">
    <label>Digite seu Nome: </label>
    <input type="text" name="nome" value="<?= isset ($nome) ? $nome : '' ?>">
    <br>
    <label>Digite seu Sobrenome: </label>
    <input type="text" name="sobrenome" value="<?= isset($sobre) ? $sobre : '' ?>">
    <br>
    <label>Digite sua idade: </label>
    <input type="number" name="idade" value="<?= isset($idade) ? $idade : '' ?>">
    <br>
    <lable>Informe Quantas vezes Deve Repetir</lable>
    <input type="text" name="qtd" value="<?= isset($total) ? $total : '' ?>">
    <br>
    <button name="btnMostrar">MOSTRAR</button>
</form>
<span style="color: red;"><?=isset ($msgError) ? $msgError : '' ?></span>
   
</body>
</html>