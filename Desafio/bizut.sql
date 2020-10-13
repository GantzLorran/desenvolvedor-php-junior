-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Out-2020 às 03:08
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
-- Banco de dados: `bizut`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `datanasc` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `cpf`, `datanasc`, `email`, `tel`, `endereco`, `cid`, `estado`) VALUES
(2, 'Lorran Antônio Rodrigues', '154.630.967', '13/06/1996', 'lorranrodrigues553@gmail.com', '2132839977', 'Rua Vancouver', 'Vancouver', 'Vancouver'),
(5, 'Naiane', '1123578764', '18/01/1999', 'naiane@gmail.com', '21437537856', 'Rua Arari', 'RIO DE JANEIRO', 'RJ - RIO DE JANEIRO'),
(7, 'Naruto Uzumaki', '12345678911', '13/06/1996', 'narutouzumaki@gmail.com', '2345575432', 'Konoha', 'Konoha', 'Vila da folha'),
(8, 'Naruto Uzumaki', '12345678911', '13/06/1996', 'narutouzumaki@gmail.com', '2345575432', 'Konoha ', 'Pais do fogo', 'Vila da folha Japão'),
(9, 'Son Goku', '12345643281', '25/02/1986', 'songoku@gmail.com', '12453528291', 'Japão', 'Japão', 'Tokyo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
