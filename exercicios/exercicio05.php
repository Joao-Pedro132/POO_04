<?php

abstract class FormasGeometrica{
    abstract function CalcularArea();
}

class Retangulo extends FormasGeometrica{
    protected float $base;
    protected float $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function CalcularArea(){
        return Number_format($this->base * $this->altura, 2, ",", ".");
    }

    public function MostrarResultados(){
        echo "Area do Retangulo: " . $this->CalcularArea() . "cm²<br>";
    }
}

class Circulo extends FormasGeometrica{
    protected float $raio;

    public function __construct($raio){
        $this->raio = $raio;
    }

    public function CalcularArea(){
        return Number_format(3.14 * ($this->raio * $this->raio), 2, ",", ".");
    }

    public function MostrarResultados(){
        echo "Area do Circulo: " . $this->CalcularArea() . "cm²<br>";
    }
}


$retangulo = new Retangulo(8, 5);
$retangulo->CalcularArea();
$retangulo->MostrarResultados();

echo "<br>";

$circulo = new Circulo(4, 7);
$circulo->CalcularArea();
$circulo->MostrarResultados();
?>