<?php

class Frete{
    protected string $peso;
    
    public function __construct($peso){
        $this->peso = $peso;
    }

    public function CalcularFrete(){
        echo "Calculando Frete...";
    }
}

class FreteNormal extends Frete{
    public function __construct($peso){
        parent:: __construct($peso);
    }

    public function CalcularFrete(){
        return ($this->peso * 2) + 10;
    }

    public function ExibirFrete(){
        echo "Valor do Frete: R$ " . number_format($this->CalcularFrete(), 2, ",", ".") . "<br>";
    }
}

class FreteExpresso extends Frete{
    public function __construct($peso){
        parent:: __construct($peso);
    }

    public function CalcularFrete(){
        return ($this->peso * 5) + 20;
    }

    public function ExibirFrete(){
        echo "Valor do Frete: R$ " . number_format($this->CalcularFrete(), 2, ",", ".") . "<br>";
    }
}


class RetiradaLoja extends Frete{
    public function __construct($peso){
        parent:: __construct($peso);
    }

    public function CalcularFrete(){
        return "Frete Gratuito!";
    }

    public function ExibirFrete(){
        echo "Valor do Frete: R$ " . $this->CalcularFrete() . "<br>";
    }
    
}


$entrega1 = new FreteNormal(3);
$entrega1->CalcularFrete();
$entrega1->ExibirFrete();

$entrega2 = new FreteExpresso(3);
$entrega2->CalcularFrete();
$entrega2->ExibirFrete();

$entrega3 = new RetiradaLoja(3);
$entrega3->CalcularFrete();
$entrega3->ExibirFrete();
?>