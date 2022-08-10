<?php
  include_once "Conta.php";

  class ContaCorrente extends Conta {

    protected float $limite;
    
    public function __construct(string $agencia, string $conta, float $saldo, float $limite)
    {
      $this->agencia = $agencia;
      $this->conta = $conta;
      $this->saldo = $saldo;
      $this->limite = $limite;
    }

    public function get_limite() : float {
      return $this->limite;
    }

    public function retirar($quantia) : bool {
      if ($quantia <= $this->saldo && $quantia <= $this->limite) {
        $this->saldo -= $quantia;
        return true;
      } else {
        return false;
      }
    }

    public function depositar(float $quantia) : bool {
      if ($quantia <= $this->limite) {
        $this->saldo += $quantia;
        return true;
      } else {
        return false;
      }
    }
  }

?>