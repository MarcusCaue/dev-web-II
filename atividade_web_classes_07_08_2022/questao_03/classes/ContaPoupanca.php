<?php
  include_once "Conta.php";

  class ContaPoupanca extends Conta {
    
    public function __construct(string $agencia, string $conta, float $saldo)
    {
      $this->agencia = $agencia;
      $this->conta = $conta;
      $this->saldo = $saldo;
    }

    public function retirar($quantia) : bool {
      if ($quantia <= $this->saldo) {
        $this->saldo -= $quantia;
        return true;
      } else {
        return false;
      }
    }

    public function depositar(float $quantia) : bool {
      $this->saldo += $quantia;
      return true;
    }

  }

?>