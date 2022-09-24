<?php

    function removerAcentos(string $string) {
        $vogais_acentuadas = [
            ["â", "ã", "á", "à"], 
            ["ê", "é", "è"], 
            ["î", "í", "ì"], 
            ["ô", "õ", "ó", "ò"], 
            ["û", "ú", "ù"]
        ];

        $vogais = ["a", "e", "i", "o", "u"];

        for ($i = 0; $i < sizeof($vogais_acentuadas); $i++) {
            $string = str_ireplace($vogais_acentuadas[$i], $vogais[$i], $string);
        }

        return $string;
    }

    $nome = readline("Digite o seu nome completo: ");
    $nome_sem_acentos = removerAcentos($nome);
    print("Analisando seu nome...\n");
    sleep(2);

    print("Seu nome em maiúsculas é " . strtoupper($nome_sem_acentos).PHP_EOL);
    print("Seu nome em minúsculas é " . strtolower($nome_sem_acentos).PHP_EOL);
    $tamanho_nome = strlen($nome_sem_acentos) - substr_count($nome_sem_acentos, " ");
    print("Seu nome tem " . $tamanho_nome . " letras ao todo.".PHP_EOL);
    $primeiro_nome = explode(" ", $nome_sem_acentos, 2)[0];
    print("Seu primeiro nome é " . $primeiro_nome . " ele tem " . strlen($primeiro_nome) . " letras.".PHP_EOL);
?>