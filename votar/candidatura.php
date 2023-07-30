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
            max-width: 800px;
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
                    <a class="nav-link" href="#">Página Principal</a>
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
        <br>
        <br>
        <!-- ... -->
<div class="content container mt-5">
    <div class="form-container">
        <h2>Seja bem-vindo!</h2>
        <p>Obrigado por participar neste processo eleitoral. Por favor, registre as candidaturas abaixo:</p>
        <form action="candidatura1.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="nome">Nome da chapa:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome completo" required>
            </div>
            <div class="form-group">
                <label for="presidente">Presidente:</label>
                <input type="text" class="form-control" id="presidente" name="presidente" placeholder="Digite o nome completo" required>
            </div>
            <div class="form-group">
                <label for="presidente">Presidente:</label>
                <input type="text" class="form-control" id="presidente" name="presidente" placeholder="Digite o nome completo" required>
            </div>
            <div class="form-group">
                <label for="vice">Vice-Presidente:</label>
                <input type="text" class="form-control" id="vice_presidente" name="vice_presidente" placeholder="Digite o nome completo" required>
            </div>
            <div class="form-group">
                <label for="secretario">Secretário:</label>
                <input type="text" class="form-control" id="secretario" name="secretario" placeholder="Digite o nome completo" required>
            </div>
            <div class="form-group">
                <label for="vice_secretario">Vice-Secretário:</label>
                <input type="text" class="form-control" id="vice_secretario" name="vice_secretario" placeholder="Digite o nome completo" required>
            </div>
            <div class="form-group">
                <label for="diretor_financeiro">Diretor Financeiro:</label>
                <input type="text" class="form-control" id="diretor_financeiro" name="diretor_financeiro" placeholder="Digite o nome completo" required>
            </div>
            <div class="form-group">
                <label for="diretor_comunicacao">Diretor de Comunicação:</label>
                <input type="text" class="form-control" id="diretor_comunicacao" name="diretor_comunicacao" placeholder="Digite o nome completo" required>
            </div>
            <div class="form-group">
                <label for="diretor_culturais">Diretor de Projetos Culturais:</label>
                <input type="text" class="form-control" id="diretor_culturais" name="diretor_culturais" placeholder="Digite o nome completo" required>
            </div>
            <div class="form-group">
                <label for="diretor_sociais">Diretor de Projetos Sociais:</label>
                <input type="text" class="form-control" id="diretor_sociais" name="diretor_sociais" placeholder="Digite o nome completo" required>
            </div>
            <div class="form-group">
                <label for="suplente">Suplente:</label>
                <input type="text" class="form-control" id="suplente" name="suplente" placeholder="Digite o nome completo" required>
            </div>
            <div class="form-group">
                <label for="num_eleitoral">Número Eleitoral:</label>
                <input type="text" class="form-control" id="num_eleitoral" name="numero_eleitoral" placeholder="Digite um número" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Registrar Candidaturas</button>
        </form>
    </div>
</div>
<!-- ... -->

    <br>
    <br>
    <br>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Sistema Eleitoral Pro Haiti. Todos direitos reservados.</p>
        </div>
    </footer>

    <!-- Your existing scripts ... -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function mascara(i) {
            // Your existing input mask code...
        }

        function validateForm() {
            // Your validation code for the form (if needed)...
            // Return true to submit the form or false to prevent submission.
        }
    </script>
</body>
</html>
