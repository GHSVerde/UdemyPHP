<?php
//Classe Básica
class Documento {
    //Atributos
    protected $numero;
    
    //Encapsulamentos
    public function getNumero() {return $this->numero;}
    public function setNumero($args) {$this->numero = $args;}
    
    //Construtor básico
    public function __construct($args) {
        $this->setNumero($args);
    }
}

//Classe CPF é um documento mas com validação
class CPF extends Documento {
    
    //Polimorfismo do setNumero() de Documento
    //Se validado seta, senão joga uma nova Exception
    public function setNumero($args) {
        if ($this->validar($args)) {
            $this->numero = $args;
        } else {
            throw new Exception("CPF Inválido");
        }
    }
    
    //Validação de CPF - Regras de Validação
    public function validar($args):bool {
        //Verifica se foi passado algo
        if(empty($args)) return false;
        
        //Elimina possível mascara
        $args = preg_replace('[ˆ0-9]', '', $args);
        $args = str_pad($args, 11, '0', STR_PAD_LEFT);
        
        //Verifica se a quantidade de digitos é 11
        if (strlen($args) != 11) {return false;}
        
        //Verifica se há sequências inválidas
        else if ($args == '00000000000' || 
                 $args == '11111111111' ||
                 $args == '22222222222' || 
                 $args == '33333333333' || 
                 $args == '44444444444' ||
                 $args == '55555555555' ||
                 $args == '66666666666' ||
                 $args == '77777777777' ||
                 $args == '88888888888' ||
                 $args == '99999999999') {
            return false;
        }
        //Calcula os Digitos verificadores para verificar o CPF
        else{
            for ($t = 9; $t < 11; $t++) {
                for($d = 0, $c = 0; $c < $t; $c++){
                    $d += $args{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($args{$c} != $d) {
                    return false;
                }
            }
            return true;
        }
    }
}

//Testes
$gverde = new CPF("06763036175");

echo $gverde->getNumero();
?>
