<?php
    $number = readline("Digite um número: ");

    if ($number % 10 === 0) {
        echo "O número informado é divisível por 10\n";
    } else if ($number % 5 === 0) {
        echo "O número informado é divisível por 5\n";
    } else if ($number % 2 === 0) {
        echo "O número informado é divisível por 2\n";
    } else {
        echo "O número informado NÃO É divisível por 10, por 5 e nem por 2\n";
    }
?>