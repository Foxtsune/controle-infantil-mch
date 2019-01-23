-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jan-2019 às 20:42
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educacao_infantil_mch`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `inscription` date NOT NULL,
  `Mother` varchar(255) DEFAULT NULL,
  `Father` varchar(255) DEFAULT NULL,
  `street` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `neighborhood` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `telephone2` int(11) DEFAULT NULL,
  `contact` tinyint(4) NOT NULL,
  `destination` tinyint(4) NOT NULL,
  `situation` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `birth`, `inscription`, `Mother`, `Father`, `street`, `number`, `neighborhood`, `telephone`, `telephone2`, `contact`, `destination`, `situation`) VALUES
(2, 'Júlio dos Santos Pelúcio', '1996-02-27', '2019-01-22', 'Francisca Isabel dos Santos', 'Bartolomeu Pereira Pelúcio', 'Olímpio Pereira', 288, 'Centro', 987037999, 32958700, 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
