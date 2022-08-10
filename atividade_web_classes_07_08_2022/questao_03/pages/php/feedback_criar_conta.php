<?php include_once "criar_conta.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado da Criação da Conta</title>

  <!-- BootStrap Import -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>

  <main class="container shadow p-2 col-md-8 col-sm-12 mt-4">
    <header class="text-center">
      <h1>Sua Conta Foi Criada com Sucesso</h1>
      <h2>Confira abaixo os dados da sua conta</h2>
      <hr class="mx-auto" style="width: 90%;">
    </header>

    <section class="col-4 mx-auto" id="dados_conta">
      <ul>
        <?php exibir_dados_conta($nova_conta); ?>
      </ul>
    </section>

    <hr class="mx-auto" style="width: 90%;">

    <footer>
      <p class="fs-3 text-center">Clique <a href="gerencia_contas.php" rel="previous" hreflang="pt-br">aqui</a> para gerenciar as suas contas.</p>
    </footer>
  </main>
  
</body>
</html>