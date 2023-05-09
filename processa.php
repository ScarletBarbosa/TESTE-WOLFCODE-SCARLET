<?php

//iniciando a conexão com o banco de dados 
$conexao = mysqli_connect("127.0.0.1", "root", "");

//selecionando o banco de dados 
$db = mysqli_select_db($conexao, "wolfcode");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

?>