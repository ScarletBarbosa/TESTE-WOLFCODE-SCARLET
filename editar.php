<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicão Usuario</title>
</head>
<body>

<?php

//iniciando a conexão com o banco de dados 
$conexao = mysqli_connect("127.0.0.1", "root", "");

//selecionando o banco de dados 
$db = mysqli_select_db($conexao, "wolfcode");

$result_user = "INSERT INTO users WHERE id='11'";
//$resultado_usuario = mysqli_query($conexao, $result_user);
//$coluna_usuario = mysqli_fetch_assoc($resultado_usuario);

?>
    <div class="page">
    <form action="" method="post" class="formLogin">
        <h1>Edição de Cadastro</h1>
        <p>Preencha o formulario com os novos dados</p>
        
        <label>Nome</label><input type="text" name="nameEdit" placeholder="Novo nome..." value="<?php echo $coluna_usuario['name'];?>"><br>
        <label>E-mail</label><input type="email" name="emailEdit" placeholder="Novo email..."><br>
        <input type="submit" value="editar" class="btn">
    </form>
    </div>
</body>
</html>