<?php

abstract class Carro{
    abstract public acelerar();
}

class CarroCombustao extends Carro{
    public function acelerar(){
        echo "Injetando combustivel";
    }
}

class CarroEletrico extends Carro{
    public function acelerar(){
        echo "Enviar energia";
    }
}

$carroCombustao = new CarroCombustao();
$carroCombustao->acelerar();

echo "<br>";

$carroEletrico = new CarroEletrico();
$carroEletrico->acelerar();
?>