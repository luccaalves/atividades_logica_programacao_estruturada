<?php

if(isset($_POST['btnCalcular'])){
    $salario = trim($_POST['salario']);


    if($salario == ''){
        $msgError = '<div style = "color:#ff0000">Prencher Campos Obrigatórios!</div>';
    }else{
        $aumento1 = ($salario / 100) * 15 ;
        $aumento2 = ($salario / 100) * 18;
        $totalaumentos = $aumento1 + $aumento2;
        $salariofinal = $totalaumentos + $salario;
    }
    if($totalaumentos <= 100){
        $status ='<div style="color:#8b0000">Aumento RUIM!</div>'; 
    }else if($totalaumentos >= 100 && $totalaumentos <= 200){
        $status ='<div style="color:#FF8C00">Aumento RAZOAVEL!</div>'; 
    }else if ($totalaumentos >=200 && $totalaumentos <= 300){
        $status ='<div style="color:#008000">Aumento BOM!</div>'; 
    }else if($totalaumentos >= 300 && $totalaumentos <= 400){
        $status ='<div style="color:#00FF00">Aumento ÓTIMO!</div>'; 
    }else{
        $status ='<div style="color:#7b68EE">Aumento EXCELENTE!</div>';
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>
    <form action="ex6_operadores.php" method="post">
        <label>Sálario: </label>
        <input name="salario" value="<?= isset ($salario) ? $salario : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
        <br>
        <label>1° Aumento 15%: </label>
        <input disabled value="<?= isset($aumento1) ? $aumento1 : '' ?>">
        <br>
        <label>2° Aumento 18%: </label>
        <input disabled value="<?= isset($aumento2) ? $aumento2 : '' ?>">
        <br>
        <label>Total de Aumentos: </label>
        <input disabled value="<?= isset($totalaumentos) ? $totalaumentos : '' ?>">
        <br>
        <label>Aumentos + Salário: </label>
        <input disabled value="<?= isset($salariofinal) ? $salariofinal : '' ?>">
    </form>
    <?= isset ($msgError) ? $msgError : '' ?>
    <?= isset ($status) ? $status : '' ?>
</body>
</html>