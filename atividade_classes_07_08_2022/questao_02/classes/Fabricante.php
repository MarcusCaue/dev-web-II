<?php

  class Fabricante {
    private string $nome;
    private string $endereco;
    private string $documento;

    public function __construct(string $nome, string $endereco, string $documento) {
      $this->nome = $nome;
      $this->endereco = $endereco;
      $this->documento = $documento;
    }

    public function get_nome() : string {
      return $this->nome;
    }

    public function get_endereco() : string {
      return $this->endereco;
    }

    public function get_documento() : string {
      return $this->documento;
    }
  }

?>