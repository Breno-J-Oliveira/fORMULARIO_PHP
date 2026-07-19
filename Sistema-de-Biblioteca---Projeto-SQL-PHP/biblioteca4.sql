-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17/10/2025 às 11:13
-- Versão do servidor: 8.0.40
-- Versão do PHP: 8.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca4`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `emprestimos`
--

CREATE TABLE `emprestimos` (
  `id_emprestimos` int NOT NULL,
  `id_usuario` int NOT NULL,
  `id_livro` int NOT NULL,
  `dataemprestimos` date DEFAULT NULL,
  `datadedevolucao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `emprestimos`
--

INSERT INTO `emprestimos` (`id_emprestimos`, `id_usuario`, `id_livro`, `dataemprestimos`, `datadedevolucao`) VALUES
(1, 1, 2, '2025-10-10', '2025-10-20'),
(2, 2, 4, '2025-10-11', '2025-10-25'),
(3, 3, 1, '2025-10-12', '2025-10-30');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `id_livro` int NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `autor` varchar(25) DEFAULT NULL,
  `genero` varchar(25) DEFAULT NULL,
  `postagem` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id_livro`, `titulo`, `autor`, `genero`, `postagem`) VALUES
(1, 'Adrenocromo', 'Dsluqui', 'Ficção', '2025-10-16'),
(2, 'Luzitas', 'diogocasacomigo', 'romance', '1980-07-18'),
(3, 'A tropa da ak', 'MaiconKuster', 'Ficção', '2001-02-20'),
(4, 'Olavo de carvalho', 'olavo de carvalho', 'politica', '1980-06-20'),
(5, 'Cancer', 'Zaneti', 'Medicina', '2025-10-16');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL,
  `nome` varchar(25) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tipousuario` enum('aluno','professor','funcionario') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `tipousuario`) VALUES
(1, 'clebin', 'xiaomimatadordeporco@gmail.com', 'aluno'),
(2, 'Gordão da xj', 'gustavolanches@gmail.com', 'funcionario'),
(3, 'goatlipe', 'deusdetodasasrealidadespossiveis@gmail.com', 'professor');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id_emprestimos`);

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id_livro`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id_emprestimos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id_livro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
