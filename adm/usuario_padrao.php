<?php


$servername = 'myshared0788'; // Verifique se este é o endereço correto do servidor de banco de dados
$dbname = 'haitian'; 
$username = 'haitian'; 
$password = 'Sophard175@'; // Substitua 'SuaSenhaAqui' pela senha correta do usuário do banco de dados



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}


$sql_create_table = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
)";

if ($conn->query($sql_create_table) === TRUE) {
    echo " ";
} else {
    echo "  " . $conn->error;
}

$nome = "Admin";
$email = "kep2023@gmail.com";
$senha = password_hash("haiti2023", PASSWORD_DEFAULT); 

$sql_check_user = "SELECT id FROM usuarios WHERE email = '$email'";
$result_check_user = $conn->query($sql_check_user);

if ($result_check_user->num_rows === 0) {
  
    $sql_insert_user = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql_insert_user) === TRUE) {
        echo " ";
    } else {
        echo " " . $conn->error;
    }
} else {
    echo " ";
}


$conn->close();
?>
