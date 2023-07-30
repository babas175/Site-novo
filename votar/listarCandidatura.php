<?php
require_once 'conexao.php'; // Certifique-se de incluir o arquivo de conexão ou ajuste o caminho conforme necessário

try {
    $sql = "SELECT * FROM candidatura";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $candidaturas = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Candidaturas</title>
    <!-- Incluindo o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Início</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="listarCandidatura.php">Ver candidaturas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../sobrenos.php">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contato.php">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Conteúdo da página -->
    <div class="container mt-5">
        <br>
        <br>
        <br>
        <h2 class="text-center">Lista de Candidaturas Registradas</h2>
        <br>
        <br>

        <div class="row mt-3">
            <?php foreach ($candidaturas as $candidatura) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header">
                            Chapa <?php echo $candidatura['nome']; ?>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><strong>Presidente:</strong> <?php echo $candidatura['presidente']; ?></p>
                            <p class="card-text"><strong>Vice-Presidente:</strong> <?php echo $candidatura['vice_presidente']; ?></p>
                            <p class="card-text"><strong>Secretário:</strong> <?php echo $candidatura['secretario']; ?></p>
                            <p class="card-text"><strong>Vice-Secretário:</strong> <?php echo $candidatura['vice_secretario']; ?></p>
                            <p class="card-text"><strong>Diretor Financeiro:</strong> <?php echo $candidatura['diretor_financeiro']; ?></p>
                            <p class="card-text"><strong>Diretor de Comunicação:</strong> <?php echo $candidatura['diretor_comunicacao']; ?></p>
                            <p class="card-text"><strong>Diretor Cultural:</strong> <?php echo $candidatura['diretor_culturais']; ?></p>
                            <p class="card-text"><strong>Diretor Social:</strong> <?php echo $candidatura['diretor_sociais']; ?></p>
                            <p class="card-text"><strong>Suplente:</strong> <?php echo $candidatura['suplente']; ?></p>
                            <p class="card-text"><strong>Número Eleitoral:</strong> <?php echo $candidatura['numero_eleitoral']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Desenvolvido por [Seu Nome]</span>
        </div>
    </footer>

    <!-- Incluindo o jQuery e o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
