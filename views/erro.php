<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto Registrado com Sucesso!</title>
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

        .custom-navbar {
            flex-shrink: 0;
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .error-container {
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .error-icon {
            font-size: 50px;
            color: #dc3545;
            text-align: center;
            margin-bottom: 20px;
        }

        .error-message {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .btn-back {
            display: block;
            width: 100%;
            text-align: center;
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
    <nav class="navbar navbar-expand-md navbar-dark custom-navbar fixed-top">
        <a class="navbar-brand" href="#">Sistema Eleitoral Pro Haiti</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Página Principal</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Sair</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content container mt-5">
        <div class="error-container">
            <div class="error-icon">
                <i class="fas fa-times-circle"></i>
            </div>
            <div class="error-message">
           Opa ! você já se cadastrou no registro eleitoral 
            </div>
            <a href="../views/cadastro.php" class="btn btn-primary btn-back">Voltar à Página Principal</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Sistema Eleitoral Pro Haiti. Todos direitos reservados.</p>
        </div>
    </footer>

    <!-- Your existing scripts ... -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
