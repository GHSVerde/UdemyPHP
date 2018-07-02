<?php


class Cadastro {
    //Atributos iniciais
    private $nome;
    private $email;
    private $senha;
    
    //Encapsulamento Nome
    public function setNome($args) {$this->nome = $args;}
    public function getNome():string {return $this->nome;}
    
    //Encapsulamento Email
    public function setEmail($args) {$this->email = $args;}
    public function getEmail():string {return $this->email;}
    
    //Encapsulamento Senha
    public function setSenha($args) {$this->senha = $args;}
    public function getSenha():string {return $this->senha;}
    
    //Metodos Magicos
    public function __toString() {
        return json_encode(array(
            "nome" => $this->getNome(),
            "email" => $this->getEmail(),
            "senha" => $this->getSenha()
        ));
    }
}

?>
