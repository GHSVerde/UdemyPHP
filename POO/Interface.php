<?php

//Interface dizendo que todos os veículos devem ter essas 3 funções básicas
interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

//Implementação do Veículos
class Civic implements Veiculo {
    
    public function acelerar($velocidade) {echo "Acelerou até: ".$velocidade." Km/h<br>";}
    
    public function frenar($velocidade) {echo "Frenou até: ".$velocidade." Km/h<br>";}
    
    public function trocarMarcha($marcha) {echo "Trocou para a ".$marcha." marcha <br>";}
}

//Testes
$carro = new Civic();
$carro->frenar(30);
?>
