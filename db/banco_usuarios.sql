-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 29/06/2025 às 18:11
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `quiz_animal`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` enum('Masculino','Feminino') NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `resultado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `idade`, `sexo`, `data_cadastro`, `resultado`) VALUES
(2, 'Mayara', 35, 'Feminino', '2025-06-24 00:50:49', 'coruja'),
(3, 'Maria', 15, 'Feminino', '2025-06-24 01:07:17', 'leao'),
(4, 'João', 45, 'Masculino', '2025-06-24 01:10:19', 'leao'),
(5, 'Gabriel', 35, 'Masculino', '2025-06-24 02:11:39', 'golfinho'),
(6, 'Luna', 25, 'Feminino', '2025-06-24 02:15:01', 'golfinho'),
(8, 'Ana', 60, 'Feminino', '2025-06-26 22:37:03', 'tartaruga'),
(9, 'Pedro', 25, 'Masculino', '2025-06-26 23:13:56', 'leao'),
(11, 'Mateus', 35, 'Masculino', '2025-06-29 16:04:54', 'coruja'),
(12, 'Carlos', 60, 'Masculino', '2025-06-29 16:05:45', 'tartaruga'),
(13, 'Sara', 25, 'Feminino', '2025-06-29 16:06:36', 'leao');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
