<?php

$cor = array();

$cor[] = 'Azul';
$cor[] = 'Amarelo';
$cor [] ='Roxo'; 
$cor [] = 'Lilas';
$cor [] = 'Vermelho';

echo 'TOTAL: ' . count($cor) . '<br>';

for($i=0; $i < count($cor); $i++){

    echo 'A cor armazenada é: ' . $cor[$i] . '<br>';
}
var_dump($cor);
?>