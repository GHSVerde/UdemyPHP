<?php
class Documento{
    //Atributos
    private $numero;
    
    //Encapsulamentos
    public function getNumero() {return $this->numero;}
    public function setNumero($args) {
        $resultado = Documento::validarCPF($args);
        if($resultado) {
            $this->numero = $args;
        } else {
            throw new Exception("CPF não é válido.", 1);
        }
    }
    
    //Funções
    
    //Validar CPF
    public static function validarCPF($cpf):bool {
        //Verifica se foi passado algo
        if(empty($cpf)) return false;
        
        //Elimina possível mascara
        $cpf = preg_replace('[ˆ0-9]', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
        
        //Verifica se a quantidade de digitos é 11
        if (strlen($cpf) != 11) {return false;}
        
        //Verifica se há sequências inválidas
        else if ($cpf == '00000000000' || 
                 $cpf == '11111111111' ||
                 $cpf == '22222222222' || 
                 $cpf == '33333333333' || 
                 $cpf == '44444444444' ||
                 $cpf == '55555555555' ||
                 $cpf == '66666666666' ||
                 $cpf == '77777777777' ||
                 $cpf == '88888888888' ||
                 $cpf == '99999999999') {
            return false;
        }
        //Calcula os Digitos verificadores para verificar o CPF
        else{
            for ($t = 9; $t < 11; $t++) {
                for($d = 0, $c = 0; $c < $t; $c++){
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
            return true;
        }
    }
    
}
//Criando Objeto
$cpf = new Documento();

//Verificado
$cpf->setNumero("88785651486");
var_dump($cpf->getNumero());
?>
