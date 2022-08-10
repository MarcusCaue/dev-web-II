<?php
  include_once "../php_functions/index.php";

  $dados_form = [
    "agencia" => $_POST["agencia"],
    "conta" => $_POST["conta"],
    "valor" => floatval($_POST["valor"]),
    "operacao" => $_POST["operacao"]
  ];

  function realizar_operacao($contas, $dados_form) {
    foreach ($contas as $tipo_conta) {
      foreach ($tipo_conta as $dados) {
        $conta_i = $dados;
  
        if ($dados_form["agencia"] == $conta_i->get_agencia() && $dados_form["conta"] == $conta_i->get_conta()) {

          if ($dados_form["operacao"] == "sacar") {
            if ($conta_i->retirar($dados_form["valor"])) {

            }
          }

          $conta_i->depositar($dados_form["valor"]);
          echo "Depósito feito com sucesso!";
          return true;
        }
      }
    }

    return false;
  }

  var_dump($contas);
  
  var_dump($contas);

?>