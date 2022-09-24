<?php
    $numero = readline("Digite um número: ");
    $num_preenchido = str_pad($numero, 4, "0", STR_PAD_LEFT);

    print("Analisando o número $numero\n");
    print("Unidade: " . $num_preenchido[3] . PHP_EOL);
    print("Dezena: " . $num_preenchido[2] . PHP_EOL);
    print("Centena: " . $num_preenchido[1] . PHP_EOL);
    print("Milhar: " . $num_preenchido[0] . PHP_EOL);
    