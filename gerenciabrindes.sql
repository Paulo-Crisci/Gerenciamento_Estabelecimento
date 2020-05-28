-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Maio-2020 às 17:56
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gerenciabrindes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfornecedor`
--

CREATE TABLE `tbfornecedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `produto` varchar(70) NOT NULL,
  `telefone` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfornecedor`
--

INSERT INTO `tbfornecedor` (`id`, `nome`, `produto`, `telefone`, `email`) VALUES
(4, 'José da silva', 'Bolsa térmica', '(11) 94239-8938', 'josé_termica@gmail.com'),
(7, 'Paulo Crisci', 'Canetas Personalizadas', '(34)928374633', 'paulinho.crisci@mail.com'),
(8, 'Paulo Crisci', 'Canetas Personalizadas', '(34)928374633', 'paulinho.crisci@mail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprodutos`
--

CREATE TABLE `tbprodutos` (
  `id` int(11) NOT NULL,
  `produto` varchar(70) NOT NULL,
  `quantidade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbprodutos`
--

INSERT INTO `tbprodutos` (`id`, `produto`, `quantidade`) VALUES
(1, 'Carregador Veicular', 'teste'),
(2, 'Caneta Personalizada', 'paulo'),
(3, 'Bolsa Térmica', '12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`id`, `nome`, `senha`) VALUES
(1, 'Paulo', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbfornecedor`
--
ALTER TABLE `tbfornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbfornecedor`
--
ALTER TABLE `tbfornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbprodutos`
--
ALTER TABLE `tbprodutos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
