<?php

abstract class ContaBancaria{
    protected string $titular;
    protected float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function GetSaldo(){
        return $this->saldo;
    }

    public function depositar($valor){
        if ($valor > 0 ){
            $this->saldo = $this->saldo + $valor;
        }
        else{
            echo "Valor tem que ser positivo!";
        }
    }

    abstract function CalcularTarifa();

}

class ContaCorrente extends ContaBancaria{
    
}
?>