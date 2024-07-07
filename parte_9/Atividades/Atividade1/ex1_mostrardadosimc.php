<?php

if (
    isset($_GET['nome']) && $_GET['nome'] != '' && 
    isset($_GET['peso']) && $_GET['peso'] != '' &&
    isset($_GET['altura']) && $_GET['altura'] != ''
    ) {

$nome = $_GET['nome'];
$peso = $_GET['peso'];
$altura = $_GET['altura'];

$resultado = round($peso / ($altura * $altura), 2);

if ($resultado <= 0){
    $status = 'IMC não encontrado';
}else if($resultado > 0 && $resultado <= 20) {
    $status = 'Magro.';
} else if ($resultado >= 20 && $resultado <= 25) {
    $status = 'Peso Ideal!';
} else if ($resultado >= 25 && $resultado <= 30) {
    $status = 'Obeso(a)!';
} else {
    $status = 'Muito Obeso!';
}

} else {
    header('location: ex1_pegardadosimc.php');
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
<?php if(isset ($nome) && $nome != '' && isset($resultado) && $resultado != '' && isset($status) && $status != '' ) : ?>
    <strong>Nome: </strong><span><?= isset($nome) ? $nome : '' ?></span>
    <br>
    <strong>Altura: </strong><span><?= isset($altura) ? $altura : '' ?></span>
    <br>
    <strong>Peso: </strong><span><?= isset($peso) ? $peso : '' ?></span>
    <br>
    <strong>Resultado do IMC: </strong><span><?= isset($resultado) ? $resultado : '' ?></span>
    <br>
    <strong>Classificação do IMC: </strong><span><?= isset($status) ? $status : '' ?></span>
    <?php endif; ?>
</body>
</html>