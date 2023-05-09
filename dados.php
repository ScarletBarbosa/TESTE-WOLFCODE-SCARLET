<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exibicao de Dados | Scarlet Barbosa</title>
</head>
<body>
<div class="page">
    
        <table class="table">
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Atualizar</th>
                <th>Excluir</th>
            </tr>

<?php
//iniciando a conexão com o banco de dados 
$conexao = mysqli_connect("127.0.0.1", "root", "");

//selecionando o banco de dados 
$db = mysqli_select_db($conexao, "wolfcode");

//criando a query de consulta à tabela criada 
$sql = mysqli_query($conexao, "SELECT * FROM users") or die( 
  mysqli_error($conexao) //caso haja um erro na consulta 
);


//pecorrendo os registros da consulta e exibindo os dados na tabela. 

while($registro = mysqli_fetch_array($sql)) 
{
    echo "<tr>";
    echo "<td>".$registro['id']."</td>";
    echo "<td>".$registro['name']."</td>";
    echo "<td>".$registro['email']."</td>";
    echo "<td>".$registro['password']."</td>";
    echo "<td><a href='editar.php?id=".$registro['id']."'>editar</a></td>";
    echo "<td><a href='delete.php?id=".$registro['id']."'>deletar</a></td>";
    echo "</tr>";
}

?>
</table>
    <a class="" href="index.html"> << Voltar ao Cadastro</a><br>
</div>
</body>
</html>