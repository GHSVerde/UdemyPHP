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
    
    //Seta os dados do Objeto
    public function setData($data) {
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));//Converte a String retornada para DateTime
    }
    
    /* Exibição do Usuário
    Faz isso através da conversão dos getters para un json.
    Também formata a data através do método da Classe DateTime instanciada no 
    $this->loadById();
    */
    public function __toString() {
        if(isset($this->idusuario)){
            return json_encode(array(
            "idusuario"  => $this->getIdusuario(),
            "deslogin"   => $this->getDeslogin(),
            "dessenha"   => $this->getDessenha(),
            "dtcadastro" => $this->getDtcadastro()->format("d/m/y")
        ));
        } else{
            return "<h1>Objeto não iniciado</h1>";
        } 
    }
    
    public function __construct($usuario = "", $senha = "") {
        $this->setDeslogin($usuario);
        $this->setDessenha($senha);
    }
    
    //Carregamento pelo ID
    public function loadById($id) {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID" => $id));
        
        //Verifica se o array retornado tem subarrays (resultados)
        if (isset($results[0])) {
            //Se houver define os resultados chamando os setters
            $this->setData($results[0]);
        }
    }
    
    //Loga os usuários
    public function login($login, $senha) {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :SENHA", array(":LOGIN" => $login, ":SENHA" => $senha));
        
        //Verifica se o array retornado tem subarrays (resultados)
        if (isset($results[0])) {
            //Se houver define os resultados chamando os setters
            $this->setData($results[0]);
        } else {
            throw new Exception ("Login e/ou Senha Inválidos");
        }
    }
    
    //Pegando Lista de Usuários
    public static function getLista() {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario");
    }
    
    //Pega o nome Usuário
    public static function search($login) {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :USUARIO ORDER BY deslogin", array(
            ":USUARIO" => "%".$login."%"
        ));
    }
    
    //Cadatro um novo usuário
    public function cadastrar(){
        $sql = new Sql();
        
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :SENHA)", array(
            ":LOGIN" => $this->getDeslogin(),
            ":SENHA" => $this->getDessenha()
        ));
        
        if (isset($results[0])){
            $this->setData($results[0]);
        }
        
        }
    }
?>
