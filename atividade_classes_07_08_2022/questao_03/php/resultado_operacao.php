<?php
  include_once("functions.php");
  
  function realizar_operacao($conta, $valor, $tipo_operacao) {
    # Depósito
    if ($tipo_operacao == "depósito") {
      if ($conta->depositar($valor)) {
        return true;
      } 
      return false;
    } 
    # Saque
    else {
      if ($conta->retirar($valor)) {
        return true;
      } 
      return false;
    }
  } 

  # Procurando os dados da conta recém-criada
  $arq = file("dados_contas/contas.txt", FILE_IGNORE_NEW_LINES);
  
  $dados_nova_conta = explode(";", $arq[sizeof($arq) - 1]);
  $tipo_conta = substr($dados_nova_conta[0], strpos($dados_nova_conta[0], "->") + 2);
  $agencia    = substr($dados_nova_conta[1], strpos($dados_nova_conta[1], "->") + 2);
  $conta      = substr($dados_nova_conta[2], strpos($dados_nova_conta[2], "->") + 2);
  $saldo      = (float) substr($dados_nova_conta[3], strpos($dados_nova_conta[3], "->") + 2);

  $conta_recente = null;
  if ($tipo_conta == "corrente") {
    $limite = (float) substr($dados_nova_conta[4], strpos($dados_nova_conta[4], "->") + 2);
    $conta_recente = new ContaCorrente($agencia, $conta, $saldo, $limite);
  } else {
    $conta_recente = new ContaPoupanca($agencia, $conta, $saldo);
  }

  $conta2 = $conta_recente->clone();

  $valor = 0; $operacao = "";
  if (isset($_POST["valor_deposito"])) {
    $valor = floatval($_POST["valor_deposito"]);
    $operacao = "depósito";
  } else if (isset($_POST["valor_saque"])) {
    $valor = floatval($_POST["valor_saque"]);
    $operacao = "saque";
  }

  $resultado_operacao = realizar_operacao($conta2, $valor, $operacao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado da Operação</title>

  <!-- BootStrap Import -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
  <main class="container shadow p-4 col-md-10 col-sm-12">
    <header>
      <h1 class="text-center">Resultado da Operação</h1>
      <hr class="mx-auto mb-4" style="width: 90%;">
    </header>

    <section>
      <p class="text-center fs-4"> <?php if ($resultado_operacao) { echo "Movimentação do saldo concluída com sucesso!"; } else { echo "A movimentação não foi realizada. Tente novamente mais tarde."; } ?> </p>
      <hr class="mx-auto mb-4" style="width: 90%;">

      <section>
        <h2 class="text-center fs-3">Dados da Conta</h2>
        <hr class="mx-auto mb-4" style="width: 45%;">

        <section class="d-flex">
          <div class="mx-auto fs-5 col-4">
            <h3>Dados Antigos</h3>
            <ul> <?php if ($resultado_operacao) { exibir_dados_conta($conta_recente); } else { echo "<li>Os dados não foram modificados.</li>"; } ?> </ul>
          </div>
          <div class="mx-auto fs-5 col-4">
            <h3>Dados Modificados</h3>
            <ul> <?php if ($resultado_operacao) { exibir_dados_conta($conta2); } else { echo "<li>Os dados não foram modificados.</li>"; } ?> </ul>
          </div>
        </section>
      </section>
    </section>
  </main>
</body>
</html>