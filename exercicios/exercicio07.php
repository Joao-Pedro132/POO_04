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

    public function Depositar($valor){
        if ($valor > 0 ){
            $this->saldo = $this->saldo + $valor;
        }
        else{
            echo "Valor tem que ser positivo!";
        }
    }

    public function ExibirSaldo(){
        echo "Titular: " . $this->titular . "<br>";
        echo "Saldo atual de R$ " . Number_format($this->saldo, 2, ",", ".") . "<br>";
    }

    abstract function CalcularTarifa();

}

class ContaCorrente extends ContaBancaria{
    public function __construct($titular, $saldo){
        parent:: __construct($titular, $saldo);
    }

    public function CalcularTarifa(){
        $this->saldo = $this->saldo - 15;
        echo "Tarifa de Manutenção de R$ 15,00 aplicada...<br>";
    }

}

class ContaPoupanca extends ContaBancaria{
    public function __construct($titular, $saldo){
        parent:: __construct($titular, $saldo);
    }

    public function CalcularTarifa(){
        $this->saldo = $this->saldo;
        echo "Tarifa de Manutenção no valor de R$ 0,00 aplicada...<br>";
    }

}

$conta1 = new ContaCorrente('João Pedro', 500);
$conta1->ExibirSaldo();
$conta1->Depositar(200);
$conta1->CalcularTarifa();
$conta1->ExibirSaldo();

echo "<br>";

$conta1 = new ContaPoupanca('Manuela', 500);
$conta1->ExibirSaldo();
$conta1->Depositar(200);
$conta1->CalcularTarifa();
$conta1->ExibirSaldo();

?>