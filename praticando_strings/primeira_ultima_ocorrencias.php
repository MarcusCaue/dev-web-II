<?php
    $frase = trim(strtolower(readline("Digite uma frase: ")));
    $quant_ocorrencias = substr_count($frase, "a");
    $primeira_ocorrencia = strpos($frase, "a") + 1;
    $ultima_ocorrencia = strrpos($frase, "a") + 1; 
    
    print("A letra 'a' apareceu $quant_ocorrencias vezes na frase. \nA primeira letra 'a' apareceu na posição $primeira_ocorrencia. \nA última letra 'a' apareceu na posição $ultima_ocorrencia.");