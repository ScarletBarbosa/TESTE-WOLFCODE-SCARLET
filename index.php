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
    <title>Cadastro Banco de Dados | Scarlet Barbosa</title>
</head>

<body>
    <div class="formulario">

        <?php

        if(isset($_POST['enviar']) && $_POST['form'] == 'f_form'){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if($nome == ''){
                Form::alert('erro','o nome está vazio!');
            }else if($email == ''){
                Form::alert('erro','o email está vazio!');
            }else if($senha == ''){
                Form::alert('erro','a senha está vazia!');
            }else{
                Form::cadastrar($nome,$email,$senha);
                Form::alert('sucesso','Usuario' .$nome. 'cadastrado com sucesso!');
            }
        }
        
        ?>

        <h1>Cadastro de Dados WolfCode:</h1>
        <form method="post">
            <div>
                <label>Nome: </label><input type="text" placeholder="Insira seu nome completo..." name="nome" id=""><br>
                <label>E-mail: </label><input type="email" placeholder="Insira seu e-mail..." name="email" id=""><br>
                <label>Senha: </label><input type="password" placeholder="Cadastre uma nova senha de acesso..." name="senha" id=""><br>
                <input type="submit" name="enviar" value="cadastrar">
                <div><input type="hidden" name="form" value="f_form"></div>
            </div>
        </form>
    </div>
</body>
</html>