<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicao de dados Scarlet Barbosa</title>
</head>
<body>
<?php

// Configurações de conexão
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "wolfcode";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Consulta SQL para obter os dados do registro específico
    $sql = "SELECT id, name, email FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        ?>
        <div class="page">
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="formLogin">
        <h1>Editar Dados</h1>
        <p>Preencha os campos com os novos valores</p>
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <label>Nome:</label> <input type="text" name="name" value="<?php echo $row["name"]; ?>" placeholder="Insira o nome"><br>
            <label>E-mail:</label> <input type="text" name="email" value="<?php echo $row["email"]; ?>" placeholder="Insira o email"><br>
            <input type="submit" value="Salvar" class="btn"><br>
            <a href="dados.php"><< Visualizar Registros</a><br>
        </form>
        </div>
        <?php
    } else {
        echo "Registro não encontrado.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Atualiza os dados na tabela
    $sql = "UPDATE users SET name = '$name', email = '$email' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert(Dados atualizados com sucesso!);</script>";
        header("Location: dados.php");
    } else {
        echo "Erro ao atualizar os dados: " . $conn->error;
    }
}
?>
</body>
</html>