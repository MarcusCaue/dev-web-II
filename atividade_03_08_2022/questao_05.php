<?php
  $num_mes = (int) readline("Digite o número do mês que você deseja ver: ");
  
  if ($num_mes > 12 || $num_mes < 1) {
    echo("Não existe mês com esse número.\n");
  } else {
    $meses = ["Janeiro", "Fevereiro", "Março",
            "Abril", "Maio", "Junho",
            "Julho", "Agosto", "Setembro",
            "Outubro", "Novembro", "Dezembro"];
    
    $mes_correspondente = $meses[$num_mes - 1];

    echo("O número $num_mes corresponde ao mês de $mes_correspondente\n");
  }
?>