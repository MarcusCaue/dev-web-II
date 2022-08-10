<?php
  include_once "Fabricante.php";

  class Produto {
    private string $descricao;
    private float $estoque;
    private float $preco;
    private Fabricante $fabricante;

    public function __construct(string $descricao, float $estoque, float $preco, Fabricante $fabricante) {
      $this->descricao = $descricao;
      $this->estoque = $estoque;
      $this->preco = $preco;
      $this->fabricante = $fabricante;
    }

    public function get_descricao() : string {
      return $this->descricao;
    }

    public function get_estoque() : float {
      return $this->estoque;
    }

    public function get_preco() : float {
      return $this->preco;
    }

    public function get_fabricante() : Fabricante {
      return $this->fabricante;
    }

    public function set_fabricante(Fabricante $fabricante) {
      $this->fabricante = $fabricante;
    }

  } 
?>