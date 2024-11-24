<?php
session_start();

// Usuário e senha simulados para exemplo. Você pode alterar isso conforme necessário.
$usuario_valido = 'admin'; // Nome de usuário
$senha_valida = md5('senha123'); // Senha criptografada com md5

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']); // Criptografa a senha com md5

    // Verifica se o usuário e a senha são válidos e se a checkbox foi marcada
    if ($usuario === $usuario_valido && $senha === $senha_valida && isset($_POST['termos'])) {
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit;
    } else {
        $erro = 'Usuário, senha ou aceitação dos termos inválidos.';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <div class="login-container">
        <h2>Bem-vindo de volta</h2>
        
        <?php if (isset($erro)): ?>
            <p style="color: red;"><?php echo $erro; ?></p>
        <?php endif; ?>

        <form method="post">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required>
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label>
                <input type="checkbox" name="termos" class="termos" required> Corcordo com os termos e diretrizes
            </label>

            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
