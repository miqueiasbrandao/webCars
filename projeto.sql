-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2022 às 16:30
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `id` int(11) NOT NULL,
  `modelo` varchar(20) DEFAULT NULL,
  `placa` varchar(20) DEFAULT NULL,
  `marca` varchar(15) DEFAULT NULL,
  `cor` varchar(10) DEFAULT NULL,
  `ano` varchar(4) DEFAULT NULL,
  `login` varchar(20) NOT NULL,
  `situacao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`id`, `modelo`, `placa`, `marca`, `cor`, `ano`, `login`, `situacao`) VALUES
(39, 'teste', 'teste', 'teste', 'teste', 'test', 'carlos', 'vendido'),
(40, 'teste', 'asdsa', 'asdasdsd', 'sadsa', 'sdsa', 'carlos', 'vendido'),
(45, 'dsfsf', 'sfd', 'dfs', 'sdff', 'sdf', 'miqueias', 'vendido'),
(46, 'Gol', 'DJW1233', 'vw', 'Vermelho', '1999', 'miqueias', 'em estoque'),
(47, 'Versa', 'ONR2313', 'Nissan', 'Branco', '2022', 'miqueias', 'em estoque'),
(48, 'sdf', 'sdf', 'sdf', 'dsfsdf', 'sdf', 'marcos', 'vendido'),
(49, 'sadadd', 'asdasdas', 'sadd', 'asdaad', 'asds', 'marcos', 'em preparacao'),
(51, 'sdfds', 'dsf', 'dsfs', 'fsdfds', 'dsf', 'lucas', 'em preparacao'),
(52, 'sdf', 'dfsf', 'sdf', 'sdfds', 'dsff', 'lucas', 'em preparacao'),
(54, 'adads', 'asd', 'sad', 'corTeste', 'asd', 'admin', 'em preparacao'),
(59, 'fsdf', 'sdf', 'sdf', 'sdfs', 'dfds', 'admin', 'vendido'),
(62, 'df', 'fdsf', 'sdf', 'dsf', 'dsf', 'caio', 'em preparacao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `grupo_usuario` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `senha`, `grupo_usuario`) VALUES
(1, 'admin', '123', 1),
(4, 'marcos', '123', 2),
(5, 'victor', '123', 2),
(6, 'carlos', '123', 2),
(7, 'lucas', '123', 2),
(8, 'miqueias', '123', 2),
(19, 'desenvolvedor', 'dev', 1),
(28, 'caio', '123', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
