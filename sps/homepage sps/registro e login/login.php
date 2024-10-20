<?php
session_start(); // Iniciar a sessão

require_once 'config.php';

$conn = getDatabaseConnection();

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Erro</title>
        <link rel='shortcut icon' href='image/pratito.png' type='image/x-icon'>
    </head>
    <body>
        <p id='error-message'>E-mail não encontrado! Tente novamente.</p>
        <script>
            setTimeout(() => { window.history.back(); }, 3000);
        </script>
    </body>
    </html>";
    exit;
}

$user = $result->fetch_assoc();
if (password_verify($password, $user['senha'])) {
    // Login bem-sucedido
    $_SESSION['nome'] = $user['nome']; // Armazenar o nome do usuário na sessão
    
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Seu Prato Santista</title>
        <link rel='stylesheet' href='./style/style.css'>
        <link rel='shortcut icon' href='image/pratito.png' type='image/x-icon'>
    </head>
    <body>
        <div class='wrapper'>
            <h1>Olá, " . htmlspecialchars($user['nome']) . "!</h1>
            <p>Login bem-sucedido, redirecionando você...</p>
            <script>
                setTimeout(() => { window.location.href = '../index.php'; }, 3000);
            </script>
        </div>
    </body>
    </html>";
}

// Fechar a conexão
$stmt->close();
$conn->close();
?>
