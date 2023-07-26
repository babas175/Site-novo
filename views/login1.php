<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $matricula = $_POST["matricula"];
    $cpf = $_POST["cpf"];

    $host = 'myshared0788'; // Verifique se este é o endereço correto do servidor de banco de dados
    $dbname = 'haitian'; 
    $username = 'haitian'; 
    $password = 'Sophard175@'; // Substitua 'SuaSenhaAqui' pela senha correta do usuário do banco de dados

    // Criar a conexão com o banco de dados
    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Preparar a consulta SQL para buscar o estudante pelo número de matrícula e CPF
    $sql = "SELECT * FROM estudante WHERE matricula = ? AND cpf = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $matricula, $cpf);
    $stmt->execute();
    $stmt->store_result(); // Armazenar os resultados para poder usar o num_rows

    // Verificar se encontrou algum registro com a matrícula e CPF informados
    if ($stmt->num_rows > 0) {
        // Se a combinação de matrícula e CPF for encontrada, redireciona para a página de votação ou qualquer outra página desejada
        header("Location: ../votar/vota.php"); 
        exit();
    } else {
        // Se a combinação de matrícula e CPF não for encontrada, redireciona de volta para a página de login com uma mensagem de erro
        header("Location: loginErro.php");
        exit();
    }

    // Fechar a consulta e a conexão com o banco de dados
    $stmt->close();
    $conn->close();
}
?>
