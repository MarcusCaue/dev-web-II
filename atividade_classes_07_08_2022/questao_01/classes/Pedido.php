<?php

  class Pedido {
    private int $id_pedido;
    private float $total_pedido;
    private array $items;

    public function __construct(int $id_pedido, array $items) {
      $this->id_pedido = $id_pedido;
      $this->items = $items;
      $this->total_pedido = $this->calc_total();
    }

    private function calc_total() : float {
      $total = 0;

      for ($i = 0; $i < sizeof($this->items); $i++) {
        $item = $this->items[$i];
        $preco_item = $item->get_preco() * $item->get_quant();
        $total += $preco_item;
      }

      return $total;
    } 

    # Getters 
    public function get_id_pedido() : int {
      return $this->id_pedido;
    }

    public function get_total_pedido() : float {
      return $this->total_pedido;
    }

    public function get_items() : array {
      return $this->items;
    }

    # Setters
    public function set_id_pedido(int $id_pedido) {
      $this->id_pedido = $id_pedido;
    }

    public function set_total_pedido() {
      $this->total_pedido = $this->calc_total();
    }

    public function set_items(array $items) {
      $this->items = $items;
    }
  }

?>