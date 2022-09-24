<?php
    $pedacos_nome = explode(" ", ucwords(readline("Digite seu nome completo: ")));
    $primeiro_nome = $pedacos_nome[0];
    $ultimo_nome = $pedacos_nome[sizeof($pedacos_nome) - 1];

    print("O seu primeiro nome é '$primeiro_nome'\nO seu último nome é '$ultimo_nome'");