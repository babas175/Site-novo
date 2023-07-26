<?php

require_once 'usuario_padrao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $host = 'myshared0788';
    $username = 'haitian';
    $password = 'Sophard175@';
    $dbName = 'haitian';

    $conn = new mysqli($host, $username, $password, $dbName);
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $sql = "SELECT id, email, senha FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Verificar se encontrou algum registro com o email informado
    if ($stmt->num_rows > 0) {
        // Vincular as colunas do resultado a variáveis
        $stmt->bind_result($id, $emailRetornado, $senhaHash);
        $stmt->fetch();

        if (password_verify($senha, $senhaHash)) {
            header("Location: dashboard.php"); 
            exit();
        } else {
            header("Location: login1.php");
        }
    } else {
        header("Location: login2.php");
    }

    $stmt->close();
    $conn->close();
}

?>
