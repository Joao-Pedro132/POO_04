<?php

class Notificacao{
    protected string $mensagem;

    public function __construct($mensagem){
        $this->mensagem = $mensagem;
    }

    public function Enviar(){
        echo "Enviando...";
    }
}

class NotificacaoEmail extends Notificacao{
    public function __construct($mensagem){
        parent:: __construct($mensagem);
    }

    public function Enviar(){
        return "mensagem enviada por email...";
    }

    public function processarNotificacao(){
        echo "Mensagem: " . $this->mensagem . "<br>";
    }
}

class NotificacaoSMS extends Notificacao{
    public function __construct($mensagem){
        parent:: __construct($mensagem);
    }

    public function Enviar(){
        return "mensagem enviada por SMS...";
    }

    public function processarNotificacao(){
        echo "Mensagem: " . $this->mensagem . "<br>";
    }
}

class NotificacaoPush extends Notificacao{
    public function __construct($mensagem){
        parent:: __construct($mensagem);
    }

    public function Enviar(){
        return "mensagem enviada por PUSH...";
    }

    public function processarNotificacao(){
        echo "Mensagem: " . $this->mensagem . "<br>";
    }
}

$mensagem1 = new NotificacaoEmail("João Pedro");
echo $mensagem1->Enviar();
echo "<br>";
$mensagem1->ProcessarNotificacao();

echo "<br>";

$mensagem2 = new NotificacaoSMS("João Pedro");
echo $mensagem2->Enviar();
echo "<br>";
$mensagem2->ProcessarNotificacao();

echo "<br>";

$mensagem3 = new NotificacaoEmail("João Pedro");
echo $mensagem3->Enviar();
echo "<br>";
$mensagem3->ProcessarNotificacao();

echo "<br>";
?>