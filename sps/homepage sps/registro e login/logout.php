<?php
session_start(); // Iniciar a sessão

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destruir a sessão
session_destroy(); 

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Logout</title>
    <link rel='stylesheet' href='./style/style.css'>
    <link rel='shortcut icon' href='image/pratito.png' type='image/x-icon'>
</head>
<body>
    <div class='wrapper'>
        <h1>Logout realizado com sucesso!</h1>
        <p>Você foi desconectado. Redirecionando você para a página inicial...</p>
        <script>
            setTimeout(() => { window.location.href = '../index.php'; }, 3000);
        </script>
    </div>
</body>
</html>";
?>
