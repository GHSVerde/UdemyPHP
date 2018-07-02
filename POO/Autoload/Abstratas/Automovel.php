<?php
abstract class Automovel implements Veiculo {
    
    public function acelerar($velocidade) {echo "Acelerou até: ".$velocidade." Km/h<br>";}
    
    public function frenar($velocidade) {echo "Frenou até: ".$velocidade." Km/h<br>";}
    
    public function trocarMarcha($marcha) {echo "Trocou para a ".$marcha." marcha <br>";}
}
?>
