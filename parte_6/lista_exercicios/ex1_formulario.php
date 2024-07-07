<?php

if (isset($_POST['btn_enviar'])) {

    $prato = $_POST['nome_prato'];
    $descricao = $_POST['descricao_prato'];
    $preco = $_POST['preco'];
    $ingredientes = $_POST['ingredientes_prato'];

    // echo "Nome do Prato: $prato <br> Descrição do Prato: $descricao <br> Preço:  $preco <br>  Ingredientes do Prato: $ingredientes <br>" ;

    echo  'Nome do Prato: ' . $prato . '<br>' . 'Descrição: ' . $descricao . '<br>' . 'Preço: ' . $preco . 'Ingredientes:' . $ingredientes . '<br>' . '<hr>' . '<br>';
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
    <form action="ex1_formulario.php" method="post">
        <label>Nome Prato:</label>
        <input name="nome_prato">
        <br>
        <label>Descrição:</label>
        <input type="" name="descricao_prato">
        <br>
        <label>Preço;</label>
        <input type="number" name="preco">
        <br>
        <label>Ingredientes: </label>
        <input name="ingredientes_prato">
        <br>
        <button name="btn_enviar">ENVIAR</button>
    </form>

</body>

</html>

