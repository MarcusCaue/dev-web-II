<?php include_once "main.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciador de Contas</title>
  
  <!-- BootStrap Import -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
  <main class="container shadow p-4 col-md-8 col-sm-12">
    <header>
      <h1 class="text-center">Gerencie as suas Contas</h1>
      <hr class="mx-auto mb-4" style="width: 90%;">
    </header>

    <section id="contas">
      
      <section id="conta_corrente">
        <header>
          <h2 class="text-center">Conta Corrente</h2>
          <hr class="mx-auto" style="width: 85%;">
        </header>
        
        <div class="d-flex">
          <?php mostrar_contas($contas["corrente"]); ?>
        </div>
      </section>

      <section class="mt-3" id="conta_poupanca">
        <header>
          <h2 class="text-center">Conta Poupança</h2>
          <hr class="mx-auto" style="width: 85%;">
        </header>
        
        <div class="d-flex">
          <?php mostrar_contas($contas["poupanca"]); ?>
        </div>
      </section>

    </section>

    <section class="mt-2" id="acao">

      <!-- Modal de Depósito -->
      <div class="modal fade" id="modal_deposito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Digite os seus dados abaixo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="resultado.php" method="POST">
              <div class="modal-body">
                  <div class="my-2">
                    <label class="form-label" for="agencia">Agência</label> <br>
                    <input class="form-control" type="text" name="agencia" id="agencia" min="6" required>
                  </div>
          
                  <div class="my-2">
                    <label class="form-label" for="conta">Conta</label> <br>
                    <input class="form-control" type="text" name="conta" id="conta" min="10" required>
                  </div>
          
                  <div class="my-2">
                    <label class="form-label" for="valor">Valor</label> <br>
                    <input class="form-control" type="number" name="valor" id="valor" min="0" step="0.01" required>
                  </div>

                  <input class="d-none" name="operacao" id="operacao" type="text" value="depositar" disabled>
              </div>

              <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal de Saque -->
      <div class="modal fade" id="modal_saque" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Digite seus dados abaixo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="resultado.php" method="POST">
              <div class="modal-body">
                  <div class="my-2">
                    <label class="form-label" for="agencia">Agência</label> <br>
                    <input class="form-control" type="text" name="agencia" id="agencia" min="6" required>
                  </div>
          
                  <div class="my-2">
                    <label class="form-label" for="conta">Conta</label> <br>
                    <input class="form-control" type="text" name="conta" id="conta" min="10" required>
                  </div>
          
                  <div class="my-2">
                    <label class="form-label" for="valor">Valor</label> <br>
                    <input class="form-control" type="number" name="valor" id="valor" min="0" step="0.01" required>
                  </div>

                  <input class="d-none" name="operacao" id="operacao" type="text" value="sacar" disabled>
              </div>

              <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-between">
        <button type="button" class="btn btn-primary col-5" data-bs-toggle="modal" data-bs-target="#modal_saque">Retirar</button>

        <button type="button" class="btn btn-success col-5" data-bs-toggle="modal" data-bs-target="#modal_deposito">Depositar</button>
      </div>
    </section>
  </main>
</body>
</html>