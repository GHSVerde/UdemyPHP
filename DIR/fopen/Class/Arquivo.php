<?php
class Arquivo {
    
    public function setFile($args) {$this->file = $args;}
    public function getFile() {return $this->file;}
    
    //Gera CSV - Estático pela não necessidade de 
    public static function getUsuariosCsv() {
        $sql = new Sql();
        $file = fopen("usuarios.csv", "w+");//Abre o arquivo csv
        
        $usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY dtcadastro");//Recupera usuários
        
        $headers = array();//Prepara o header
        
        foreach($usuarios[0] as $key => $value) {
            array_push($headers, ucfirst($key));//Adiciona os key ao header
        }
        
        fwrite($file, implode(",", $headers) . "\r\n"); //Escreve o array e coloca , neles
        
        foreach($usuarios as $row) {//Separa as linhas (subarray)
            //Gera um array pra cada linha e escreve no arquivo
            $data = array();
            foreach($row as $key => $value) {
                array_push($data, $value);
            }
            fwrite($file, implode(",",$data) . "\r\n");
        }
        //Fecha a edição
        fclose($file);
        
    }
    
    //Escreve uma mensagem no log
    public static function escreveLog($mensagem) {
        $file = fopen("log.txt", "a+");
        
        fwrite($file, $mensagem . "\r\n");
        
        fclose($file);
    }
}
?>
