<?php
    if(
        isset($_GET['pessoa']) && $_GET['pessoa'] != '' &&
        isset($_GET['idade']) && $_GET['idade'] != '' &&
        isset($_GET['local']) && $_GET['local'] != '' 
    ){
        $name = $_GET['pessoa'];
        $age = $_GET['idade'];
        $city = $_GET['local'];

        $frase = 'Meu nome é ' . $name . ' e tenho ' . $age . ' anos de idade, moro na cidade de ' . $city . '.';

    }else{
        // Caso a Chave ou Valor da URL seja alterado ou removida, o usuário sera redirecionado novamente,
        // para a primeira página da aplicação!
        header('location: pg_1.php');
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
    <span><?= isset($frase) ? $frase : '' ?></span>
</body>
</html>