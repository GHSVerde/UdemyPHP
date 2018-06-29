<?php
class Pessoa {//Declaração da Classe
    public $nome;//Atributo
    
    public function falar() {//Método
        return "O meu nome é ". $this->nome;
    }
}

$pessoa = new Pessoa();

$pessoa->nome = "Gabriel";

echo $pessoa->falar();
?>
