<?php

class Animal{
    public function emitirSom(){
        echo "Som desconhecido...";
    }
}

class Gato extends Animal{
    public function emitirSom(){
        echo "Miuuuuuu!";
    }
}

class Cachorro extends Animal{
    public function emitirSom(){
        echo "Auau!";
    }
}

$gato = new Gato();
$gato->emitirSom();

echo "<br>";

$cachorro = new Cachorro();
$cachorro->emitirSom();
?>