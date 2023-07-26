<?php
require_once 'conexao.php';


try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $presidente = $_POST['presidente'];
        $vice_presidente = $_POST['vice_presidente'];
        $secretario = $_POST['secretario'];
        $vice_secretario = $_POST['vice_secretario'];
        $diretor_financeiro = $_POST['diretor_financeiro'];
        $diretor_comunicacao = $_POST['diretor_comunicacao'];
        $diretor_culturais = $_POST['diretor_culturais'];
        $diretor_sociais = $_POST['diretor_sociais'];
        $suplente = $_POST['suplente'];
        $numero_eleitoral = $_POST['numero_eleitoral'];

        $sql = "INSERT INTO candidatura 
                (presidente, vice_presidente, secretario, vice_secretario, diretor_financeiro, diretor_comunicacao, diretor_culturais, diretor_sociais, suplente, numero_eleitoral) 
                VALUES 
                (:presidente, :vice_presidente, :secretario, :vice_secretario, :diretor_financeiro, :diretor_comunicacao, :diretor_culturais, :diretor_sociais, :suplente, :numero_eleitoral)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':presidente', $presidente);
        $stmt->bindParam(':vice_presidente', $vice_presidente);
        $stmt->bindParam(':secretario', $secretario);
        $stmt->bindParam(':vice_secretario', $vice_secretario);
        $stmt->bindParam(':diretor_financeiro', $diretor_financeiro);
        $stmt->bindParam(':diretor_comunicacao', $diretor_comunicacao);
        $stmt->bindParam(':diretor_culturais', $diretor_culturais);
        $stmt->bindParam(':diretor_sociais', $diretor_sociais);
        $stmt->bindParam(':suplente', $suplente);
        $stmt->bindParam(':numero_eleitoral', $numero_eleitoral);
        $stmt->execute();

        // Redireciona para a página de sucesso ou exibe uma mensagem de sucesso aqui
        header('Location: voto_sucesso.php');
        exit();
    }
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>


