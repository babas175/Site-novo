<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Eleitoral Pro Haiti</title>
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

        .form-container {
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Página Principal</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../contato.php">Contato</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="eleicao.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content container mt-5">
        <div class="form-container">
            <h2>Seja bem-vindo!</h2>
            <p>Obrigado por participar neste processo eleitoral. Por favor, registre seu voto abaixo:</p>
            <form action="vota1.php" method="POST" onsubmit="return removeCaracteresEspeciais(str)">
                <div class="form-group">
                    <label for="matricula">Matrícula:</label>
                    <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Digite sua matrícula" required>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input oninput="mascara(this)" type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
                </div>
                <div class="form-group">
                    <label for="voto">Voto:</label>
                    <select class="form-control" id="voto" name="voto" required>
                        <option value="10">Chapa 10</option>
                        <option value="20">Chapa 20</option>
                        <option value="40">Chapa 40</option>
                        <!-- Add more candidates as needed -->
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Registrar Voto</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Sistema Eleitoral Pro Haiti. All rights reserved.</p>
        </div>
    </footer>

    <!-- Your existing scripts ... -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    
</body>
</html>
