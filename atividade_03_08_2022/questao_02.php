<?php
    # Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.

    $nome = readline("Digite seu nome: ");
    $sexo = readline("Digite seu sexo: "); $sexo = strtoupper(substr($sexo, 0, 1));
    $idade = (int) readline("Quantos anos você tem? ");

    echo "$nome: ";
    if ($sexo === "F" && $idade < 25) {
        echo "ACEITA.\n";
    } else {
        echo "NÃO ACEITA.\n";
    }

?>