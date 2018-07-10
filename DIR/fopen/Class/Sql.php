<?php
//Estende PDO, contendo todas as atividades antes contidas neste.
class Sql extends PDO{
    private $conn;
    
    //Iniciando no Construct a conexão inicial
    public function __construct() {
        $this->conn = new PDO("mysql:dbname=dbphp7;host=localhost;","root", "");
    }
    
    //Chama vários setParam para cada um do array
    public function setParams($statements, $parameter = array()) {
        foreach($parameter as $key => $value) {
            $this->setParam($statements, $key, $value);
        }
    }
    
    //Trata um bindParam só
    private function setParam($statement, $key, $value) {
        $statement->bindParam($key, $value);
    }
    
    //Tratando Queries
    public function query($rawQuery, $params = array()) {
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params); 
        $stmt->execute();
        return $stmt;
    }
    
    //Função para retornar array para tratar Select
    public function select($rawQuery, $params = array()):array {
        $stmt = $this->query($rawQuery, $params);
        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
