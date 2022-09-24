<?php
  include_once("Conta.php");

  class ContaCorrente extends Conta {

    protected $limite;
    
    public function __construct($agencia, $conta, $saldo, $limite)
    {
      $this->agencia = $agencia;
      $this->conta = $conta;
      $this->saldo = $saldo;
      $this->limite = $limite;
    }

    public function get_limite() {
      return $this->limite;
    }

    public function retirar($quantia) {
      if ($quantia <= $this->saldo && $quantia <= $this->limite && $quantia > 0) {
        $this->saldo -= $quantia;
        return true;
      }
      return false;
    }

    public function depositar($quantia) {
      if ($quantia <= $this->limite && $quantia > 0) {
        $this->saldo += $quantia;
        return true;
      } 
      return false;
    }

    public function clone() {
      $agencia = $this->get_agencia();
      $conta = $this->get_conta();
      $saldo = $this->get_saldo();
      $limite = $this->get_limite();

      $clone = new ContaCorrente($agencia, $conta, $saldo, $limite);

      return $clone;
    }
  }

?>