<?php

require_once 'votaConexao.php';

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        function clean_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $matricula = intval(clean_input($_POST["matricula"]));
        $cpf = clean_input($_POST["cpf"]);
        $voto = clean_input($_POST["voto"]);

    
        $stmt = $pdo->prepare("SELECT id FROM vota WHERE matricula = :matricula");
        $stmt->bindParam(':matricula', $matricula);
        $stmt->execute();
        $result = $stmt->fetch();

        if ($result) {
            header("Location: voto_errado.php");
        } else {
            $stmt = $pdo->prepare("INSERT INTO vota (matricula, cpf, voto) VALUES (:matricula, :cpf, :voto)");
            $stmt->bindParam(':matricula', $matricula);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':voto', $voto);

            if ($stmt->execute()) {
                header("Location: voto_sucesso.php");
            } else {
                header("Location: vota.php");
            }
        }
    }
} catch (PDOException $e) {
    header("Location: erro.php");
}
?>
