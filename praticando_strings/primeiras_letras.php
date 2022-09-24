<?php
    $cidade = explode(" ", strtolower(trim(readline("Em que cidade você nasceu? "))));
    echo ($cidade[0] == "santo" ? "True" : "False");

