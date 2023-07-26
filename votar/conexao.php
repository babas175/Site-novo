<?php

$host = 'myshared0788'; 
$dbName = 'haitian'; 
$username = 'haitian'; 
$password = 'Sophard175@'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "
    CREATE TABLE IF NOT EXISTS candidatura (
        id INT AUTO_INCREMENT PRIMARY KEY,
        presidente VARCHAR(100) NOT NULL,
        vice_presidente VARCHAR(100) NOT NULL,
        secretario VARCHAR(100) NOT NULL,
        vice_secretario VARCHAR(100) NOT NULL,
        diretor_financeiro VARCHAR(100) NOT NULL,
        diretor_comunicacao VARCHAR(100) NOT NULL,
        diretor_culturais VARCHAR(100) NOT NULL,
        diretor_sociais VARCHAR(100) NOT NULL,
        suplente VARCHAR(100) NOT NULL,
        numero_eleitoral INT NOT NULL
    )";

    $pdo->exec($sql);

    // Adicione aqui a criação de outras tabelas, se necessário

} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
