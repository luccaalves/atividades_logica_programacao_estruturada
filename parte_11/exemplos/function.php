<?php

    // Parametros / Atributos: Não é Variável pois não esta alocada na memória RAM, é apenas uma passagem de valores.

    // 1º Exercício de function.
    function SomarExemplo($numero1, $numero2){
        if($numero1 == '' || $numero2 == ''){
            return 0;
        }else{
            $soma = $numero1 + $numero2;

            return $soma;
        }
    }

    function ContarCaracteres($palavra){
    
        $qtd = strlen($palavra);
        return $qtd;
    }

    function SomarCaracteresTotal($qtd_nome, $qtd_sobre){
        $soma = $qtd_nome + $qtd_sobre;
        return $soma;
    }