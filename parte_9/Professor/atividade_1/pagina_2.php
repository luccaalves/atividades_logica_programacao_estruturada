<?php
    if(
        isset($_GET['pessoa']) && $_GET['pessoa'] != '' &&
        isset($_GET['tamanho']) && $_GET['tamanho'] != '' &&
        isset($_GET['massa']) && $_GET['massa'] != '' 
    ){
        $pessoa = $_GET['pessoa'];
        $tamanho = $_GET['tamanho'];
        $massa = $_GET['massa'];

        $imc = round($massa / ($tamanho * $tamanho), 2);

        if($imc < 0){
            $status = 'IMC não encontrado!';
        }else if($imc >= 0 && $imc <= 20){
            $status = 'Magro(a)!';
        }else if($imc > 20 && $imc <= 25){
            $status = 'Peso Ideal!';
        }else if($imc > 25 && $imc <= 30){
            $status = 'Obeso(a)!';
        }else{
            $status = 'Muito Obeso(a)!';
        }
    }else{
        header('location: pagina_1.php');
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
    <strong>Nome da Pessoa: </strong><span><?= isset($pessoa) ? $pessoa : '' ?>.</span>
    <br>
    <strong>Altura: </strong><span><?= isset($tamanho) ? $tamanho : '' ?>.</span>
    <br>
    <strong>Peso: </strong><span><?= isset($massa) ? $massa : '' ?>.</span>
    <br>
    <strong>Resultado do IMC: </strong><span><?= isset($imc) ? $imc : '' ?>.</span>
    <br>
    <strong>Situação: </strong><span><?= isset($status) ? $status : '' ?></span>
</body>
</html>