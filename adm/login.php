<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <!-- Incluindo o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
<div class="container"> <!-- Adicione uma div container para centralizar -->
        <a class="navbar-brand mx-auto" href="#">Estudantes Haitianos</a> <!-- Adicione a classe mx-auto para centralizar -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto"> <!-- Adicione a classe mx-auto aqui -->
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">Início</a>
            </li>
            <li class="nav-item" style="margin-left: 70px;">
                <a class="nav-link" href="../sobrenos.php">Sobre Nós</a>
            </li>
            <li class="nav-item" style="margin-left: 70px;">
                <a class="nav-link" href="../contato.php">Contato</a>
            </li>
            <li class="nav-item" style="margin-left: 70px;">
                <a class="nav-link" href="../votar/eleicao.php"> Eleição</a>
            </li>
            <li class="nav-item" style="margin-left: 70px;">
                <a class="nav-link" href="login.php"> Area restrita</a>
            </li>
        </ul>
    </div>
</nav>
    </nav>
    <br>
    <br>
    <br>
    <br>
<form  action="login1.php" method="POST" >

    <div class="container">
        <br>
        <br>
        <br>
        
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0 text-center">Admnistrador</h4>
                    </div>
                    <div class="card-body">
                        <form action="processa_login.php" method="POST">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluindo o jQuery e o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   

</body>
</html>
