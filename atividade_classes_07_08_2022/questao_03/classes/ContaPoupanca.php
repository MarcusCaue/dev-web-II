<?php
  include_once("Conta.php");

  class ContaPoupanca extends Conta {
    
    public function __construct($agencia, $conta, $saldo)
    {
      $this->agencia = $agencia;
      $this->conta = $conta;
      $this->saldo = $saldo;
    }

    public function retirar($quantia) {
      if ($quantia <= $this->saldo && $quantia > 0) {
        $this->saldo -= $quantia;
        return true;
      }
      return false;
    }

    public function depositar($quantia) {
      if ($quantia > 0) {
        $this->saldo += $quantia;
        return true;
      }
      return false;
    }

    public function clone() {
      $agencia = $this->get_agencia();
      $conta = $this->get_conta();
      $saldo = $this->get_saldo();

      $clone = new ContaPoupanca($agencia, $conta, $saldo);

      return $clone;
    }
  }
?>