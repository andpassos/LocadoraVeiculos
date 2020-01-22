-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jan-2020 às 01:34
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categorias`
--

CREATE TABLE `tb_categorias` (
  `id` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_categorias`
--

INSERT INTO `tb_categorias` (`id`, `descricao`) VALUES
(2, 'SEDAN'),
(3, 'SUV'),
(4, 'SW'),
(6, 'PICK-UPS PEQUENAS'),
(7, 'PICK-UPS GRANDES'),
(8, 'FURGÕES 1'),
(9, 'FURGÕES PEQUENOS'),
(13, 'GRANDCAB');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`id`, `nome`, `cpf`, `telefone`, `endereco`) VALUES
(9, 'Paulo', '789-987-654-88', '19 99988-7766', 'Nova Odessa/SP'),
(10, 'Anderson Soares dos Passos', '378.760.498-77', '1991337585', 'Rua Maria Aparecida de Camargo Romão, 315, bloco 0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionarios`
--

CREATE TABLE `tb_funcionarios` (
  `id` int(11) NOT NULL,
  `funcionario` varchar(30) NOT NULL,
  `cargo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_funcionarios`
--

INSERT INTO `tb_funcionarios` (`id`, `funcionario`, `cargo`) VALUES
(4, 'Anderson Passos', 'Gerente'),
(5, 'Paulo', 'Vendedor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_locacao`
--

CREATE TABLE `tb_locacao` (
  `id` int(11) NOT NULL,
  `cliente` varchar(30) NOT NULL,
  `veiculo` varchar(30) NOT NULL,
  `retira` date NOT NULL,
  `devolucao` date NOT NULL,
  `preco` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_locacao`
--

INSERT INTO `tb_locacao` (`id`, `cliente`, `veiculo`, `retira`, `devolucao`, `preco`, `total`) VALUES
(15, 'Anderson', 'Pálio', '2019-12-17', '2019-12-19', 50, 100),
(16, 'Paulo', 'f100', '2019-12-17', '2019-12-21', 150, 600),
(17, 'Paulo', 'Ka', '2020-01-14', '2020-01-20', 120, 0),
(18, 'Paulo', 'Grand Siena', '2020-01-14', '2020-01-16', 100, 200),
(19, 'Anderson Soares dos Passos', 'Voyahe', '2020-01-13', '2020-01-15', 100, 200);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `usuario`, `senha`) VALUES
(5, 'Pedro', '123'),
(6, 'Anderson', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_veiculos`
--

CREATE TABLE `tb_veiculos` (
  `id` int(11) NOT NULL,
  `placa` varchar(8) NOT NULL,
  `fabricante` varchar(50) NOT NULL,
  `modelo` varchar(15) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `cor` varchar(15) NOT NULL,
  `passageiros` int(2) NOT NULL,
  `arcondicionado` varchar(3) NOT NULL,
  `cambio` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_veiculos`
--

INSERT INTO `tb_veiculos` (`id`, `placa`, `fabricante`, `modelo`, `categoria`, `cor`, `passageiros`, `arcondicionado`, `cambio`) VALUES
(3, 'aaa-8787', 'Fiat', 'Grand Siena', 'SEDAN', 'Branco', 5, 'Sim', 'Manual'),
(5, 'FUI-0007', 'Ford', 'Ka', 'SE', 'Branco', 5, 'Sim', 'Automâtico'),
(7, 'ERT-8735', 'Renault', 'Kangoo', 'SEDAN', 'Branco', 2, 'Não', 'Manual'),
(8, 'FUI-0007', 'Ford', 'Fusion', 'SEDAN', 'Preto', 5, 'Sim', 'Automático');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_categorias`
--
ALTER TABLE `tb_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_funcionarios`
--
ALTER TABLE `tb_funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_locacao`
--
ALTER TABLE `tb_locacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_veiculos`
--
ALTER TABLE `tb_veiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_categorias`
--
ALTER TABLE `tb_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_funcionarios`
--
ALTER TABLE `tb_funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_locacao`
--
ALTER TABLE `tb_locacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_veiculos`
--
ALTER TABLE `tb_veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
