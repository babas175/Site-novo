<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema eleitoral Pro Haiti Uffs</title>
    <!-- Incluindo o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Incluindo a biblioteca Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer {
            flex-shrink: 0;
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Sistema Eleitoral Pro Haiti</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contato.php">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#votar"></a>
                </li>
                
            </ul>
        </div>
    </nav>

    <div class="content container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <a href="candidatura.php" class="btn btn-primary btn-block">Registrar Candidatura</a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="../views/cadastro.php" class="btn btn-primary btn-block">Cadastrar no Registro Eleitoral</a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="../views/login.php" class="btn btn-primary btn-block">Votar na Eleição</a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="#" class="btn btn-primary btn-block">Ver chapas inscritas</a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="Resultado.php" class="btn btn-primary btn-block">Resultado Parcial</a>
            </div>
            
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Sistema Eleitoral Pro Haiti. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Incluindo o jQuery e o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
