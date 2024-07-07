<?php

class Combustivel
{


    public function CalcularTotalLitros($combustivel, $qtdlitros)
    {
        if ($combustivel == '' || $qtdlitros == '') {
            return 0;
        } else {

            $resultado = '';

            if ($combustivel == 'gas') {
                $resultado = $this->Gasolina($qtdlitros);
            } elseif ($combustivel == 'eta') {
                $resultado = $this->Etanol($qtdlitros);
            }
            return $resultado;
        }
    }
    private function Gasolina($qtdlitros)
    {
        $resultado = $qtdlitros * 4.10;
        return $resultado;
    }
    private function Etanol($qtdlitros)
    {
        $resultado = $qtdlitros * 3.09;
        return $resultado;
    }
}

class Convercao
{
    public function Converter($num, $temp)
    {
        if ($num == '' || $temp == '') {
            return 0;
        } else {
            $resultado = '';

            if ($temp == 'celsius') {
                $resultado = $this->Celsius($num);
            } elseif ($temp == 'fahrenheit') {
                $resultado = $this->Fahrenheit($num);
            }
            return $resultado;
        }
    }
    private function Celsius($num)
    {
        $resultado = ($num * 1.8) + 32;
        return $resultado;
    }
    private function Fahrenheit($num)
    {
        $resultado = ($num - 32) / 1.8;
        return $resultado;
    }
}

class Faturamento
{

    public function Calcularfaturamento($meses, $ganhos, $lucro, $perca)
    {
        if ($meses == '' || $ganhos == '' || $lucro == '' || $perca == '') {
            return 0;
        } else {
            $resultado = '';

            $resultado = $this->Total($meses, $ganhos, $lucro, $perca);
            return $resultado;
        }
    }
    private function Total($meses, $ganhos, $lucro, $perca)
    {

        $ganhototal = $meses * $ganhos;
        $totalLucro = ($ganhototal * $lucro) / 100;
        $totalPerda = ($ganhototal * $perca) / 100;

        $resultado = ($ganhototal + $totalLucro) - $totalPerda;
        return $resultado;
    }
}
