<?php
    include('config.php');
    Mysql::conectar()
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <title>Cadastro Banco de Dados | Scarlet Barbosa</title>
</head>

<script> // Funcao JavaScript que valida os dados do formulario!
function validar(){

    var nome = formulario.name;
    var email = formulario.email;
    var senha = formulario.password;

    if (nome.value == '') {
        alert('Nome nao informado!');
        nome.focus();
    }else if (email.value == '') {
        alert('E-mail nao informado!');
        email.focus();
    }else if (senha.value < 6) {
        alert('A senha deve conter o menos 6 digitos!');
        senha.focus();
    } 
}
</script>
<body>
    <div class="page">
            <form method="POST" class="formLogin" name="formulario">
                <h1>Cadastro de Dados WolfCode:</h1>
                <p>Preencha os dados abaixo</p>
                    <label>Nome: </label><input type="text" placeholder="Insira seu nome completo..." name="name"><br>
                    <label>E-mail: </label><input type="email" placeholder="Insira seu e-mail..." name="email" autofocus="true" ><br>
                    <label>Senha: </label><input type="password" placeholder="Cadastre uma nova senha de acesso..." name="password"><br>
                    <input type="submit" name="enviar" value="cadastrar" class="btn" onclick="validar()"><br>
                    <a href="dados.php">Visualizar Registros >></a><br>
                    <div><input type="hidden" name="form" value="f_form"></div>

                    <?php // Validacao dos dados via PHP

                        if(isset($_POST['enviar']) && $_POST['form'] == 'f_form'){
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $password = $_POST['password'];

                        if($name == ''){
                            Form::alert('erro','o nome está vazio!');
                        }else if($email == ''){
                            Form::alert('erro','o email está vazio!');
                        }else if($password < 6){
                            Form::alert('erro','a senha está vazia!');
                        }else{
                            Form::cadastrar($name,$email,$password);
                            Form::alert('sucesso','Usuario' .$name. 'cadastrado com sucesso!');
                            }
                        }
                    ?>
            </form>
    </div>
</body>
</html>