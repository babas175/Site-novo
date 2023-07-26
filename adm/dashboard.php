<?php
// Verifica se o usuário está logado. Você pode adicionar essa verificação em todas as páginas que requerem login.

// Conexão com o banco de dados (substitua pelas suas credenciais)
$servername = "myshared0788";
$username = "haitian";
$password = "Sophard175@";
$dbname = "haitian";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Consulta para obter o número de estudantes cadastrados
$sql_count_students = "SELECT COUNT(*) as total FROM estudante";
$result_count_students = $conn->query($sql_count_students);
$count_students = 0;
if ($result_count_students->num_rows > 0) {
    $row = $result_count_students->fetch_assoc();
    $count_students = $row['total'];
}

// Consulta para obter a lista de estudantes
$sql_list_students = "SELECT * FROM estudante";
$result_list_students = $conn->query($sql_list_students);
$students = array();
if ($result_list_students->num_rows > 0) {
    while ($row = $result_list_students->fetch_assoc()) {
        $students[] = $row;
    }
}
if (isset($_POST['download_pdf'])) {
    require_once 'vendor/autoload.php';

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
    $html .= '<h2 class="subtitle">Lista de todos os estudantes registrados no sistema eleitoral </h2>';
    $html .= '<table>
                <tr>
                    <th>Nome</th>
                    <th>Matrícula</th>
                    <th>Curso</th>
                </tr>';
    foreach ($students as $student) {
        $html .= '<tr>
                    <td>' . $student['nome'] . '</td>
                    <td>' . $student['matricula'] . '</td>
                    <td>' . $student['curso'] . '</td>
                </tr>';
    }
    $html .= '</table>';

    // Carregando o conteúdo no dompdf
    $dompdf->loadHtml($html);

    // Definindo o tamanho do papel e a orientação do PDF (opcional)
    $dompdf->setPaper('A4', 'portrait');

    // Renderizando o PDF
    $dompdf->render();

    // Gerando o nome do arquivo PDF
    $filename = 'lista_estudantes_cadastrados.pdf';

    // Enviando o PDF para o navegador fazer o download
    $dompdf->stream($filename, array('Attachment' => 0));
    exit();
}
// Fecha a conexão com o banco de dados
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicos">Ver chapas inscritas</a>
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
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container mt-5">
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Número de Estudantes Cadastrados
                    </div>
                    <div class="card-body">
                        <h2 class="text-center"><?php echo $count_students; ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Lista de todos Estudantes cadastrados
                    </div>
                    <div class="card-body">
                        <ul>
                            <?php foreach ($students as $student) { ?>
                                <li><?php echo $student['nome']; ?>  <?php echo $student['matricula'];  ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="text-right mt-4">
                    <form method="post">
                        <button type="submit" name="download_pdf" class="btn btn-primary">Imprimir PDF</button>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
    

    <!-- Incluindo o jQuery e o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function imprimirLista() {
            window.print();
        }
    </script>
</body>
</html>
