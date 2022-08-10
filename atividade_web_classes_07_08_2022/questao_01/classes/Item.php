<?php

  class Item {
    private int $id_item;
    private string $nome;
    private string $marca;
    private string $tipo;
    private int $quant;
    private float $preco;

    public function __construct(int $id_item, string $nome, string $marca, string $tipo, int $quant, float $preco) {
      $this->id_item = $id_item;
      $this->nome = $nome;
      $this->marca = $marca;
      $this->tipo = $tipo;
      $this->quant = $quant;
      $this->preco = $preco;
    }

    # Getters
    public function get_id_item() : int {
      return $this->id_item;
    }

    public function get_nome() : string {
      return $this->nome;
    }

    public function get_marca() : string {
      return $this->marca;
    }

    public function get_tipo() : string {
      return $this->tipo;
    }

    public function get_quant() : int {
      return $this->quant;
    }

    public function get_preco() : float {
      return $this->preco;
    }

    # Setters
    public function set_id_item(int $id_item) {
      $this->id_item = $id_item;
    }

    public function set_nome(string $nome) {
      $this->nome = $nome;
    }

    public function set_marca(string $marca) {
      $this->marca = $marca;
    }

    public function set_tipo(string $tipo) {
      $this->tipo = $tipo;
    }

    public function set_quant(int $quant) {
      $this->quant = $quant;
    }

    public function set_preco(float $preco) {
      $this->preco = $preco;
    }

  }
?>