-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 07-Set-2020 às 00:14
-- Versão do servidor: 10.3.23-MariaDB-cll-lve
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hagile_angecyhagile`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `hagilewp_users`
--

CREATE TABLE `hagilewp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 0,
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `hagilewp_users`
--

INSERT INTO `hagilewp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'devhagile', '$P$B/qxwaQJLyO1mzDsOW9u7Chn4ATI9y.', 'devhagile', 'projetos@hagile.com.br', 'https://hagile.com.br/projetos/hagilewp/', '2020-08-05 13:42:34', '', 0, 'devhagile'),
(3, 'devhagile2', '$P$Bi.XiXUCPvXw/PyzN6cQRg6dp/LD030', 'devhagile2', 'romullo.santos@hagile.com.br', '', '2020-08-20 13:25:14', '1597929915:$P$B6o8dcY1770ZTqJF7oXK08EDB4XlHd.', 0, 'devhagile2'),
(4, 'ruandev', '$P$BCHm4SS4BIO0jhDQmr8Wkbb889QZN60', 'ruandev', 'ruanmbramalho@gmail.com', '', '2020-08-20 14:08:26', '', 0, 'ruandev');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `hagilewp_users`
--
ALTER TABLE `hagilewp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `hagilewp_users`
--
ALTER TABLE `hagilewp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
