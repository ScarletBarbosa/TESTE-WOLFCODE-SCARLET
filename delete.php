<?php

//iniciando a conexão com o banco de dados 
$conexao = mysqli_connect("127.0.0.1", "root", "");

//selecionando o banco de dados 
$db = mysqli_select_db($conexao, "wolfcode");

//criando a query de consulta à tabela criada 
$sql = mysqli_query($conexao, "SELECT * FROM users") or die( 
  mysqli_error($conexao) //caso haja um erro na consulta 
);

// Apagando Usuario

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$del = "DELETE FROM users WHERE id='$id'";
$resultado = mysqli_query($conexao,$del);

if(mysqli_affected_rows($conexao)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuario apagado!</p>";
    header("Location: dados.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao deletar!</p>";
    header("Location: dados.php");
}
?>