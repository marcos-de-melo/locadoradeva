-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/06/2024 às 12:27
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dblocadora`
--
CREATE DATABASE IF NOT EXISTS `dblocadora` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dblocadora`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcategorias`
--

CREATE TABLE `tbcategorias` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcategorias`
--

INSERT INTO `tbcategorias` (`idCategoria`, `nomeCategoria`) VALUES
(169, 'Aventura'),
(171, 'Romance'),
(173, 'Suspence'),
(175, 'Comédia'),
(176, 'Ação'),
(177, 'Terror');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbclientes`
--

CREATE TABLE `tbclientes` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(45) NOT NULL,
  `telefoneCliente` varchar(45) DEFAULT NULL,
  `emailCliente` varchar(45) DEFAULT NULL,
  `statusCliente` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbclientes`
--

INSERT INTO `tbclientes` (`idCliente`, `nomeCliente`, `telefoneCliente`, `emailCliente`, `statusCliente`) VALUES
(6, 'Amanda', '19987402874', 'amanda.123@gmail.com', 0),
(122, 'Marcos Daniel', '19938847634', 'marcosdcaguei@gmail.com', 1),
(161, 'Leonardo Tavares', '19997483987', 'leo246935+34@sougay.com', 1),
(207, 'Jonas Manoel', '19982398452', 'jonas3232@hotmail.com', 1),
(210, 'Pedro José', '1999999995', 'pedroo23@gmail.com', 1),
(214, 'Julho Paulo', '19997699999', 'jp1332@email.com', 0),
(216, 'Ludmila e Mariah', '1999999', 'allanzingrau.com', 0),
(220, 'Leandro Schiavo ', '(19)99232-6165', 'leandro.schiavo@gmail.com', 0),
(221, 'marcos de melo', '12345678', 'marcd@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbfilmes`
--

CREATE TABLE `tbfilmes` (
  `idFilme` int(11) NOT NULL,
  `tituloFilme` varchar(100) NOT NULL,
  `duracaoFilme` varchar(10) NOT NULL,
  `valorLocacao` decimal(10,2) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `statusFilme` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbfilmes`
--

INSERT INTO `tbfilmes` (`idFilme`, `tituloFilme`, `duracaoFilme`, `valorLocacao`, `idCategoria`, `statusFilme`) VALUES
(202, 'Rock II', '2', 2.00, 173, 2),
(203, 'Crepúsculo', '2hrs', 6.00, 171, 0),
(204, 'Velozes e Furiosos', '1:30:00', 10.00, 176, 1),
(205, 'IT a coisa', '1:25:00', 0.00, 177, 0),
(211, 'Gran Turismo', '1:00:00', 40.00, 176, 0),
(214, 'Se beber não case', '1:10:00', 15.00, 175, 1),
(218, 'Caça fantasmas', '2', 4.00, 173, 0),
(219, 'Rambo 1', '2', 4.00, 173, 0),
(220, 'Rambo 2', '3', 5.00, 173, 0),
(221, 'Rambo 3', '2', 3.00, 173, 0),
(222, 'Rambo 4', '3', 5.00, 173, 0),
(223, 'rambo 5', '2', 2.00, 173, 0),
(224, 'Or Mencenarios 1', '3', 3.00, 173, 1),
(225, 'Or Mencenarios 2', '3', 3.00, 173, 0),
(226, 'Or Mencenarios 3', '2', 2.00, 173, 0),
(227, 'Or Mencenarios 4', '3', 3.00, 173, 0),
(228, 'Flash Dance', '2', 2.00, 173, 0),
(231, 'Alien 1', '3', 3.00, 173, 0),
(232, 'alien 2', '2', 4.00, 173, 1),
(233, 'Alien 4', '2', 2.00, 173, 0),
(234, 'Exterminador', '2', 4.00, 173, 0),
(235, 'Exterminador 2', '1', 3.00, 173, 1),
(236, 'Perdidos no espaço', '1', 2.00, 173, 2),
(238, 'Homem de Ferro', '2', 2.00, 173, 1),
(239, 'predador vs alien me nova york', '2', 2.00, 1, 0),
(240, 'predador vs alien', '3', 3.00, 1, 0),
(241, 'PREDADOR VS ALIEN', '2', 2.00, 177, 0),
(242, 'Atlas', '2', 10.00, 176, 0),
(243, 'Planete Plane', '2h42', 299.00, 176, 0),
(244, 'teste', '2', 23.00, 169, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbitenslocados`
--

CREATE TABLE `tbitenslocados` (
  `idLocacao` int(11) NOT NULL,
  `idFilme` int(11) NOT NULL,
  `dataDeEntrega` date NOT NULL,
  `statusItemLocado` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblocacao`
--

CREATE TABLE `tblocacao` (
  `idLocacao` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `dataLocacao` date NOT NULL,
  `statusLocacao` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblocacao`
--

INSERT INTO `tblocacao` (`idLocacao`, `idCliente`, `dataLocacao`, `statusLocacao`) VALUES
(287, 214, '2024-06-11', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuarios`
--

CREATE TABLE `tbusuarios` (
  `loginUser` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senhaUser` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nomeUser` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tbusuarios`
--

INSERT INTO `tbusuarios` (`loginUser`, `senhaUser`, `nomeUser`) VALUES
('marcos', '88d4266fd4e6338d13b845fcf289579d209c897823b9217da3e161936f031589', 'Marcos de Melo');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbcategorias`
--
ALTER TABLE `tbcategorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices de tabela `tbfilmes`
--
ALTER TABLE `tbfilmes`
  ADD PRIMARY KEY (`idFilme`);

--
-- Índices de tabela `tbitenslocados`
--
ALTER TABLE `tbitenslocados`
  ADD PRIMARY KEY (`idLocacao`,`idFilme`),
  ADD KEY `idFilme_locacao` (`idFilme`);

--
-- Índices de tabela `tblocacao`
--
ALTER TABLE `tblocacao`
  ADD PRIMARY KEY (`idLocacao`),
  ADD KEY `idCliente_Locacao` (`idCliente`);

--
-- Índices de tabela `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`loginUser`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcategorias`
--
ALTER TABLE `tbcategorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT de tabela `tbfilmes`
--
ALTER TABLE `tbfilmes`
  MODIFY `idFilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT de tabela `tblocacao`
--
ALTER TABLE `tblocacao`
  MODIFY `idLocacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbitenslocados`
--
ALTER TABLE `tbitenslocados`
  ADD CONSTRAINT `fk_id_locacao` FOREIGN KEY (`idLocacao`) REFERENCES `tblocacao` (`idLocacao`),
  ADD CONSTRAINT `idFilme_locacao` FOREIGN KEY (`idFilme`) REFERENCES `tbfilmes` (`idFilme`);

--
-- Restrições para tabelas `tblocacao`
--
ALTER TABLE `tblocacao`
  ADD CONSTRAINT `idCliente_Locacao` FOREIGN KEY (`idCliente`) REFERENCES `tbclientes` (`idCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
