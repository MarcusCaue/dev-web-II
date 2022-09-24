<?php
  function geraDados() {
    $array = array();
    for ($i = 0; $i < 10; $i++) {
      $array[] = rand(0, 10);
    }
    return $array;
  }

  function find_uncommon($vetor1, $vetor2, &$vetor3) {

    for ($i = 0; $i < 10; $i++) {
      $value1 = $vetor1[$i];
      $find_value1_in_vetor2 = array_search($value1, $vetor2);
      $value1_in_vetor3 = array_search($value1, $vetor3);
  
      # Inserindo value1
      if ($find_value1_in_vetor2 === false && $value1_in_vetor3 === false) {
        $vetor3[] = $value1;
      } 
    }

  }

  $vetor1 = geraDados();
  $vetor2 = geraDados();
  $vetor3 = array();

  # Buscando os valores de vetor1 em vetor2
  find_uncommon($vetor1, $vetor2, $vetor3);

  # Buscando os valores de vetor2 em vetor1
  find_uncommon($vetor2, $vetor1, $vetor3);

  echo "Valores não comuns aos vetores: \n";
  print_r($vetor3);
?>