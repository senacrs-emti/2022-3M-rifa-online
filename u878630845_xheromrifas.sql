-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Jul-2022 às 11:43
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
-- Banco de dados: `u878630845_xheromrifas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `usuario` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`id`, `usuario`, `senha`) VALUES
(1, '59pT3JzizQ==', 'a8042a811fe2238ef73c8c7b0074fcd2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `rifaid` int(11) NOT NULL,
  `usuarioid` int(11) NOT NULL,
  `data` date NOT NULL,
  `premio` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `registros`
--

INSERT INTO `registros` (`id`, `rifaid`, `usuarioid`, `data`, `premio`) VALUES
(6, 2, 6, '2022-07-03', 0),
(7, 2, 6, '2022-07-03', 1),
(666, 2, 6, '2022-07-03', 1),
(667, 2, 6, '2022-07-04', 0),
(668, 2, 6, '2022-07-04', 0),
(669, 2, 6, '2022-07-04', 1),
(670, 3, 6, '2022-07-04', 0),
(671, 3, 6, '2022-07-04', 0),
(672, 3, 6, '2022-07-04', 0),
(673, 3, 6, '2022-07-04', 0),
(674, 3, 6, '2022-07-04', 0),
(675, 3, 6, '2022-07-04', 0),
(676, 3, 6, '2022-07-04', 0),
(677, 3, 6, '2022-07-04', 1),
(678, 3, 6, '2022-07-04', 0),
(679, 3, 6, '2022-07-04', 0),
(680, 4, 6, '2022-07-04', 0),
(681, 4, 6, '2022-07-04', 0),
(682, 4, 6, '2022-07-04', 1),
(683, 4, 6, '2022-07-04', 0),
(684, 4, 6, '2022-07-04', 0),
(685, 4, 6, '2022-07-04', 0),
(686, 4, 6, '2022-07-04', 0),
(687, 4, 6, '2022-07-04', 0),
(688, 4, 6, '2022-07-04', 0),
(689, 4, 6, '2022-07-04', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rifas`
--

CREATE TABLE `rifas` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `premio` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` double NOT NULL,
  `total` int(11) NOT NULL,
  `atual` int(11) NOT NULL,
  `inicio` date NOT NULL,
  `fim` date NOT NULL,
  `descricao` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sorteado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `rifas`
--

INSERT INTO `rifas` (`id`, `nome`, `premio`, `estado`, `preco`, `total`, `atual`, `inicio`, `fim`, `descricao`, `imagem`, `sorteado`) VALUES
(2, 'Páscoa', 'Ovo da Supreme', 'Futura', 3.99, 500, 497, '2022-07-12', '2022-04-17', 'Nessa Páscoa saboreie o que há de melhor no mercado.', 'pascoa.jpg', 669),
(3, 'Natal', 'Alexa Echo Dot 4', 'Ativa', 5.99, 300, 290, '2022-12-01', '2022-06-25', 'Presenteie a pessoa querida ou você mesmo com a mais nova Alexa Echo Dot de 4ª geração.', 'natal.jpg', 677),
(4, 'Dia dos Pais', 'Kit Pai Fantástico', 'Ativa', 3.99, 1000, 90, '2022-07-03', '2022-08-10', 'Presenteie o melhor pai do mundo com o kit mais completo para ele.', 'diadospais.jpeg', 682);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `email`, `numero`) VALUES
(6, '5dZUx4uy', '149815eb972b3c370dee3b89d645ae14', '5dZUx4vA2o5L4VutzUln', 'pIIeitm3j9EZuwM='),
(10, '/NJV2oDh', '398bb4d9a15db2d8bf52b9ca9c8538ee', '/NJV2oDh/YRH6V7vgEVlrQ==', 'pIIeitm3j9EZuwM=');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `rifas`
--
ALTER TABLE `rifas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=690;

--
-- AUTO_INCREMENT de tabela `rifas`
--
ALTER TABLE `rifas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
