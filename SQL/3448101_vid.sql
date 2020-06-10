-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb25.awardspace.net
-- Generation Time: 10-Jun-2020 às 20:39
-- Versão do servidor: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3448101_vid`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `nationality` varchar(500) NOT NULL,
  `profession` varchar(500) NOT NULL,
  `number` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `date`, `nationality`, `profession`, `number`, `email`, `password`) VALUES
(79, 'isadora', '1997-06-12', 'jwuwidji', 'jeieji', '033', 'isadoraferrao9@gmail.com', 'MTIz'),
(80, 'sherlon', '1997-06-12', 'brazilian', 'scientist', '033', 'isadora@gmail.com', 'MTIz'),
(78, 'isadora', '1997-06-12', 'brazilian', 'efjiefji', '033', '123@gmail.com', 'MTIz'),
(77, 'Charles Severo Cenci', '1997-12-03', 'Brasil', 'Civil Enginner', '03800222060', 'charlesscenci@gmail.com', 'Q2hAcmxlczk3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
