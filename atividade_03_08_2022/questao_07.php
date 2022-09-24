<?php
  $alt_chico = 1.5;
  $alt_juca = 1.1;

  $anos = 0;
  do {
    $alt_chico += 0.2;
    $alt_juca += 0.3;
    $anos++;
  } while ($alt_juca < $alt_chico);

  echo("São necessários $anos anos para Juca ser maior que Chico.\n");

?>