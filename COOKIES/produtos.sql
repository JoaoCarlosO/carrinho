CREATE DATABASE cookies;

CREATE TABLE produtos (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(225) NOT NULL,
	preco DECIMAL(10,2) NOT NULL,
	descricao TEXT NOT NULL,
	imagem VARCHAR(225) NOT NULL
);

INSERT INTO produtos (nome, imagem, preco, descricao) VALUES
('Smartphone Xiaomi Redmi Note 13 Pro 5G', 'imgs/img_celular.png', 1920.00, 'Um smartphone moderno com tecnologia 5G.'),
('Fone Bluetooth Xiaomi Tws A9 Pro- Display Lcd', 'imgs/img_fones.png', 144.00, 'Fone bluetooth com display LCD e som de alta qualidade.'),
('Relógio Casio Analógico Prata LTP-V006D-2BUDF', 'imgs/img_relogio.png', 219.90, 'Relógio analógico de alta precisão e design elegante.'),
('Tênis Tesla De Skate Coil Black Reflect', 'imgs/img_tenisTesla.png', 399.99, 'Tênis resistente e confortável, ideal para skate.'),
('Camisa 3 Flamengo com patrocínio 23/24', 'imgs/img_camisa.png', 169.99, 'Camisa oficial do Flamengo com patrocínio.'),
('Notebook Lenovo Ideapad 3 AMD Ryzen 5', 'imgs/img_notebook.png', 2999.00, 'Notebook potente com processador AMD Ryzen 5.'),
('Monitor LG 24 Full HD', 'imgs/img_monitor.png', 899.00, 'Monitor com resolução Full HD de alta qualidade.');
