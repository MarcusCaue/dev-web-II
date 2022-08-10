<?php
  include_once "main.php";

  $dados_form = [
    "agencia" => $_POST["agencia"],
    "conta" => $_POST["conta"],
    "saldo" => floatval($_POST["saldo"]),
    "limite" => floatval($_POST["limite"]),
    "tipo" => $_POST["tipo"],
  ];

  $nova_conta = criar_conta($dados_form);

  if (get_class($nova_conta) == "ContaCorrente") {
    array_push($contas["corrente"], $nova_conta);
  } else {
    array_push($contas["poupanca"], $nova_conta);
  }

?>