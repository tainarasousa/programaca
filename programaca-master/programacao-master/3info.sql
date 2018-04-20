-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 09/04/2018 às 12:07
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `3info`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(60) NOT NULL,
  `descricao_categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`, `descricao_categoria`) VALUES
(1, 'Telefonia', 'Produtos de Telefonia'),
(2, 'Informática', 'Produtos de Informática'),
(3, 'Eletrodomésticos', 'Produtos de Eletrodomésticos'),
(4, 'vestidos', 'Produtos de Móveis'),
(5, 'Limpeza', ''),
(6, 'Esportes', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(60) NOT NULL,
  `descricao_produto` varchar(255) NOT NULL,
  `foto_produto` varchar(255) NOT NULL,
  `preco_produto` float NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `descricao_produto`, `foto_produto`, `preco_produto`, `id_categoria`) VALUES
(1, 'Vestido Manola Neoprene Preto', 'Detalhes do produto: Vestido rodado em neoprene preto com detalhe de malha cirrê (imitação de couro) com detalhe de zíper dourado nas costas.', '', 59, 1),
(2, 'Vestido Acrobat Curto Floral Preto', 'DETALHES DO PRODUTO\r\nVestido Acrobat Curto Floral Preto \r\nTipo de Produto: Vestido\r\nModelagem: Evasê\r\nComprimento: Curto', '', 110, 1),
(3, 'Vestido Lez a Lez Longo Estampado Vermelho', 'Vestido Lez a Lez Longo Estampado Vermelho \r\nTipo de Produto: Vestido\r\nModelagem: Regular\r\nManga: Sem Manga\r\nComprimento: Longo\r\n', '', 290, 1),
(4, 'Vestido Lez a Lez Curto Evasê Preto', 'Vestido Lez a Lez Curto Evasê Preto \r\nTipo de Produto: Vestido\r\nModelagem: Evasê\r\nManga: Longa', '', 320, 2),
(5, 'Vestido Colcci Curto Canutilhos Preto', 'Vestido Colcci Curto Canutilhos Preto \r\nTipo de Produto: Vestido\r\nModelagem: Evasê\r\nComprimento: Curto\r\nDecote: Trapézio\r\nTamanho: P', '', 300, 2),
(6, 'Vestido Colcci Longo Mangas Flare Preto', 'Vestido Colcci Longo Mangas Flare Preto \r\nTipo de Produto: Vestido\r\nModelagem: Sino\r\nManga: Longa\r\nComprimento: Longo\r\nDecote: V\r\n', '', 610, 4),
(7, 'Vestido Izad Festa Nude', 'Vestido longo com manguinhas, bordado em paetes, com detalhes diferenciado no cinto e mangas. Modelagem alinhada, alongando o corpo e deixando o look ainda mais elegante. \r\n', '', 1900, 4),
(8, 'Ajax', 'desinfetante para limpeza pesada', '', 7, 5);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
