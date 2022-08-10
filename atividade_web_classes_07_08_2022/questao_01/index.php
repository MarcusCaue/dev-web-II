<?php
  include_once "classes/Item.php";
  include_once "classes/Pedido.php";

  function create_item(array $dados) : Item {
    $item = new Item (
      $dados["id"],
      $dados["nome"],
      $dados["marca"],
      $dados["tipo"],
      $dados["quant"],
      $dados["preco"]
    );

    return $item;
  }

  function exibir_dados_item(Item $item) {
    echo "<li> ID -> " . $item->get_id_item() . "; </li>";
    echo "<li> Nome -> " . $item->get_nome() . "; </li>";
    echo "<li> Marca -> " . $item->get_marca() . "; </li>";
    echo "<li> Tipo -> " . $item->get_tipo() . "; </li>";
    echo "<li> Quantidade -> " . $item->get_quant() . "; </li>";
    echo "<li> Preço -> R$" . number_format($item->get_preco(), 2, ",", ".") . " </li>";
  }

  $dados_form = [
    "id" => intval($_POST["id_item"]),
    "nome" => $_POST["nome_item"],
    "marca" => $_POST["marca_item"],
    "tipo" => $_POST["tipo_item"],
    "quant" => intval($_POST["quant_item"]),
    "preco" => floatval($_POST["preco_item"])
  ];

  $item = create_item($dados_form);
  $pedido = new Pedido(0, [$item]);
?>