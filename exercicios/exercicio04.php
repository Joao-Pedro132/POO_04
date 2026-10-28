<?php

abstract class Eletrodomesticos{
    protected string $marca;

    public function __construct($marca) {
        $this->marca = $marca;
    }

    public function GetMarca(){
        return $this->marca;
    }

    abstract function Ligar();
}

class Televisao extends Eletrodomesticos{
    public function __construct($marca){
        parent:: __construct($marca);
    }

    public function Ligar(){
        echo "Ligando Tela...<br>";
    }

    public function MostrarDetalhes(){
        echo "Marca: " . $this->marca .  " Estado: Ligado<br>";
    }
}

class Geladeira extends Eletrodomesticos{
    public function __construct($marca){
        parent:: __construct($marca);
    }

    public function Ligar(){
        echo "Iniciando Sistema...<br>";
    }

    public function MostrarDetalhes(){
        echo "Marca: " . $this->marca .  " Estado: Sistema Iniciado<br>";
    }
}


$Eletrodomestico1 = new Televisao('Sansung');
echo $Eletrodomestico1->Ligar();
$Eletrodomestico1->MostrarDetalhes();

echo "<br>";

$Eletrodomestico2 = new Geladeira('Sansung');
echo $Eletrodomestico2->Ligar();
$Eletrodomestico2->MostrarDetalhes();
?>