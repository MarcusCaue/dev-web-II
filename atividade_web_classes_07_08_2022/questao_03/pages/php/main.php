<?php
  include_once "../../classes/Conta.php";
  include_once "../../classes/ContaPoupanca.php";
  include_once "../../classes/ContaCorrente.php";

  function exibir_dados_conta($conta) {

    if (get_class($conta) == "ContaCorrente") {
      echo "<li> Tipo de conta: Conta Corrente </li>";
      echo "<li> Limite: R$" . number_format($conta->get_limite(), 2, ",", ".") . "</li>";
    } else {
      echo "<li> Tipo de conta: Conta Poupança </li>";
    }

    echo "<li> Agência: " . $conta->get_agencia() . "</li>";
    echo "<li> Conta: " . $conta->get_conta() . "</li>";
    echo "<li> Saldo: R$" . number_format($conta->get_saldo(), 2, ",", ".") . "</li>";
  }

  function mostrar_contas($contas) {
    $tamanho_contas = sizeof($contas);

    if ($tamanho_contas == 2) {
      $tamanho_coluna = 6;
    } else if ($tamanho_contas == 3) {
      $tamanho_coluna = 4;
    } 

    if (get_class($contas[0]) == "ContaCorrente") {
      for ($i = 0; $i < $tamanho_contas; $i++) {
        $conta = $contas[$i];
       
        $html = "<div class='col-$tamanho_coluna py-3 border border-1'>";
        $html .= " <ul> ";
        $html .= "    <li> Agência: " . $conta->get_agencia() . " </li>";
        $html .= "    <li> Conta: " . $conta->get_conta() . " </li>";
        $html .= "    <li> Saldo: R$" . number_format($conta->get_saldo(), 2, ",", ".") . " </li>";
        $html .= "    <li> Limite: R$" . number_format($conta->get_limite(), 2, ",", ".") . " </li>";
        $html .= " </ul> ";
        $html .= " </div> "; 

        echo $html;
      }
    } else {
      for ($i = 0; $i < $tamanho_contas; $i++) {
        $conta = $contas[$i];
        $html = "<div class='col-$tamanho_coluna py-3 border border-1'>";
        $html .= " <ul> ";
        $html .= "    <li> Agência: " . $conta->get_agencia() . " </li>";
        $html .= "    <li> Conta: " . $conta->get_conta() . " </li>";
        $html .= "    <li> Saldo: R$" . number_format($conta->get_saldo(), 2, ",", ".") . " </li>";
        $html .= " </ul> ";
        $html .= " </div> "; 

        echo $html;
      }
    } 
  }

  function criar_conta(array $dados) {
    if ($dados["tipo"] == "corrente") {
      $conta = new ContaCorrente(
        $dados["agencia"],
        $dados["conta"],
        $dados["saldo"],
        $dados["limite"]
      );
    } else {
      $conta = new ContaPoupanca(
        $dados["agencia"],
        $dados["conta"],
        $dados["saldo"],
      );
    }

    return $conta;
  }

  # Contas Corrente
  $cc1 = criar_conta(["tipo" => "corrente", "agencia" => "2312-3", "conta" => "12345678-8", "saldo" => 3580, "limite" => 1000]);
  $cc2 = criar_conta(["tipo" => "corrente", "agencia" => "5633-3", "conta" => "98271634-1", "saldo" => 7800, "limite" => 3000]);

  # Contas Poupança
  $cp1 = criar_conta(["tipo" => "poupanca", "agencia" => "3344-1", "conta" => "32312453-4", "saldo" => 30000]);
  $cp2 = criar_conta(["tipo" => "poupanca", "agencia" => "9980-2", "conta" => "54546722-3", "saldo" => 100000]);

  $contas = ["corrente" => [$cc1, $cc2], "poupanca" => [$cp1, $cp2]];

?>