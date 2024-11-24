<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

// Recupera os produtos do carrinho do cookie
$Lista_produtos = isset($_COOKIE['produtos']) ? json_decode($_COOKIE['produtos'], true) : [];

// Logout e limpeza dos cookies
if (isset($_POST['logout'])) {
    // Remove o cookie de produtos
    setcookie('produtos', '', time() - 3600, '/');
    
    // Finaliza a sessão
    session_destroy();

    // Redireciona para a página de login
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="css/style_restrito.css">
</head>
<body>
    <div class="botoes">
        <!-- Botão de Voltar -->
        <a href="index.php" class="btn">
            <img src="imgs/voltar.png" alt="Voltar">
        </a>

        <!-- Botão de Logout -->
        <form method="POST" style="display: inline;">
            <button type="submit" name="logout" class="btn-sair">
                <img src="imgs/logout.png" alt="Logout">
            </button>
        </form>
    </div>

    <div class="container">
        <h2>Carrinho de Compras</h2>

        <?php if (!empty($Lista_produtos)) : ?>
            <ul class="produtos-list">
                <?php foreach ($Lista_produtos as $produto) : ?>
                    <li class="produto-item">
                        <img src="<?= htmlspecialchars($produto['imagem']) ?>" alt="<?= htmlspecialchars($produto['nome']) ?>">
                        <div class="produto-info">
                            <div class="produto-nome"><?= htmlspecialchars($produto['nome']) ?></div>
                            <div class="produto-preco"><?= 'R$' . number_format($produto['preco'], 2, ',', '.') ?></div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <p>Seu carrinho está vazio.</p>
        <?php endif; ?>
    </div>
</body>
</html>
