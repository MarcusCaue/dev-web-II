<?php
  abstract class Conta {
    protected $agencia;
    protected $conta;
    protected $saldo;

    public abstract function retirar($quantia);
    public abstract function depositar($quantia);

    public function get_saldo() {
      return $this->saldo;
    }

    public function get_conta() {
      return $this->conta;
    }

    public function get_agencia() {
      return $this->agencia;
    }
  }
?>