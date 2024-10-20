<?php
// config.php

// Configurações do banco de dados
$host = 'localhost'; // Endereço do servidor
$db = 'sps'; // Nome do banco de dados
$user = ''; // Usuário do banco de dados
$pass = ''; // Senha do banco de dados

function getDatabaseConnection() {
    global $host, $user, $pass, $db;
    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }
    
    return $conn;
}
?>
