<?php
    $nome = explode(" ", strtolower(readline("Digite seu nome: ")));
    $res = array_search("silva", $nome);
    if ($res === 0 || $res > 0) {
        $res = true;
    }
    
    echo "Seu nome tem 'Silva'? " . ($res ? "Sim" : "Não");


