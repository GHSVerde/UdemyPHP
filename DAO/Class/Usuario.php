<?php
class Usuario {
    //Criando variáveis iguais as do banco
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;
    
    //Encapsulamento idUsuario
    public function getIdusuario() {return $this->idusuario;}
    public function setIdusuario($value) {$this->idusuario = $value;}
    
    //Encapsulamento deslogin
    public function getDeslogin() {return $this->deslogin;}
    public function setDeslogin($value) {$this->deslogin = $value;}
    
    //Encapsulamento dessenha
    public function getDessenha() {return $this->dessenha;}
    public function setDessenha($value) {$this->dessenha = $value;}
    
    //Encapsulamento dtcadastro
    public function getDtcadastro() {return $this->dtcadastro;}
    public function setDtcadastro($value) {$this->dtcadastro = $value;}
    
    //Carregamento pelo ID
    public function loadById($id) {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID" => $id));
        
        //Verifica se o array retornado tem subarrays (resultados)
        if (isset($results[0])) {
            //Se houver define os resultados chamando os setters
            $row = $results[0];
            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));//Converte a String retornada para DateTime
        }
    }
    
    /* Exibição do Usuário
    Faz isso através da conversão dos getters para un json.
    Também formata a data através do método da Classe DateTime instanciada no 
    $this->loadById();
    */
    public function __toString() {
        return json_encode(array(
            "idusuario"  => $this->getIdusuario(),
            "deslogin"   => $this->getDeslogin(),
            "dessenha"   => $this->getDessenha(),
            "dtcadastro" => $this->getDtcadastro()->format("d/m/y")
        ));
    }
}
