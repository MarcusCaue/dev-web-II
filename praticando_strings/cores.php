<?php
$cor_reset             = "\033[0m";

$cor_texto             = array();
$cor_texto['black']        = "\033[0;30m";
$cor_texto['dark_gray']     = "\033[1;30m";
$cor_texto['blue']        = "\033[0;34m";
$cor_texto['light_blue']    = "\033[1;34m";
$cor_texto['green']        = "\033[0;32m";
$cor_texto['light_green']    = "\033[1;32m";
$cor_texto['cyan']        = "\033[0;36m";
$cor_texto['light_cyan']    = "\033[1;36m";
$cor_texto['red']        = "\033[0;31m";
$cor_texto['light_red']        = "\033[1;31m";
$cor_texto['purple']        = "\033[0;35m";
$cor_texto['light_purple']    = "\033[1;35m";
$cor_texto['brown']        = "\033[0;33m";
$cor_texto['yellow']        = "\033[1;33m";
$cor_texto['light_gray']    = "\033[0;37m";
$cor_texto['white']        = "\033[1;37m";

$cor_bg             = array();
$cor_bg['black']        = "\033[40m";
$cor_bg['red']            = "\033[41m";
$cor_bg['green']        = "\033[42m";
$cor_bg['yellow']        = "\033[43m";
$cor_bg['blue']            = "\033[44m";
$cor_bg['magenta']        = "\033[45m";
$cor_bg['cyan']            = "\033[46m";
$cor_bg['light_gray']        = "\033[47m";


/* for ($x = 0; $x < 10; $x++) {
    echo $cor_bg[array_rand($cor_bg)] . $cor_texto[array_rand($cor_texto)] . " Texto em cores " . $cor_reset . "\n";
} */

echo "Digite seu nome: ";
fscanf(STDIN, "%s", $nome);
echo "\nDigite sua idade: ";
fscanf(STDIN, "%d", $idade);
print("\n$nome tem $idade anos de idade.\n");
