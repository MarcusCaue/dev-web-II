<?php
  $fim_intervalo = (int) readline("Digite o número que será o fim do intervalo: ");

  if ($fim_intervalo < 1) {
    echo("Não existe intervalo crescente com esse número.\n");
  } else {  
    $produto = 1;
    for ($i = 1; $i < $fim_intervalo + 1; $i++) {
      echo $i . " ";
      $produto *= $i;
    }

    echo "\nProduto de todos os valores do intervalo: \n" . $produto;    
  }

?>