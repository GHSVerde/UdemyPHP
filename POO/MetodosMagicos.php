<?php

class Endereco {
    //Metodos
    private $logradouro;
    private $numero;
    private $cidade;
    
    //Encapsulamento
    public function getLogradouro() {return $this->logradouro;}
    public function setLogradouro($args) {$this->logradouro = $args;}
    
    public function getNumero() {return $this->numero;}
    public function setNumero($args) {$this->numero = $args;}
    
    public function getCidade() {return $this->cidade;}
    public function setCidade($args) {$this->cidade = $args;}
    
    //Metodos Magicos
    public function __construct($argsLogradouro, $argsNumero, $argsCidade) {
        $this->logradouro = $argsLogradouro;
        $this->numero     = $argsNumero;
        $this->cidade     = $argsCidade;
    }
    
    public function __destruct() {
        //var_dump("DESTRUIR");
    }
    
    public function __toString() {
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }
}

$meuEndereco = new Endereco("Rua Jose Cavalcante Sobrinho", 120, "Fortaleza");

echo $meuEndereco."<br><br>";
?>
