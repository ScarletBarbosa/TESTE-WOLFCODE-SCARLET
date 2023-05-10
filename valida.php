<?php // Validacao dos dados via PHP

    include('config.php');
    Mysql::conectar();

if(isset($_POST['enviar']) && $_POST['form'] == 'f_form'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

if($name == ''){
    Form::alert('erro','o nome está vazio!');
    header("Location: index.html");
}else if($email == ''){
    Form::alert('erro','o email está vazio!');
    header("Location: index.html");
}else if(strlen($password) < 6){
    Form::alert('erro','a senha está vazia!');
    header("Location: index.html");
}else{
    Form::cadastrar($name,$email,$password);
    Form::alert('sucesso','Usuario' .$name. 'cadastrado com sucesso!');
    header("Location: index.html");
    }
}
?>