<?php
// 1º function: Correção do 1º Exercício da Lista.
function TratarNome($nome)
{
    if(strlen($nome) < 3) {
        return -1;
    }
}

function TratarDescricao($descricao)
{
    if(strlen($descricao) < 50) {
        return -2;
    }
}
function TratarSenha($password)
{
    if(strlen($password) < 6) {
        return -3;
    }
}
function TratarRepeticao($senha, $repsenha)
{
    if($senha != $repsenha) {
        return -4;
    }
}

// 2º function: Correção do 2º Exercício da Lista.
function CalcularSalario($dinheiro, $aumento)
{
    if($dinheiro == '' || $aumento == '') {
        return 0;
    }else {
        $resultado = $dinheiro + (($dinheiro * $aumento) / 100);
        return $resultado;
    }
}

// 3º function: Correção do 3º Exercício da Lista.
function CalcularNumeros($n1, $n2, $n3, $n4, $n5)
{
    if($n1 == '' || $n2 == '' || $n3 == '' || $n4 == '' || $n5 == '') {
        return 0;
    }else {
        $calculo = $n1 + $n2 + $n3 + ($n4 * $n5);
        return $calculo;
    }
}

// 4º function: Correção do 4º Exercício da Lista.
function SomarMeses($jan, $fev, $mar, $abr, $mai, $jun, $jul, $ago, $set, $out, $nov, $dez)
{
    if($jan == '' || $fev == '' || $mar == '' || $abr == '' || $mai == '' || $jun == '' || $jul == '' || $ago == '' || $set == '' || $out == '' || $nov == '' || $dez == '') {
        return 0;
    }else {
        $soma = $jan + $fev + $mar + $abr + $mai + $jun + $jul + $ago + $set + $out + $nov + $dez;
        return $soma;
    }
}

//5º function: Correção do 5º Exercício da Lista.
function CalcularValorProduto($produto, $valor, $quantidade)
{
    if($produto == '' || $valor == '' || $quantidade == '') {
        return 0;
    }else {
        $calculo = $quantidade * $valor;
        return $calculo;
    }
}

// 7º function: Correção do 6º Exercício da Lista.
function CalcularValores($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10){
    if ($num1 == '' || $num2 == '' || $num3 == '' || $num4 == '' || $num5 == '' || $num6 == '' || $num7 == '' || $num8 == '' || $num9 == '' || $num10 == ''){
        return 0;
    }else{
        $calcular = ($num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9) / $num10;
        return $calcular; 
    }

    
}

 //8º function: Desafio Função.

function SomarGanhos($gJaneiro, $gFevereiro, $gMarco, $gAbril, $gMaio, $gJunho, $gJulho, $gAgosto, $gSetembro, $gOutubro, $gNovembro, $gDezembro){
    if($gJaneiro == '' || $gFevereiro == '' || $gMarco == '' || $gAbril == '' || $gMaio == '' || $gJunho == '' || $gJulho == '' || $gAgosto == '' || $gSetembro == '' || $gOutubro == '' || $gNovembro == '' || $gDezembro == ''){
        return 0;
    }else($TotalGanhos = $gJaneiro + $gFevereiro + $gMarco + $gAbril + $gMaio + $gJunho + $gJulho + $gAgosto + $gSetembro + $gOutubro + $gNovembro + $gDezembro);
    return $TotalGanhos;
}


function SomarPerdas($pJaneiro, $pFevereiro, $pMarco, $pAbril, $pMaio, $pJunho, $pJulho, $pAgosto, $pSetembro, $pOutubro, $pNovembro, $pDezembro){
if( $pJaneiro == '' || $pFevereiro == '' || $pMarco == '' || $pAbril == '' || $pMaio == '' || $pJunho == '' || $pJulho == '' || $pAgosto == '' || $pSetembro == '' || $pOutubro == '' || $pNovembro == '' || $pDezembro == ''){
    return 0;

}else($TotalPerdas = $pJaneiro + $pFevereiro + $pMarco + $pAbril + $pMaio + $pJunho + $pJulho + $pAgosto + $pSetembro + $pOutubro + $pNovembro + $pDezembro);{
    return $TotalPerdas;
}
}


function LucroReal($gJaneiro, $gFevereiro, $gMarco, $gAbril, $gMaio, $gJunho, $gJulho, $gAgosto, $gSetembro, $gOutubro, $gNovembro, $gDezembro, $pJaneiro, $pFevereiro, $pMarco, $pAbril, $pMaio, $pJunho, $pJulho, $pAgosto, $pSetembro, $pOutubro, $pNovembro, $pDezembro){
    $TotalGanhos = $gJaneiro + $gFevereiro + $gMarco + $gAbril + $gMaio + $gJunho + $gJulho + $gAgosto + $gSetembro + $gOutubro + $gNovembro + $gDezembro;

    $TotalPerdas = $pJaneiro + $pFevereiro + $pMarco + $pAbril + $pMaio + $pJunho + $pJulho + $pAgosto + $pSetembro + $pOutubro + $pNovembro + $pDezembro;

    $lucroRealAnual = $TotalGanhos - $TotalPerdas;
    return $lucroRealAnual;
}

function LucroMensal($gJaneiro, $gFevereiro, $gMarco, $gAbril, $gMaio, $gJunho, $gJulho, $gAgosto, $gSetembro, $gOutubro, $gNovembro, $gDezembro, $pJaneiro, $pFevereiro, $pMarco, $pAbril, $pMaio, $pJunho, $pJulho, $pAgosto, $pSetembro, $pOutubro, $pNovembro, $pDezembro){
    $lucroJaneiro = $gJaneiro - $pJaneiro;
    $lucroFevereiro = $gFevereiro - $pFevereiro;
    $lucroMarco = $gMarco - $pMarco;
    $lucroAbril = $gAbril - $pAbril;
    $lucroMaio = $gMaio - $pMaio;
    $lucroJunho = $gJunho - $pJunho;
    $lucroJulho = $gJulho - $pJulho;
    $lucroAgosto = $gAgosto - $pAgosto;
    $lucroSetembro = $gSetembro - $pSetembro;
    $lucroOutubro = $gOutubro - $pOutubro;
    $lucroNovembro = $gNovembro - $pNovembro;
    $lucroDezembro = $gDezembro - $pDezembro;

    $lucroMensal = array($lucroJaneiro, $lucroFevereiro, $lucroMarco, $lucroAbril, $lucroMaio, $lucroJunho, $lucroJulho, $lucroAgosto, $lucroSetembro, $lucroOutubro, $lucroNovembro, $lucroDezembro);
    return $lucroMensal;
}
