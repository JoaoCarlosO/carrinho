<?php
session_start();

// Verifica se o botão de logout foi pressionado
if (isset($_POST['logout'])) {
    // Remove o cookie de produtos
    setcookie('produtos', '', time() - 3600, '/'); // Limpa o cookie de carrinho
    
    // Remove todas as variáveis da sessão
    session_unset();
    
    // Destroi a sessão
    session_destroy();
    
    // Redireciona para a página de login
    header('Location: login.php');
    exit;
}
?>
