<?php
$host = 'myshared0788'; 
$dbName = 'haitian'; 
$username = 'haitian'; 
$password = 'Sophard175@'; 

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlEstudante = "
    CREATE TABLE IF NOT EXISTS estudante (
        matricula INT(8) PRIMARY KEY,
        cpf VARCHAR(14) UNIQUE,
        email VARCHAR(255),
        nome VARCHAR(100),
        sobrenome VARCHAR(100),
        curso VARCHAR(100),
        celular VARCHAR(15),
        senha VARCHAR(255)
    )";

    $pdo->exec($sqlEstudante);

    $sqlCandidatura = "
    CREATE TABLE IF NOT EXISTS vota (
        id INT AUTO_INCREMENT PRIMARY KEY,
        matricula INT,
        cpf VARCHAR(14) NOT NULL,
        voto VARCHAR(100) NOT NULL,
        FOREIGN KEY (matricula) REFERENCES estudante (matricula) 
    )";

    $pdo->exec($sqlCandidatura);

    echo " ";
} catch (PDOException $e) {
    die("Error creating tables: " . $e->getMessage());
}
?>
