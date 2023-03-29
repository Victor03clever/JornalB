-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Mar-2023 às 17:41
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jornal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE `atividade` (
  `id` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `subtema` varchar(255) NOT NULL,
  `descricao` longtext NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` varchar(220) NOT NULL,
  `organizador` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aviso`
--

CREATE TABLE `aviso` (
  `id` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `descricao` longtext NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `publicado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aviso`
--

INSERT INTO `aviso` (`id`, `tema`, `descricao`, `create_at`, `publicado`) VALUES
(1, 'Reunião dos Pais', 'A direção do blablabla vem por este meio convocar o senhor blablabla a comparecer na blablabla que será no dia blabla', '2023-03-27 15:42:44', '2023-03-27'),
(2, 'Reunião dos Pais', 'A direção do blablabla vem por este meio convocar o senhor blablabla a comparecer na blablabla que será no dia bla', '2023-03-27 15:45:03', '2023-03-27'),
(3, 'Avaliações', 'A direção informa que nos dias blabla começarão as avaliações', '2023-03-27 15:47:41', '2023-03-27'),
(6, 'Victor Louren', 'Programando com raiva', '2023-03-27 17:11:38', '2023-03-30'),
(7, 'Victor Louren', 'Programando com raiva', '2023-03-27 17:15:12', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `numero`, `assunto`, `mensagem`) VALUES
(1, 'Victor Clever', 938295867, 'Today', 'Teste my aplication');

-- --------------------------------------------------------

--
-- Estrutura da tabela `honra`
--

CREATE TABLE `honra` (
  `id` int(11) NOT NULL,
  `path` varchar(225) NOT NULL,
  `nome` varchar(225) NOT NULL,
  `curso` varchar(225) NOT NULL,
  `media` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `descricao` longtext NOT NULL,
  `img` varchar(220) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `total`
--

CREATE TABLE `total` (
  `id` int(11) NOT NULL,
  `aluno` varchar(225) NOT NULL,
  `prof` varchar(220) NOT NULL,
  `salas` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `total`
--

INSERT INTO `total` (`id`, `aluno`, `prof`, `salas`) VALUES
(1, '5000', '5000', '100');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `senha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `senha`) VALUES
(1, 'Victor', '$2y$10$Oiafp/GLmv.ue5FG5N0JIupvDgl0Y6ytcVTU5zRYzrrBt/aV8x.Tq');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `aviso`
--
ALTER TABLE `aviso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividade`
--
ALTER TABLE `atividade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `aviso`
--
ALTER TABLE `aviso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `total`
--
ALTER TABLE `total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
