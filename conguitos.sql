-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Jun-2022 às 19:27
-- Versão do servidor: 10.5.12-MariaDB-cll-lve
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u878630845_rifas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `usuario` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`usuario`, `senha`) VALUES
('vitorbp', '51b6a24b4851fa6459017d64b736f6a3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro`
--

CREATE TABLE `registro` (
  `idnumero` int(11) NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comprador` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendedor` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metodo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `idrifa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rifas`
--

CREATE TABLE `rifas` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `premio` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maximo` int(11) NOT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `rifas`
--

INSERT INTO `rifas` (`id`, `nome`, `premio`, `maximo`, `preco`) VALUES
(1, 'Dia dos Pais', 'Teste', 500, 1.99),
(2, 'Dia dos Namorados', 'Teste', 1000, 1.99),
(3, 'Natal', 'Teste', 1000, 0.99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`email`, `senha`) VALUES
('clebin@gmail.com', '698dc19d489c4e4db73e28a713eab07b'),
('joao@gmail.com', '32332bbd1bf0622149ef7bf640f85057'),
('pedro@gmail.com', '5d4b9a7da17f0ae9be34c8c953635bb0');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`usuario`);

--
-- Índices para tabela `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idnumero`);

--
-- Índices para tabela `rifas`
--
ALTER TABLE `rifas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `registro`
--
ALTER TABLE `registro`
  MODIFY `idnumero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=408;

--
-- AUTO_INCREMENT de tabela `rifas`
--
ALTER TABLE `rifas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
