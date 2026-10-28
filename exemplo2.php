<?php

class Carro{
    public function acelerar(){
        echo "O carro está acelerando...";
    }
}

class CarroCombustao extends Carro{
    public function acelerar(){
        echo "Injetando combustivel";
    }
}

class CarroEletrico extends Carro{
    public function acelerar(){
        echo "Enviando energia";
    }
}

$carro1 = new Carro();
$carro1->acelerar();

echo "<br>";

$carro2 = new CarroCombustao();
$carro2->acelerar();

echo "<br>";

$carro3 = new CarroEletrico();
$carro3->acelerar();

?>