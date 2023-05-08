<?php

  class Form{
    public static function alert($tipo,$mensagem){
      if ($tipo == 'erro'){
        echo '<div stylet="color:red">'.$mensagem.'</div>';
        return false;
      }else if($tipo == 'sucesso'){
        echo '<div stylet="color:green">'.$mensagem.'</div>';
        return true;
      }
    }

    public static function cadastrar($nome,$email,$senha){
      $sql = Mysql::conectar()->prepare("INSERT INTO 'user' VALUES (null,?,?,?) ");
      $sql->execute(array($nome,$email,$senha));
    }
  }
?>