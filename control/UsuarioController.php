<?php
include '/home/u250789947/public_html/model/Usuario.php';

class UsuarioController {
  
    //getting data from form
    function insertControl(){
        if(isset($_POST['salvar'])){
          $usuario = new Usuario();
            
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            
            $usuario->setNome($nome);
            $usuario->setEmail($email);
            $usuario->setSenha($senha);
            
            $usuario->insert();
            
        }
        
    }
    
    function delete($id = null){
      $usuario = new Usuario();
      if (isset($_GET['acao']) && ($_GET['acao'] == 'deletar')) {
          $id = $_GET['id'];
          if ($usuario->delete($id)) {
            header('Location:listar.php');
          }

      }
    }
        
    
    function findAll(){
        $usuario = new Usuario();
        return $usuario->findAll();
    }
    
}
