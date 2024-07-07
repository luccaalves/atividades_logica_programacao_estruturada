<?php

$total = '';

if(isset($_POST['btnMostrar'])){
$total = $_POST['qtd'];
echo 'INICIO DO LAÇO DE REPETOÇÃO<br><br>';

for($i=0; $i<=$total; $i++){
echo 'Valor da variavel $i -' . $i . '<br>';

}
echo ' <br><br>FIM DA REPETIÇÃO';
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
    <form method="post" action="exemplo_repeticao.php">
        <label> Informe a quantidade de vezes de repetição: </label>
        <input type="text" name="qtd" value="<?= isset($total) ? $total : '' ?>" >
        <br>
        <button name="btnMostrar">MOSTRAR</button>
    </form>
</body>
</html>