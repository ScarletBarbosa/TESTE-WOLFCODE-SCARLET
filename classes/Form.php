<?php

  class Form{
    public static function alert($tipo,$mensagem){
      if ($tipo == 'erro'){
        echo '<label style="color:red">'.$mensagem.'</label>';
        return false;
      }else if($tipo == 'sucesso'){
        echo '<label style="color:red">'.$mensagem.'</label>';
        return true;
      }
    }

    public static function cadastrar($name,$email,$password){
      $sql = Mysql::conectar()->prepare("INSERT INTO `users` VALUES (null,?,?,?) ");
      $sql->execute(array($name,$email,$password));
    }
  }
?>