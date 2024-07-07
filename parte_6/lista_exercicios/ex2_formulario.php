<?php 

if(isset ($_POST ['btn_enviar'])) {
    $empresa = $_POST['nome_empresa'];
    $site = $_POST['site'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $descricao = $_POST['descricao'];
    
    echo 'Nome da Empresa: ' . $empresa  .'<br>Site: ' . $site . '<br>Facebook: ' . $facebook  . '<br>Instagram: ' . $instagram  . '<br>Descrição: ' . $descricao;
}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ex2_formulario.php" method="post">
        <label>Nome da Empresa:</label>
        <input name="nome_empresa">
        <br>
        <label>Site:</label>
        <input  name="site">
        <br>
        <label>Facebook:</label>
        <input name="facebook">
        <br>
        <label>Instagram:</label>
        <input name="instagram">
        <br>
        <label>Descrição da Empresa:</label>
        <input name="descricao">
        <br>
        <button name="btn_enviar">ENVIAR</button>
    </form>
</body>
</html>