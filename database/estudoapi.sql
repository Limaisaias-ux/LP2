-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2022 às 22:05
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estudoapi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `photo` varchar(400) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` decimal(25,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `photo`, `title`, `description`, `price`) VALUES
(1, 'https://i.pinimg.com/564x/b4/65/0c/b4650cafffe5df654e06c79a36d8026a.jpg', 'Ração Pedigree', 'Para Cães Filhotes de Raçãs Médias e Grandes 20 Kg', '258'),
(2, 'https://i.pinimg.com/564x/0e/3a/64/0e3a64f5fd49a5c10f2dae1f98aabe2c.jpg', 'Ração Dog Chow', 'Ração Seca Dog Chow Frango Cães Adultos Raças Minis e Pequenos Nestlé Purina - 1kg', '22'),
(3, 'https://i.pinimg.com/564x/71/27/91/712791f6149964ef31e3aa96ee79dbb5.jpg', 'Ração Golden Special', 'Ração Golden Special Sabor Frango e Carne para Cães Adultos, 15kg Premier Pet Para Todas Grande Adulto', '120'),
(4, 'https://i.pinimg.com/564x/dc/10/93/dc109363ee0403836ccfdb29c0e913c6.jpg', 'Ração Golden Para Gatos', 'Ração Golden para Gatos Adultos Castrados Sabor Carne - 1kg Premier Pet para Todas Todos os tamanhos de raça Adulto', '28'),
(5, 'https://i.pinimg.com/564x/4b/66/cc/4b66cc9de14f813ac487eebac7918dea.jpg', 'Ração Royal Canin Premium Cat', ' Imagem do produto CliqRação Royal Canin Premium Cat para Gatos Adultos Castrados', '268'),
(6, 'https://i.pinimg.com/564x/7c/37/61/7c376192c98a4a4845003f1577a25c46.jpg', 'Ração Whiskas Carne e Leite', ' Ração Para Gatos Filhotes - 3 kg', '55'),
(7, 'https://cf.shopee.com.br/file/a0b0222f32f0d3732b52e9d40655275e', 'Coleira Tática', 'Guia K9 Militar Policial Personalizada Nome Cão Cachorro Pet', '159'),
(8, 'https://liderdamatilha.fbitsstatic.net/img/p/coleira-bandana-com-guia-e-porta-saquinhos-pet-style-para-caes-68219/256160-14.jpg?w=612&h=612&v=no-change&qs=ignore', 'Coleira Bandana', 'Coleira Bandana com Guia e Porta Saquinhos para Cães', '65'),
(9, 'https://s.zst.com.br/cms-assets/2020/09/melhor-coleira-cachorro-4-.png', 'Coleira Peitoral', 'Coleira Peitoral Para Raças Pequenas da Cor Vermelha', '30'),
(10, 'https://cdn.shopify.com/s/files/1/0073/9383/7141/products/coleiras-e-peitorais-para-animais-de-estimacao-coleira-peitoral-para-gato-com-guia-1.jpg?v=1639190404', 'Coleira Peitoral ', 'Coleira Peitoral Para Gatos com Guia da Cor Vermelha', '45'),
(11, 'https://images.tcdn.com.br/img/img_prod/692622/kit_de_coleiras_para_gatos_com_10_unidades_coloridas_101_1_20190328120649.jpg', 'Coleira Para Gatos', 'Coleira Peitoral Para Gatos com sino', '40'),
(13, 'https://m.media-amazon.com/images/I/51HTMiSdnNL._AC_SX425_.jpg', 'Coleira Peitoral Para Gatos', 'Conjunto de coleira peitoral e guia para gatos', '45'),
(14, 'https://i.pinimg.com/564x/86/27/a0/8627a04c95d7b512d79c8756a6a28135.jpg', 'Vestido de verão para cachorro e gato', 'Vestidos para Pet de Porte Pequeno ou Médio', '60'),
(15, 'https://i.pinimg.com/564x/80/d7/b4/80d7b4a0ae4e8751d21e1820ed28ea2e.jpg', 'Conjunto Cartonn para inverno', 'Conjunto de Blusa e Touca para Pet de Porte Pequeno ou Médio', '95'),
(16, 'https://i.pinimg.com/564x/b1/bf/22/b1bf227fecc69a8038b3b050eb6609ca.jpg', 'Roupa para Cachorro', 'Roupa para Cachorro de Grande Porte', '125');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `token` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sessions`
--

INSERT INTO `sessions` (`id`, `id_user`, `token`, `description`, `create_at`) VALUES
(0, 1, 'c6590abb3c137ffe2f505f98596ec5fb', 'Thunder Client (https://www.thunderclient.com)', '2022-06-20 16:43:37'),
(0, 1, '678ef9bad2dfdfbbdf12214a162d3836', 'Thunder Client (https://www.thunderclient.com)', '2022-06-20 16:51:04'),
(0, 1, '4adeb1ebdece8630c1be9608b8208c4f', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-22 16:23:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `cpf` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `cep` int(8) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `roles` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `date`, `cpf`, `city`, `state`, `cep`, `pass`, `roles`) VALUES
(1, 'Isaias Rodrigo Lima da Conceiçao', 'isaiaslima@gmail.com', '0000-00-00', 2147483647, 'Caraguatatuba', 'São Paulo', 12345678, '7c222fb2927d828af22f592134e8932480637c0d', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sessions`
--
ALTER TABLE `sessions`
  ADD KEY `fk_user_id` (`id_user`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
