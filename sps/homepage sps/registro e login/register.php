<?php
session_start(); // Iniciar a sessão

// Incluir o arquivo de configuração
require_once 'config.php';

$conn = getDatabaseConnection();

$nome = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat-password'];

if ($password !== $repeat_password) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Erro</title>
        <link rel='stylesheet' href='./style/style.css'>
        <link rel='shortcut icon' href='image/pratito.png' type='image/x-icon'>
    </head>
    <body>
        <div class='wrapper'>
            <p id='error-message' style='color: red;'>As senhas não coincidem!</p>
            <p>Você será redirecionado em 3 segundos...</p>
            <script>
                setTimeout(() => { window.history.back(); }, 3000);
            </script>
        </div>
    </body>
    </html>";
    exit;
}


// Verificar se o e-mail já está cadastrado
$email_check = "SELECT * FROM usuarios WHERE email = ?";
$stmt_check = $conn->prepare($email_check);
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Erro</title>
        <link rel='stylesheet' href='./style/style.css'>
        <link rel='shortcut icon' href='image/pratito.png' type='image/x-icon'>
    </head>
    <body>
        <div class='wrapper'>
            <p id='error-message' style='color: red;'>O e-mail já está cadastrado! Tente outro.</p>
            <p>Você será redirecionado em 3 segundos...</p>
            <script>
                setTimeout(() => { window.history.back(); }, 3000);
            </script>
        </div>
    </body>
    </html>";
    exit;
}

// Criptografar a senha antes de armazená-la no banco de dados
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nome, $email, $hashed_password);

if ($stmt->execute()) {
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
            <h1>Olá, " . htmlspecialchars($nome) . "!</h1>
            <p id='success-message' style='color: green;'>Conta criada com sucesso! Você será redirecionado para a página de login em 3 segundos...</p>
            <p>Para voltar à página inicial <a href='../home.html'>Clique Aqui.</a></p>
            <script>
                setTimeout(() => { window.location.href = 'login.html'; }, 3000);
            </script>
        </div>
    </body>
    </html>";
} else {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Erro</title>
        <link rel='shortcut icon' href='image/pratito.png' type='image/x-icon'>
    </head>
    <body>
        <div class='wrapper'>
            <p id='error-message' style='color: red;'>Erro ao cadastrar usuário: " . $conn->error . "</p>
        </div>
    </body>
    </html>";
}


// Fechar a conexão
$stmt->close();
$stmt_check->close();
$conn->close();
?>
