<?php
  include_once("functions.php");
  
  # Preenche o vetor abaixo com objetos das classes ContaCorrente e ContaPoupanca baseado nos dados salvo no arquivo em "dados_contas/contas.txt"
  $contas = ler_dados_arquivo();
  
  # Adicionando uma nova conta
  $dados_form = [
    "agencia" => $_POST["agencia"],
    "conta" => $_POST["conta"],
    "saldo" => floatval($_POST["saldo"]),
    "limite" => floatval($_POST["limite"]),
    "tipo" => $_POST["tipo"],
  ];
  $nova_conta = criar_add_conta($dados_form, $contas);

  # Salvando os dados dessa conta no arquivo
  gravar_arquivo($nova_conta);

?>