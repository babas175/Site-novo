<?php
require_once 'conexao.php';

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $matricula = $_POST['matricula'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $curso = $_POST['curso'];
        $celular = $_POST['celular'];
        $senha = $_POST['senha'];

        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO estudante (matricula, cpf, email, nome, sobrenome, curso, celular, senha) 
                VALUES (:matricula, :cpf, :email, :nome, :sobrenome, :curso, :celular, :senha)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':matricula', $matricula);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':curso', $curso);
        $stmt->bindParam(':celular', $celular);
        $stmt->bindParam(':senha', $senhaCriptografada);
        $stmt->execute();

        // Redireciona para a página de sucesso ou exibe uma mensagem de sucesso aqui
        header('Location: sucesso.php');
        exit();
    }
} catch (PDOException $e) {
    header("Location: erro.php");
    exit();
}
?>
