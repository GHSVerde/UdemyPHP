<?php
class Pessoa {
    public $nome = "Rasmus Lerdoff";  //Todos Podem Ver
    protected $idade = 48;            //Apenas a propria classe e seus herdeiros
    private $senha = "jajaja";        //Apenas a própria classe
    
    //Metodo para exibir as variáveis
    public function verDados() {
        echo $this->nome   ."<br>";
        echo $this->idade  ."<br>";
        echo $this->senha  ."<br>";
    }    
}

class Programador extends Pessoa {//Programador Herda Pessoa
    public function verDados() {
        
        //Função para descobrir a classe que esta sendo chamada o objeto
        //$this para referenciar o próprio objeto.
        echo get_class($this)."<br>";
        echo $this->nome   ."<br>";
        echo $this->idade  ."<br>";
        echo $this->senha  ."<br>";
    }
}

//Testes
$rasmus = new Programador();
$rasmus->verDados();
?>
