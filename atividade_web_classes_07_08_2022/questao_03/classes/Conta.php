<?php

  abstract class Conta {
    protected string $agencia;
    protected string $conta;
    protected float $saldo;

    public abstract function retirar($quantia) : bool;
    public abstract function depositar(float $quantia) : bool;

    public function get_saldo() : float {
      return $this->saldo;
    }

    public function get_conta() : string {
      return $this->conta;
    }

    public function get_agencia() : string {
      return $this->agencia;
    }

  }


?>