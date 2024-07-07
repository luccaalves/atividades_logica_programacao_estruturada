<?php

require_once './Class.php';

if(isset($_POST['btnCalcular'])){
    $meses = $_POST['meses'];
    $ganhos = $_POST['ganhos'];
    $lucro = $_POST['lucro'];
    $perca = $_POST['perca'];

    $objfaturamento = new Faturamento();
    $resultado = $objfaturamento -> Calcularfaturamento($meses, $ganhos, $lucro, $perca);

    if($resultado == 0){
        $msgError = "Preencher Todos os Campos Obrigatórios";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<form method="post" action="Atividade3.php">
    <label>Meses Trabalhados:</label>
    <br>
    <input type="text" name="meses" value="<?=isset($meses) ? $meses : '' ?>" >
    <br>
    <label>Ganho Médio Mensal:</label>
    <br>
    <input type="text" name="ganhos" value="<?=isset($ganhos) ? $ganhos : '' ?>" >
    <br>
    <label>Percentual (%) de Lucro Total:</label>
    <br>
    <input type="text" name="lucro" value="<?=isset($lucro) ? $lucro : '' ?>" >
    <br>
    <label>Percentual (%) de Perca Total:</label>
    <br>
    <input type="text" name="perca" value="<?=isset($perca) ? $perca : '' ?>" >
    <br><br>
    <button name="btnCalcular">CALCULAR</button>
    <hr>
</form>
<span style="color: red;"><?=isset($msgError) ? $msgError : '' ?></span>
<?php if(isset($resultado) && $resultado != '' && $resultado != 0){?>
    <span><strong>Total Final:</strong></span>
    <input disabled value="R$<?= isset($resultado) ? number_format($resultado, '2', ',','.') : '' ?>">
<?php } ?>   
    
</body>
</html>