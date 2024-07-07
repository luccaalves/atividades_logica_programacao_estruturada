<?php
if (isset ($_POST ['btnCalcular'])){
  $num1 = trim($_POST ['num1']);
  $num2 = trim($_POST ['num2']);
  $num3 = trim($_POST ['num3']);
  if ($num1 == '' || $num2 == '' || $num3 == ''){
    $msgError = '<div style= "color:#FF0000"> Preencher Campos Obrigátorios! </div>';
  }else {
    $resultado = $num2 / 2;

  if ($resultado >= $num1 && $resultado <= $num3){
    $status = "<div style= 'color:#006400'> O Resultado está entre os Números  $num1 e $num3 </div>";
  }else{
    $status = "<div style = 'color:#006400'> O Resultado NÃO está entre os números $num1 e $num3 </div>";
  }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <form action="ex2_operadores.php" method="post">
        <label>Número 1</label>
        <input type ="" name="num1" value="<?= isset($num1) ? $num1 : '' ?>">
        <br>
        <label>Número 2</label>
        <input type ="" name="num2" value="<?= isset($num2) ? $num2 : '' ?>">
        <br>
        <label> Número 3</label>
        <input type ="" name="num3" value="<?= isset($num3) ? $num3 : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
        <br>
        <input disabled value="<?= isset ($resultado) ? $resultado : '' ?>">
    </form>
    <?= isset ($msgError) ? $msgError : '' ?>
    <?= isset ($status) ? $status : '' ?>    
</body>
</html>