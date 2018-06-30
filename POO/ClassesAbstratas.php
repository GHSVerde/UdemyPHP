<?php

//Interface dizendo que todos os veículos devem ter essas 3 funções básicas
interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

//Implementação do Veículos como classe abstrata
abstract class Automovel implements Veiculo {
    
    public function acelerar($velocidade) {echo "Acelerou até: ".$velocidade." Km/h<br>";}
    
    public function frenar($velocidade) {echo "Frenou até: ".$velocidade." Km/h<br>";}
    
    public function trocarMarcha($marcha) {echo "Trocou para a ".$marcha." marcha <br>";}
}

class DelRey extends Automovel {
    public function empurrar(){echo "Iiiih, deu prego!";}
}

$carro = new DelRey();
$carro->acelerar(100);
$carro -> empurrar();


?>
