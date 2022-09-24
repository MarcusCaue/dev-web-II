<?php include_once "index.php" ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dados do Produto e do Fabricante </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <h1>Dados do Produto e do Fabricante</h1>
    <hr>
  </header>
  
  <main>
    <h2>Dados do Fabricante: </h2>
    <ul>
      <?php exibir_dados_fabricante($fabricante) ?>
    </ul>

    <h2>Dados do Produto: </h2>
    <ul>
      <?php exibir_dados_produto($produto) ?>
    </ul>
  </main>
  
</body>
</html>