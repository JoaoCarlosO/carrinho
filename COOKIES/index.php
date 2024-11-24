<?php
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['produtos'])) {
    // Recupera os produtos adicionados ao carrinho (em formato JSON)
    $produtos_adicionados = $_POST['produtos'];
    
    // Recupera o cookie 'produtos' existente, se houver
    $produtos_no_carrinho = isset($_COOKIE['produtos']) ? json_decode($_COOKIE['produtos'], true) : [];
    
    // Adiciona os produtos ao carrinho
    foreach ($produtos_adicionados as $produto) {
        $produtos_no_carrinho[] = json_decode($produto, true);
    }
    
    // Atualiza o cookie de produtos
    setcookie('produtos', json_encode($produtos_no_carrinho), time() + 3600, '/');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/style_index.css">
</head>
<body class="fundo">
    <div class="botoes">
        <!-- Botão de Carrinho -->
        <form action="restrito.php" method="GET">
            <button type="submit" class="btn_carrinho">
                <img src="imgs/carrinho.png" alt="Carrinho">
            </button>
        </form>

        <!-- Botão de Logout -->
        <form method="POST" style="display: inline;">
            <button type="submit" name="logout" class="btn_sair">
                <img src="imgs/logout.png" alt="Logout">
            </button>
        </form>
    </div>

    <div class="nav">
        <!-- Título da Página -->
        <h1 class="titulo">PHPE-commerce</h1>
    </div>

    <form method="POST">
        <div class="produtos_container">
            <!-- Produto 1 -->
            <div class="produto">
                <img src="imgs/img_celular.png" alt="Smartphone Xiaomi Redmi Note 13 Pro 5G">
                <div class="descricao">
                    <h3>Smartphone Xiaomi Redmi Note 13 Pro 5G</h3>
                    <h2>R$1.920,00</h2>
                </div>
                <label>
                    <input type="checkbox" name="produtos[1]" value='{"nome":"Smartphone Xiaomi Redmi Note 13 Pro 5G","imagem":"imgs/img_celular.png","preco":1920}'> Adicionar
                </label>
            </div>

            <!-- Produto 2 -->
            <div class="produto">
                <img src="imgs/img_fones.png" alt="Fone Bluetooth Xiaomi Tws A9 Pro- Display Lcd">
                <div class="descricao">
                    <h3>Fone Bluetooth Xiaomi Tws A9 Pro- Display Lcd</h3>
                    <h2>R$144,00</h2>
                </div>
                <label>
                    <input type="checkbox" name="produtos[2]" value='{"nome":"Fone Bluetooth Xiaomi Tws A9 Pro- Display Lcd","imagem":"imgs/img_fones.png","preco":144}'> Adicionar
                </label>
            </div>

            <!-- Produto 3 -->
            <div class="produto">
                <img src="imgs/img_relogio.png" alt="Relógio Casio Analógico Prata LTP-V006D-2BUDF">
                <div class="descricao">
                    <h3>Relógio Casio Analógico Prata LTP-V006D-2BUDF</h3>
                    <h2>R$219,90</h2>
                </div>
                <label>
                    <input type="checkbox" name="produtos[3]" value='{"nome":"Relógio Casio Analógico Prata LTP-V006D-2BUDF","imagem":"imgs/img_relogio.png","preco":219.90}'> Adicionar
                </label>
            </div>

            <!-- Produto 4 -->
            <div class="produto">
                <img src="imgs/img_tenisTesla.png" alt="Tênis Tesla De Skate Coil Black Reflect">
                <div class="descricao">
                    <h3>Tênis Tesla De Skate Coil Black Reflect</h3>
                    <h2>R$399,99</h2>
                </div>
                <label>
                    <input type="checkbox" name="produtos[4]" value='{"nome":"Tênis Tesla De Skate Coil Black Reflect","imagem":"imgs/img_tenisTesla.png","preco":399.99}'> Adicionar
                </label>
            </div>

            <!-- Produto 5 -->
            <div class="produto">
                <img src="imgs/img_camisa.png" alt="Camisa 3 Flamengo com patrocínio 23/24">
                <div class="descricao">
                    <h3>Camisa 3 Flamengo com patrocínio 23/24</h3>
                    <h2>R$169,99</h2>
                </div>
                <label>
                    <input type="checkbox" name="produtos[5]" value='{"nome":"Camisa 3 Flamengo com patrocínio 23/24","imagem":"imgs/img_camisa.png","preco":169.99}'> Adicionar
                </label>
            </div>

            <!-- Produto 6 -->
            <div class="produto">
                <img src="imgs/img_notebook.png" alt="Notebook Lenovo Ideapad 3 AMD Ryzen 5">
                <div class="descricao">
                    <h3>Notebook Lenovo Ideapad 3 AMD Ryzen 5</h3>
                    <h2>R$2.999,00</h2>
                </div>
                <label>
                    <input type="checkbox" name="produtos[6]" value='{"nome":"Notebook Lenovo Ideapad 3 AMD Ryzen 5","imagem":"imgs/img_notebook.png","preco":2999.00}'> Adicionar
                </label>
            </div>

            <!-- Produto 7 -->
            <div class="produto">
                <img src="imgs/img_monitor.png" alt="Monitor LG 24' Full HD">
                <div class="descricao">
                    <h3>Monitor LG 24' Full HD</h3>
                    <h2>R$899,00</h2>
                </div>
                <label>
                    <input type="checkbox" name="produtos[7]" value='{"nome":"Monitor LG 24 Full HD","imagem":"imgs/img_monitor.png","preco":899.00}'> Adicionar
                </label>
            </div>
        </div>

        <button type="submit" class="submit-btn">
            <img src="imgs/carrinho.png" class="carrinho" alt="Carrinho">
            Adicionar ao carrinho
        </button>
    </form>
</body>
</html>
