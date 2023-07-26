<?php
require_once 'conexao.php';
require_once '../adm/vendor/autoload.php'; 

$host = 'myshared0788'; // Verifique se este é o endereço correto do servidor de banco de dados
$dbname = 'haitian'; 
$username = 'haitian'; 
$password = 'Sophard175@'; // Substitua 'SuaSenhaAqui' pela senha correta do usuário do banco de dados


// Criar a conexão com o banco de dados
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Consulta para obter o número de votos de cada chapa
$sql_votos = "SELECT voto, COUNT(*) AS total_votos FROM vota GROUP BY voto";
$result_votos = $conn->query($sql_votos);

// Consulta para obter o número total de votantes
$sql_total_votantes = "SELECT COUNT(DISTINCT matricula) AS total_votantes FROM vota";
$result_total_votantes = $conn->query($sql_total_votantes);

// Calcular o total de votantes
$total_votantes = 0;
if ($result_total_votantes->num_rows > 0) {
    $row_total_votantes = $result_total_votantes->fetch_assoc();
    $total_votantes = $row_total_votantes["total_votantes"];
}

// Calcular a porcentagem de votos de cada chapa
$porcentagens = array();
if ($total_votantes > 0) {
    if ($result_votos->num_rows > 0) {
        while ($row_votos = $result_votos->fetch_assoc()) {
            $chapa = $row_votos["voto"];
            $total_votos_chapa = $row_votos["total_votos"];
            $porcentagem = ($total_votos_chapa / $total_votantes) * 100;
            $porcentagens[$chapa] = $porcentagem;
        }
    }
}
if (isset($_POST['download_pdf'])) {
    // Criando a instância do dompdf
    $dompdf = new Dompdf\Dompdf();

    // Criando o conteúdo do PDF
    $html = '<style>
                body {
                    font-family: Arial, sans-serif;
                    color: #333;
                }
                h1 {
                    text-align: center;
                    margin-bottom: 20px;
                }
                h2 {
                    text-align: center;
                    margin-top: 30px;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    border: 1px solid #ccc;
                    padding: 8px;
                }
                .title {
                    color: #007bff;
                }
                .subtitle {
                    font-size: 18px;
                    font-weight: bold;
                }
            </style>';
    $html .= '<h1 class="title">Eleição Pro Haiti 2023</h1>';
    $html .= '<h2 class="subtitle">Resultado parcial das Eleições</h2>';
    $html .= '<table>
                <tr>
                    <th>Chapa</th>
                    <th>Número de Votos</th>
                    <th>Porcentagem de Votos</th>
                </tr>';
    foreach ($porcentagens as $chapa => $porcentagem) {
        $html .= '<tr>
                    <td>' . $chapa . '</td>
                    <td>' . $total_votos_chapa . '</td>
                    <td>' . number_format($porcentagem, 2) . '%</td>
                </tr>';
    }
    $html .= '</table>';
    $html .= '<p class="text-center">Total de Votantes: ' . $total_votantes . '</p>';

    // Carregando o conteúdo no dompdf
    $dompdf->loadHtml($html);

    // Definindo o tamanho do papel e a orientação do PDF (opcional)
    $dompdf->setPaper('A4', 'portrait');

    // Renderizando o PDF
    $dompdf->render();

    // Gerando o nome do arquivo PDF
    $filename = 'resultado_eleicoes.pdf';

    // Enviando o PDF para o navegador fazer o download
    $dompdf->stream($filename, array('Attachment' => 0));
    exit();
}
// Fecha a conexão com o banco de dados
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado das Eleições</title>
    <!-- Incluindo o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        .navbar {
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            margin-top: auto;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Estudantes Haitianos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../sobrenos.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contato.php">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Resultado parcial das Eleições</h2>

        <?php
        // Coloque aqui o código PHP fornecido anteriormente para obter o resultado das eleições
        // ...

        if (count($porcentagens) > 0) :
        ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Chapa</th>
                        <th>Número de Votos</th>
                        <th>Porcentagem de Votos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($porcentagens as $chapa => $porcentagem) : ?>
                        <tr>
                            <td><?php echo $chapa; ?></td>
                            <td><?php echo $total_votos_chapa; ?></td>
                            <td><?php echo number_format($porcentagem, 2) . '%'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p class="text-center">Nenhum voto registrado até o momento.</p>
        <?php endif; ?>

        <p class="text-center">Total de Votantes até o momento: <?php echo $total_votantes; ?></p>
        <div class="text-right mt-4">
                    <form method="post">
                        <button type="submit" name="download_pdf" class="btn btn-primary">Imprimir PDF</button>
                    </form>
                </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Estudantes haitianos. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Incluindo o jQuery e o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function imprimirLista() {
            window.print();
        }
    </script>
</body>
</html>
