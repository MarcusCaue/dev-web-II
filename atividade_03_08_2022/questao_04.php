<?php
  $a = (float) readline("Digite o tamanho de um lado do triângulo: ");
  $b = (float) readline("Digite o tamanho do segundo lado: ");
  $c = (float) readline("Digite o tamanho do terceiro lado: ");

  if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    echo "Os lados informados geram um triângulo ";

    if ($a == $b && $b == $c) {
      echo "EQUILÁTERO\n";
    } else if ($a != $b && $b != $c && $a != $c) {
      echo "ESCALENO\n";
    } else {
      echo "ISÓSCELES\n";
    }
  } else {
    echo "Os lados informados NÃO geram um triângulo\n";
  }
?>