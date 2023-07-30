<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas Físicas</title>
    <!-- Incluindo o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Incluindo a biblioteca Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
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
<body>
<form  action="cadastro1.php" method="POST" onsubmit="return validateName()">
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Registro eleitoral </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Pagina Principal</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../contato.php">Contato</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
    <form  action="cadastro1.php" method="POST" onsubmit="return validateName()">
        <h1 class="text-center mb-4"></h1>
        <br>
        <br>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="formPessoa">
                    <div class="form-group">
                        <label for="matricula">Matrícula:</label>
                        <input type="text" class="form-control" id="matricula" name="matricula" required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input  oninput="mascara(this)" type="text" class="form-control" id="cpf" name="cpf" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="sobrenome">Sobrenome:</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder ="sobrenome" required>
                    </div>
                    <div class="form-group">
                <label for="curso">Curso:</label>
                <select class="form-control" id="curso" name="curso">
                    <option value="Administração">Administração</option>
                    <option value="Ciência da Computação">Ciência da Computação</option>
                    <option value="Geografia">Geografia</option>
                    <option value="Historia">História</option>
                    <option value="Engenharia Ambiental">Engenharia Ambiental</option>
                    <option value="Agronomia">Agronomia</option>
                    <option value="Enfermagem">Enfermagem</option>
                    <option value="Medicina">Medicina</option>
                    <option value="Letras">Letras (Português e Espanhol)</option>
                    <option value="Pedagogia">Pedagogia</option>
                    <option value="Matematica">Matematica</option>
                    <option value="Filosofia">Filosofia</option>
                    <option value="Ciências Sociais">Ciências Sociais</option>
                </select>
            </div>
                    <div class="form-group">
                        <label for="celular">Celular:</label>
                        <input type="text" class="form-control" id="celular" name="celular" oninput="mascara1(this)" placeholder ="nessa forma (49) 985048890" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer bg-dark text-white mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2023 Pro Haiti. Todos direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="../js/validar.js"></script>
    <!-- Incluindo o jQuery e o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function mascara(i){
        var v = i.value;
        if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
            i.value = v.substring(0, v.length-1);
            return;
        }
        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) {
            i.value += ".";
        } else if (v.length == 11) {
            i.value += "-";
        }
    }
    </script>
    <script>
        function mascara1(i) {
            var v = i.value;

            // Remove all non-digit characters
            v = v.replace(/\D/g, '');

            if (v.length <= 11) {
                // Format as phone number (e.g., (12) 34567-8910)
                if (v.length === 11) {
                    i.value = '(' + v.substring(0, 2) + ') ' + v.substring(2, 7) + '-' + v.substring(7, 11);
                } else if (v.length === 10) {
                    i.value = '(' + v.substring(0, 2) + ') ' + v.substring(2, 6) + '-' + v.substring(6, 10);
                } else if (v.length === 9) {
                    i.value = v.substring(0, 5) + '-' + v.substring(5, 9);
                } else if (v.length === 8) {
                    i.value = v.substring(0, 4) + '-' + v.substring(4, 8);
                } else {
                    i.value = v;
                }
            } 
        }
    </script>

</body>
</html>
