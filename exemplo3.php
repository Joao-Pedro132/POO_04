<?php

abstract class Veiculo{
    abstract function mover(){
        echo "O carro está movendo";
    }
    public function acelerar(){
        Echo "O carro está acelerando";
    }
}

class Carro extends Veiculo{
    public function mover(){
        echo 'O carro está movendo';
    }
}

$carro = new Carro();
$carro->mover();
?>