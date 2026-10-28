<?php

abstract class Veiculo{
    private string $modelo;

    public function __construct($modelo){
        $this->modelo = $modelo;
    }

    public function GetModelo(){
        return $this->modelo;
    }

    abstract function mover();
    
}

class Carro extends Veiculo{
    protected string $cor;

    public function __construct($modelo, $cor){
        parent:: __construct($modelo);
        $this->cor = $cor;
    }
    public function mover(){
        echo "O carro está movendo";
    }

    public function GetCor(){
        echo $this->cor;
    }
}

$carro = new Carro('Astra', 'Preto');
echo $carro->GetModelo();
echo "<br>";
$carro->mover();
echo "<br>";
$carro->GetCor();
?>