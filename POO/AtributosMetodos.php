<?php
class Carro {//Declaração de Classe
    //Atributos do Carro
    private $modelo;
    private $ano;
    private $motor;
    
    //Encapsulamento Modelo
    public function getModelo() {return $this->modelo;}
    public function setModelo($args) {$this->modelo = $args;}
    
    //Encapsulamento Ano
    public function getAno() {return $this->ano;}
    public function setAno($args) {
        if ($args > (2018-10)) {
            $this->ano = $args;
        } else {
            echo "Esse ano é inválido";
        }
    }
    
    //Encapsulamento Motor
    public function getMotor() {return $this->motor;}
    public function setMotor($args) {$this->motor = $args;}
    
    //Inicio Método para retornar todos.
    public function exibir() {
        return array(
            "modelo" => $this->getModelo(),
            "motor"  => $this->getMotor(),
            "ano"    => $this->getAno()
        );
    } //Fechamento - Exibir
}

//Teste da Classe
$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno(2017);

var_dump($gol->exibir());


?>
