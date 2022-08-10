<?php
  include_once "classes/Fabricante.php";
  include_once "classes/Produto.php";

  function create_prod(array $dados) : Produto {
    $prod = new Produto(
      $dados["desc"],
      $dados["estoque"],
      $dados["preco"],
      $dados["fabr"]
    );
    return $prod;
  }

  function create_fabr(array $dados) : Fabricante {
    $fabricante = new Fabricante(
      $dados["nome"],
      $dados["endereco"],
      $dados["doc"]
    );
    return $fabricante;
  }

  function exibir_dados_produto(Produto $produto) {
    echo "<li> Descrição: " . $produto->get_descricao() . "; </li>";
    echo "<li> Estoque: " . $produto->get_estoque() . "; </li>";
    echo "<li> Preço: R$" . number_format($produto->get_preco(), 2, ",", ".") . "; </li>";
    echo "<li> Nome do Fabricante: " . $produto->get_fabricante()->get_nome() . "</li>";
  }

  function exibir_dados_fabricante(Fabricante $fabricante) {
    echo "<li> Nome: " . $fabricante->get_nome() . "; </li>";
    echo "<li> Endereço: " . $fabricante->get_endereco() . "; </li>";
    echo "<li> Documento: " . $fabricante->get_documento() . "</li>";
  }

  $dados_fabr = [
    "nome" => $_POST["nome_fabr"],
    "endereco" => $_POST["endereco_fabr"],
    "doc" => $_POST["doc_fabr"]
  ];

  $fabricante = create_fabr($dados_fabr);

  $dados_prod = [
    "desc" => $_POST["desc_prod"],
    "estoque" => $_POST["estoque_prod"],
    "preco" => $_POST["preco_prod"],
    "fabr" => $fabricante
  ];

  $produto = create_prod($dados_prod);
  
?>