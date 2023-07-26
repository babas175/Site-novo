<?php


$host = 'myshared0788'; 
$dbName = 'haitian'; 
$username = 'haitian'; 
$password = 'Sophard175@'; 

try {
  
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "
    CREATE TABLE IF NOT EXISTS estudante (
        matricula INT(8) PRIMARY KEY,
        cpf VARCHAR(14) UNIQUE,
        email VARCHAR(255),
        nome VARCHAR(100),
        sobrenome VARCHAR(100),
        curso VARCHAR(100),
        celular VARCHAR(15),
        senha VARCHAR(255)
    );
    ";

    $pdo->exec($sql);

    // Adicione aqui a criação de outras tabelas, se necessário

} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
