<!DOCTYPE html>
<html>
<head>
    <title>Edição de Dados</title>
</head>
<body>

<?php
// Configurações de conexão
$servername = "localhost";
$username = "root";
$password = "";
$database = "wolfcode";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Atualiza os dados na tabela
    $sql = "UPDATE tabela SET nome = '$nome', email = '$email' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar os dados: " . $conn->error;
    }
}

// Consulta SQL para selecionar os dados
$sql = "SELECT id, nome, email FROM tabela";
$result = $conn->query($sql);
?>

<h1>Edição de Dados</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ação</th>
    </tr>

    <?php
    // Verifica se há registros retornados
    if ($result->num_rows > 0) {
        // Loop através dos registros
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td><a href='editar.php?id=" . $row["id"] . "'>Editar</a></td>";
            echo "</tr>";
        }
    } else {
        echo "Nenhum registro encontrado.";
    }

    // Fecha a conexão
    $conn->close();
    ?>

</table>

<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Consulta SQL para obter os dados do registro específico
    $sql = "SELECT id, nome, email FROM tabela WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        ?>
        <h2>Editar Dados</h2>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            Nome: <input type="text" name="nome" value="<?php echo $row["nome"]; ?>"><br>
            Email: <input type="text" name="email" value="<?php echo $row["email"]; ?>"><br>
            <input type="submit" value="Salvar">
        </form>
        <?php
    } else {
        echo "Registro não encontrado.";
    }
}
?>

</body>
</html>
