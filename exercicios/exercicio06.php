<?php

abstract class Funcionario{
    protected string $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function GetNome(){
        return $this->nome;
    }

    abstract function CalcularSalario();
}

class FuncionarioFixo extends Funcionario{
    protected float $salarioMensal;

    public function __construct($nome, $salarioMensal){
        parent:: __construct($nome);
        $this->salarioMensal = $salarioMensal;
    }

    public function CalcularSalario(){
        echo "Funcionario Fixo <br> Salário: R$ " . Number_format($this->salarioMensal, 2, ",", ".") . "<br>";
    }
}

class FuncionarioComissionado extends Funcionario{
    protected float $salarioMensal;
    protected float $valorTotalVendas;

    public function __construct($nome, $salarioMensal, $valorTotalVendas){
        parent:: __construct($nome);
        $this->salarioMensal = $salarioMensal;
        $this->valorTotalVendas = $valorTotalVendas;
    }

    public function CalcularComissao(){
        return ($this->valorTotalVendas * 0.10);
    }

    public function CalcularSalario(){
        $this->salarioMensal = $this->salarioMensal + $this->CalcularComissao();
        echo "Funcionario Comissionado <br> Salário Total: R$" . Number_format($this->salarioMensal, 2, ",", ".") . "<br>";
    }
}

$funcionario1 = new FuncionarioFixo('João Pedro', 1600);
echo $funcionario1->calcularSalario();

echo "<br>";

$funcionario2 = new FuncionarioComissionado('Robson', 3000, 7000);
$funcionario2->CalcularComissao();
$funcionario2->calcularSalario();

?>