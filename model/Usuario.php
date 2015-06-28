<?php

include '/home/u250789947/public_html/conection/Conexao.php';
class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

//FUNCTION INSERT
    function insert(){
        $sql = "INSERT INTO user(nome,email,senha) VALUES"
                ."(:nome,:email,:senha)";
        
        $query = Conexao::prepare($sql);
        $query->bindValue(":nome",$this->getNome());
        $query->bindValue(":email",$this->getEmail());
        $query->bindValue(":senha",$this->getSenha());
        $query->execute();
        
        $id = $this->lastInsertId();
        //echo $id->id;
    }
    
    function lastInsertId(){
       $sql = "SELECT id FROM user ORDER BY id DESC limit 1";
       $query = Conexao::prepare($sql);
       $query->execute();
       return $query->fetch();
   }
   function findAll(){
       $sql = "SELECT * FROM user";
       $query = Conexao::prepare($sql);
       $query->execute();
       return $query->fetchAll();
   }
   
   
    function delete($id = null){
      $sql = "DELETE FROM `user` WHERE id = :id";
      $query = Conexao::prepare($sql);
      $query->bindValue(":id",$id);
      $query->execute();

   }
    
}
