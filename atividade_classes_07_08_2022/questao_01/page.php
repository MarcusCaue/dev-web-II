<?php include_once "index.php" ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dados do Item</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <h1>Dados do Item Cadastro</h1>
    <hr>
  </header>
  
  <main style="width: 50vw;">
      <ul>
        <li>
          Item cadastrado no Pedido de ID <?php echo $pedido->get_id_pedido(); ?>; 
        </li>

        <li>
          Valor total do pedido: R$<?php echo number_format($pedido->get_total_pedido(), 2, ",", "."); ?>;
        </li>
        
        <li> Dados do item: 
          <ul>
            <?php exibir_dados_item($item); ?>
          </ul>
        </li>
      </ul>
  </main>
  
</body>
</html>