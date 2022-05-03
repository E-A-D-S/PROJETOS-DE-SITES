-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Out-2019 às 20:28
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atelie_fashion`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_cliente`
--

CREATE TABLE `cadastro_cliente` (
  `CPF` varchar(11) COLLATE utf8_bin NOT NULL,
  `NOME` varchar(60) COLLATE utf8_bin NOT NULL,
  `TELEFONE` int(11) NOT NULL,
  `EMAIL` varchar(60) COLLATE utf8_bin NOT NULL,
  `ENDERECO` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cadastro_cliente`
--

INSERT INTO `cadastro_cliente` (`CPF`, `NOME`, `TELEFONE`, `EMAIL`, `ENDERECO`) VALUES
('03918279014', 'Carolina Faleiro', 995397025, 'carolinafaleiro8@gmail.com', 'jose batista anjolin'),
('55896523524', 'Juliana Gojild Silva', 2147483647, 'juliana.kilosa@hotmail.com', 'Centro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_produtos`
--

CREATE TABLE `cadastro_produtos` (
  `CODIGO` int(60) NOT NULL,
  `TIPO` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `COR` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `TAMANHO` varchar(60) COLLATE utf8_bin NOT NULL,
  `QUANTIDADE` varchar(60) COLLATE utf8_bin NOT NULL,
  `MODELO` varchar(60) COLLATE utf8_bin NOT NULL,
  `MARCA` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `PRECO` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cadastro_produtos`
--

INSERT INTO `cadastro_produtos` (`CODIGO`, `TIPO`, `COR`, `TAMANHO`, `QUANTIDADE`, `MODELO`, `MARCA`, `PRECO`) VALUES
(1, 'Vestido', 'Vermelha', 'P', '50', 'Manga longa', 'adidas', '85,00'),
(2, 'blusa', 'rosa', 'M', '2', 'manga longa', 'VANS', '80.00'),
(16, 'Short', 'Azul', 'G', '10', 'Jeans', 'Adidas', '180.00'),
(19, 'Vestido', 'Roxo', 'GG', '30', 'Tubinho', 'Lola', '29.90');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_cliente`
--
ALTER TABLE `cadastro_cliente`
  ADD PRIMARY KEY (`CPF`);

--
-- Índices para tabela `cadastro_produtos`
--
ALTER TABLE `cadastro_produtos`
  ADD PRIMARY KEY (`CODIGO`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_produtos`
--
ALTER TABLE `cadastro_produtos`
  MODIFY `CODIGO` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
