<?php
Abstract class Animal {//Classe Inicial
    //Declaração da função que sofrerá mudança
    public function falar(){return "Som";}
    
    //Declaração da função que não sofrerá mudança
    public function mover() {return "Anda";}
}

class Cachorro extends Animal {//Cachorro herda Animal
    //Muda na execução
    public function falar() {return "Au Au";}
}

class Gato extends Animal {//Gato herda Animal
    //Muda na execução
    public function falar() {return "Miau";}
}

class Passaro extends Animal {
    public function falar() {
        return "Piu Piu";
    }
    
    public function mover() {
        return "Voa e ".parent::mover();
    }
}

$bolinha = new Cachorro();
echo "<h1>-- Cachorro --</h1><br>".$bolinha->falar()."<br>".$bolinha->mover()."<br>";

echo "<h1>-- Gato --</h1><br>";

$neko = new Gato();
echo $neko->falar()."<br>";
echo $neko->mover();

echo "<h1>-- Passaro --</h1><br>";
$passaro = new Passaro();
echo $passaro->falar()."<br>";
echo $passaro->mover();
?>
