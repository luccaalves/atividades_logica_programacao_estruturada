<?php

if (
    isset($_GET['nome']) && $_GET['nome'] != '' && 
    isset($_GET['sobrenome']) && $_GET['sobrenome'] != ''
    ) {

$nome_ususario =$_GET['nome'];
$sobrenome = $_GET['sobrenome'];

$nomecompleto = $nome_ususario . ' ' . $sobrenome;

} else {
    header('location: pegar_dados.php');
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
<body>
    <label>Nome Completo: <?= isset($nomecompleto) ? $nomecompleto : '' ?></label>
</body>
</html>