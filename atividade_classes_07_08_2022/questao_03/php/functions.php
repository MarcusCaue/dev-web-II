<?php
  include_once("../classes/Conta.php");
  include_once("../classes/ContaCorrente.php");
  include_once("../classes/ContaPoupanca.php");

  function exibir_dados_conta($conta) {

    echo "<li> Tipo de conta: ";

    if (get_class($conta) == "ContaCorrente") {
      echo "Conta Corrente </li>";
      echo "<li> Limite: R$" . number_format($conta->get_limite(), 2, ",", ".") . "</li>";
    } else {
      echo "Conta Poupança </li>";
    }

    echo "<li> Agência: " . $conta->get_agencia() . "</li>";
    echo "<li> Conta: " . $conta->get_conta() . "</li>";
    echo "<li> Saldo: R$" . number_format($conta->get_saldo(), 2, ",", ".") . "</li>";
  }

  function mostrar_contas($contas) {
    $quant_contas = sizeof($contas);
    $quant_cols = intdiv(12, $quant_contas);
    
    for ($i = 0; $i < $quant_contas; $i++) {
        $conta = $contas[$i];

        $html = "<div class='col-$quant_cols py-3 border border-1'>";
        $html .= " <ul> ";
        $html .= "    <li> Agência: " . $conta->get_agencia() . " </li>";
        $html .= "    <li> Conta: " . $conta->get_conta() . " </li>";
        $html .= "    <li> Saldo: R$" . number_format($conta->get_saldo(), 2, ",", ".") . " </li>";

        if (get_class($conta) == "ContaCorrente") {
          $html .= "    <li> Limite: R$" . number_format($conta->get_limite(), 2, ",", ".") . " </li>";
        }

        $html .= " </ul> ";
        $html .= " </div> ";
        
       echo $html;
    }
   
  }

  function criar_add_conta($dados, &$contas) {
    if ($dados["tipo"] == "corrente") {
      $conta = new ContaCorrente(
        $dados["agencia"],
        $dados["conta"],
        $dados["saldo"],
        $dados["limite"]
      );
      array_push($contas["corrente"], $conta);
    } else {
      $conta = new ContaPoupanca(
        $dados["agencia"],
        $dados["conta"],
        $dados["saldo"],
      );
      array_push($contas["poupanca"], $conta);
    }

    return $conta;
  }

  function ler_dados_arquivo() {
    /**
     * fopen() -> abre o arquivo
     * fclose()
     * fwrite() -> escreve no arquivo
     * fgets() -> retorna uma linha do arquivo
     * 
    */ 
    $arq = fopen("dados_contas/contas.txt", "r+");
    $contas = ["corrente" => array(), "poupanca" => array()];

    while (!feof($arq)) {
        # Dados da conta no modelo do arquivo
        $dados_conta = fgets($arq);

        if ($dados_conta == "") {
            break;
        }

        # Dados da conta na forma de array
        $dados_conta = explode(";", $dados_conta);

        # Criando a conta como objeto        
        $tipo_conta = substr($dados_conta[0], strpos($dados_conta[0], "->") + 2);
        $agencia    = substr($dados_conta[1], strpos($dados_conta[1], "->") + 2);
        $conta      = substr($dados_conta[2], strpos($dados_conta[2], "->") + 2);
        $saldo      = (float) substr($dados_conta[3], strpos($dados_conta[3], "->") + 2);

        if ($tipo_conta == "corrente") {
            $limite = (float) substr($dados_conta[4], strpos($dados_conta[4], "->") + 2);
            $conta_bancaria = new ContaCorrente($agencia, $conta, $saldo, $limite);
            array_push($contas["corrente"], $conta_bancaria);
        } else {
            $conta_bancaria = new ContaPoupanca($agencia, $conta, $saldo);
            array_push($contas["poupanca"], $conta_bancaria);
        }
    }

    fclose($arq);

    return $contas;
  }

  function gravar_arquivo($nova_conta) {
    $arq = fopen("dados_contas/contas.txt", "a+");

    $agencia = $nova_conta->get_agencia();
    $conta   = $nova_conta->get_conta();
    $saldo   = $nova_conta->get_saldo();

    $linha = "agencia->$agencia;conta->$conta;saldo->$saldo";

    if (get_class($nova_conta) == "ContaCorrente") {
      $limite = $nova_conta->get_limite();
      $linha = "tipo->corrente;" . $linha . ";limite->$limite\r\n";
    } else {
      $linha = "tipo->poupanca;" . $linha . "\r\n";
    }

    fwrite($arq, $linha);

    fclose($arq);
  }
?>