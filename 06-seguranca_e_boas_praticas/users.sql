-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Abr-2021 às 17:06
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fullstackphp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `document` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `document`) VALUES
(1, 'Robson', 'Santos', 'robson1@email.com.br', '', NULL),
(2, 'Alexandre', 'Santos', 'alexandre27@email.com.br', '', NULL),
(3, 'Willian', 'Santos', 'willian28@email.com.br', '', NULL),
(4, 'Eleno', 'Santos', 'eleno29@email.com.br', '', NULL),
(5, 'Lucas', 'Santos', 'lucas30@email.com.br', '', NULL),
(6, 'Mateus', 'Santos', 'mateus31@email.com.br', '', NULL),
(7, 'João', 'Santos', 'joão32@email.com.br', '', NULL),
(8, 'Felipe', 'Santos', 'felipe33@email.com.br', '', NULL),
(9, 'Anderson', 'Santos', 'anderson34@email.com.br', '', NULL),
(10, 'Elton', 'Santos', 'elton35@email.com.br', '', NULL),
(11, 'Leonardo', 'Santos', 'leonardo36@email.com.br', '', NULL),
(12, 'Regilton', 'Santos', 'regilton37@email.com.br', '', NULL),
(13, 'Sidney', 'Santos', 'sidney38@email.com.br', '', NULL),
(14, 'Lourival', 'Santos', 'lourival39@email.com.br', '', NULL),
(15, 'Henrique', 'Santos', 'henrique40@email.com.br', '', NULL),
(16, 'Daniel', 'Santos', 'daniel41@email.com.br', '', NULL),
(17, 'Pedro', 'Santos', 'pedro42@email.com.br', '', NULL),
(18, 'Andre Roberto', 'Santos', 'andre roberto43@email.com.br', '', NULL),
(19, 'Ozeias', 'Santos', 'ozeias44@email.com.br', '', NULL),
(20, 'Arnobio', 'Santos', 'arnobio45@email.com.br', '', NULL),
(21, 'Roniel', 'Santos', 'roniel46@email.com.br', '', NULL),
(22, 'Caíque', 'Santos', 'caíque47@email.com.br', '', NULL),
(23, 'Lucas', 'Santos', 'lucas48@email.com.br', '', NULL),
(24, 'Francisco', 'Santos', 'francisco49@email.com.br', '', NULL),
(25, 'Cristian', 'Santos', 'cristian50@email.com.br', '', NULL),
(26, 'Eduardo', 'Santos', 'eduardo51@email.com.br', '', NULL),
(27, 'Rodrigo', 'Santos', 'rodrigo52@email.com.br', '', NULL),
(28, 'Raphael', 'Santos', 'raphael53@email.com.br', '', NULL),
(29, 'Jose', 'Santos', 'jose54@email.com.br', '', NULL),
(30, 'Rodrigo', 'Santos', 'rodrigo55@email.com.br', '', NULL),
(31, 'Diego', 'Santos', 'diego56@email.com.br', '', NULL),
(32, 'Alexandre', 'Santos', 'alexandre57@email.com.br', '', NULL),
(33, 'Edimar', 'Santos', 'edimar58@email.com.br', '', NULL),
(34, 'Jackell', 'Santos', 'jackell59@email.com.br', '', NULL),
(35, 'Luis', 'Santos', 'luis60@email.com.br', '', NULL),
(36, 'Lucas', 'Santos', 'lucas61@email.com.br', '', NULL),
(37, 'Wander', 'Santos', 'wander62@email.com.br', '', NULL),
(38, 'Tairo', 'Santos', 'tairo63@email.com.br', '', NULL),
(39, 'Rubens', 'Santos', 'rubens64@email.com.br', '', NULL),
(40, 'Hugo', 'Santos', 'hugo65@email.com.br', '', NULL),
(41, 'Gustavo', 'Santos', 'gustavo66@email.com.br', '', NULL),
(42, 'Paulo', 'Santos', 'paulo67@email.com.br', '', NULL),
(43, 'Rodrigo', 'Santos', 'rodrigo68@email.com.br', '', NULL),
(44, 'Denio', 'Santos', 'denio69@email.com.br', '', NULL),
(45, 'Idalmir', 'Santos', 'idalmir70@email.com.br', '', NULL),
(46, 'Ataide', 'Santos', 'ataide71@email.com.br', '', NULL),
(47, 'Luiz', 'Santos', 'luiz72@email.com.br', '', NULL),
(48, 'Luciano', 'Santos', 'luciano73@email.com.br', '', NULL),
(49, 'Adir', 'Santos', 'adir74@email.com.br', '', NULL),
(50, 'Tainan', 'Santos', 'tainan75@email.com.br', '', NULL),
(51, 'Gustavo', 'Web', NULL, '', NULL),
(52, 'Gustavo', 'Web', NULL, '', NULL),
(53, 'Gustavo', 'Web', NULL, '', NULL),
(54, 'Gustavo', 'Web', NULL, '', NULL),
(55, 'Gustavo', 'Web', NULL, '', NULL),
(56, 'Gustavo', 'Web', NULL, '', NULL),
(57, 'Gustavo', 'Web', NULL, '', NULL),
(58, 'Gustavo', 'Web', NULL, '', NULL),
(59, 'Gah', 'Morandi', NULL, '', NULL),
(60, 'Gustavo', 'Web', NULL, '', NULL),
(61, 'Gustavo', 'Web', NULL, '', NULL),
(62, 'Gah', 'Morandi', NULL, '', NULL),
(63, 'Kaue', 'Cardoso', NULL, '', NULL),
(64, 'Gustavo', 'Web', NULL, '', NULL),
(65, 'Gustavo', 'Web', NULL, '', NULL),
(66, 'Gah', 'Morandi', NULL, '', NULL),
(67, 'Kaue', 'Cardoso', NULL, '', NULL),
(68, 'Gustavo', 'Web', NULL, '', NULL),
(69, 'Gustavo', 'Web', NULL, '', NULL),
(70, 'Gah', 'Morandi', NULL, '', NULL),
(71, 'Kaue', 'Cardoso', NULL, '', NULL),
(72, 'Gustavo', 'Web', NULL, '', NULL),
(73, 'Gustavo', 'Web', NULL, '', NULL),
(74, 'Gah', 'Morandi', NULL, '', NULL),
(75, 'Kaue', 'Cardoso', NULL, '', NULL),
(76, 'Gustavo', 'Web', NULL, '', NULL),
(77, 'Gustavo', 'Web', NULL, '', NULL),
(78, 'Gah', 'Morandi', NULL, '', NULL),
(79, 'Kaue', 'Cardoso', NULL, '', NULL),
(80, 'Gustavo', 'Web', NULL, '', NULL),
(81, 'Gustavo', 'Web', NULL, '', NULL),
(82, 'Gah', 'Morandi', NULL, '', NULL),
(83, 'Kaue', 'Cardoso', NULL, '', NULL),
(84, 'Gustavo', 'Web', NULL, '', NULL),
(85, 'Gustavo', 'Web', NULL, '', NULL),
(86, 'Gah', 'Morandi', NULL, '', NULL),
(87, 'Kaue', 'Cardoso', NULL, '', NULL),
(88, 'Gustavo', 'Web', NULL, '', NULL),
(89, 'Gustavo', 'Web', NULL, '', NULL),
(90, 'Gah', 'Morandi', NULL, '', NULL),
(91, 'Kaue', 'Cardoso', NULL, '', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
