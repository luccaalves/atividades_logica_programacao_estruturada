<?php

class Calculo
{
    public function SomarNumeros($num1, $num2, $num3){
        if($num1 == '' || $num2 == '' || $num3 == ''){
            return 0;
        }else{
        $soma =  $this -> Soma($num1, $num2,$num3);
        return $soma;
        }
    }

    private function Soma($num1, $num2, $num3){
        $soma = $num1 + $num2 + $num3;
        return $soma;
    }



    
    public function CalcularCalculadora($num1, $num2, $operacao){
        if (trim($num1) == '' || trim($num2) == '' || ($operacao) == '') {
            return 0;
        }else{

        $resultado = '';

        if ($operacao == '+') {
           $resultado = $this->Somar($num1, $num2);

        } elseif ($operacao == '*'){
            $resultado = $this->Multiplicar($num1, $num2);

        } elseif ($operacao == '/'){
            $resultado = $this->Dividir($num1, $num2);

        }elseif($operacao == '-'){
            $resultado = $this->Subitrair($num1, $num2);
        }

        return $resultado;
    }
    }

    private function Somar($num1, $num2){
        $resultado = $num1 + $num2;
        return $resultado;
    }
    private function Dividir($num1, $num2){
        $resultado = $num1 / $num2;
        return $resultado;
    }
    private function Multiplicar($num1, $num2){
        $resultado = $num1 * $num2;
        return $resultado;
    }
    private function Subitrair($num1, $num2){
        $resultado = $num1 - $num2;
        return $resultado;
    }
}
