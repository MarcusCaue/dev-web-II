<?php
    $casos_teste = (int) readline();
    print($casos_teste . PHP_EOL);

    for ($i = 0; $i < $casos_teste; $i++) {
        $string = readline();
        print($string . PHP_EOL);

        // Primeira Passada
        for ($j = 0; $j < strlen($string); $j++) {
            if (ctype_alpha($string[$j])) {
                $ascii_code = ord($string[$j]);
                $string[$j] = chr($ascii_code + 3);
            }
        }

        //Segunda Passada
        $string = strrev($string);

        //Terceira Passada
        $tamanho_pedacos = intdiv(strlen($string), 2);

        for ($j = $tamanho_pedacos; $j < strlen($string); $j++) {
            $ascii_code = ord($string[$j]);
            $string[$j] = chr($ascii_code - 1);
        }

        print($string . PHP_EOL);
    }

?>