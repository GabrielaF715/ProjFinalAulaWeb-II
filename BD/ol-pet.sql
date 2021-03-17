-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Fev-2021 às 20:55
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ol-pet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

CREATE TABLE `pet` (
  `id` int(11) NOT NULL,
  `nome_pet` varchar(30) NOT NULL,
  `raca` varchar(50) NOT NULL,
  `cor` varchar(20) NOT NULL,
  `porte` varchar(20) NOT NULL,
  `idade` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pet`
--

INSERT INTO `pet` (`id`, `nome_pet`, `raca`, `cor`, `porte`, `idade`, `tipo`) VALUES
(1, 'Valente', 'Vira lata/ cão', 'caramelo', 'médio', '3 ', 'cão'),
(2, 'Negão', 'xauxau com shitzu', 'cinza', 'médio', '4', 'cão'),
(3, 'Madara', 'PitBull', 'Preto com Branco', 'Grande', '6 meses', 'cão'),
(4, 'Nega', 'Siames', 'Branco, preto e cinz', 'pequena', '6 anos', 'gata');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `cod` int(30) NOT NULL,
  `nome_produto` varchar(30) NOT NULL,
  `qtd_estoque` int(10) NOT NULL,
  `preco` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod`, `nome_produto`, `qtd_estoque`, `preco`) VALUES
(1, 'Shampoo', 10, '9.99'),
(2, 'Brinquedo Bola', 3, '5.99'),
(3, 'Caminha para Gato', 5, '9.99'),
(4, 'Sabão mata-pulga', 10, '9.99'),
(5, 'Sabão para pele', 4, '9.99'),
(6, 'Condicionador Gato', 2, '9.99'),
(7, 'Condicionador Cão', 3, '9.99'),
(8, 'Sapatinhos Inv. Cão', 5, '9.99'),
(9, 'Roupa Baby Gato', 7, '9.99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cpf` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cpf`, `nome`, `email`, `telefone`, `senha`) VALUES
(24601, 'Ana', 'ana@gmail.com', '51995459084', '91196232'),
(1234567, 'Gabriela', 'gabriela@gmail.com', '12345678', '69987984'),
(12345678, 'Cassiano', 'cassiano@gmail.com', '23456789', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pet`
--
ALTER TABLE `pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `cod` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
