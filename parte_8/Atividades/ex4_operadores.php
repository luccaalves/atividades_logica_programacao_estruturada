<?php
if (isset($_POST['btnCalcular'])) {
    $salario = trim($_POST['salario']);
    $aumento = trim($_POST['aumento']);

    if ($salario == '' || $aumento == '') {
        $msgError = 'Preencher todos os Campos Obrigatórios!';
    } else {
        $percentual = $salario * $aumento / 100;
        $salariofinal = $salario + $percentual;

        if($percentual<=0) {
            $status ='<span style="color:#ff4500;">Não houve aumento!</span>';
        }else if($percentual <= 100) {
            $status = '<span style="color:#006400">Aumento Nivel 1.</span>';
        } else if ($percentual > 100 && $percentual <= 200) {
            $status = '<span style="color:#006400">Aumento Nível 2.</span>';
        } else if ($percentual > 201 && $percentual <= 300) {
            $status = '<span style="color:#006400">Aumento Nível 3.</span>';
        } else if ($percentual > 301 && $percentual <= 400) {
            $status = '<span style= "color: #006400"> Aumento Nível 4.</span>';
        } else {
            $status = '<span style="color:#006400">Aumento Nível 5.</span>';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>

<body style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="ex4_operadores.php" method="post">
        <label>SALÁRIO: </label>
        <input type="" name="salario" value="<?= isset($salario) ? $salario : '' ?>">
        <br>
        <label>AUMENTO:</label>
        <input type="percentage" name="aumento" value="<?= isset($aumento) ? $aumento : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
<span style ="color: #ff0000;"><?= isset($msgError) ? $msgError : '' ?></span>
<?php if(
    isset($percentual) && $percentual != '' &&
    isset($salariofinal) && $salariofinal != '' &&
    isset ($status) && $status !='')
    { ?>
    <span><strong>Total de Aumento: </strong>R$ </span><?= isset($percentual) ? number_format($percentual, 2, ',', '.') : '' ?>
        <br>
        <span><strong>Salário Total: </strong>R$ </span><?= isset($salariofinal) ? number_format($salariofinal, 2, ',', '.') : '' ?>
        <br>
        <span><strong>Nível do Aumento: </strong></span><?= isset($status) ? $status : '' ?>
    <?php } ?>

</body>
</html>