-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Fev-2019 às 16:53
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

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
-- Estrutura da tabela `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `inscription` date NOT NULL,
  `mother` varchar(255) DEFAULT NULL,
  `father` varchar(255) DEFAULT NULL,
  `street` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `neighborhood` varchar(255) NOT NULL,
  `telephone` bigint(20) NOT NULL,
  `telephone2` bigint(11) DEFAULT NULL,
  `contact` varchar(255) DEFAULT ' ',
  `destination` varchar(255) DEFAULT ' ',
  `situation` varchar(255) DEFAULT ' '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `birth`, `inscription`, `mother`, `father`, `street`, `number`, `neighborhood`, `telephone`, `telephone2`, `contact`, `destination`, `situation`) VALUES
(23, 'Aluno1', '2012-03-12', '2019-02-01', 'Leticia Oliveira', 'Ricardo Pereira', 'R. dos Ipês', 23, 'Santo Antônio', 23345674253, 3424235, 'tel', 'CEMEAI', 'Confirmado'),
(24, 'Júlio dos Santos Pelúcio oooooooooooooooooooooooooooo', '1996-02-27', '2019-01-30', 'Francisca Isabel dos Santos', 'Bartolomeu Pereira Pelúcio', 'Olímpio Pereira', 288, 'Centro', 12324564432, 534324533, '', 'CEMEAI', ''),
(25, 'Pietro Candido', '2018-07-10', '2019-02-11', 'Marta Machado', 'Donizeti Ferreira', 'ABC', 10, 'Jardim', 345334453, 321324445, ' ', ' ', ' '),
(26, 'Maria Luiza Ferreira dos Santos', '2017-05-23', '2018-11-13', 'Gloria das Dores', 'José Aldo Ferreira', 'Flores', 33, 'Novo Milênio', 232432143, 321343242, ' ', ' ', ' '),
(27, 'Pietro Candido', '2018-07-10', '2019-02-11', 'Marta Machado', 'Donizeti Ferreira', 'ABC', 10, 'Jardim', 345334453, 321324445, ' ', ' ', ' '),
(28, 'Maria Luiza Ferreira dos Santos', '2017-05-23', '2018-11-13', 'Gloria das Dores', 'José Aldo Ferreira', 'Flores', 33, 'Novo Milênio', 232432143, 321343242, ' ', ' ', ' '),
(29, 'Pietro Candido', '2018-07-10', '2019-02-11', 'Marta Machado', 'Donizeti Ferreira', 'ABC', 10, 'Jardim', 345334453, 321324445, ' ', ' ', ' '),
(30, 'Maria Luiza Ferreira dos Santos', '2017-05-23', '2018-11-13', 'Gloria das Dores', 'José Aldo Ferreira', 'Flores', 33, 'Novo Milênio', 232432143, 321343242, ' ', ' ', ' '),
(32, 'Maria Luiza Ferreira dos Santos', '2017-05-23', '2018-11-13', 'Gloria das Dores', 'José Aldo Ferreira', 'Flores', 33, 'Novo Milênio', 232432143, 321343242, ' ', ' ', ' '),
(33, 'Aluno 3', '2016-11-16', '2019-02-28', 'Mãe', 'Pai', 'rua teste', 98, 'teste bairro', 88766554546, 88765544356, '', 'CEMEAI', ''),
(34, 'Aluno 4', '2015-11-11', '2019-02-13', 'rgrr', 'wqerrrge', 'rua teste 1', 34, 'teste bairro 3', 34432355655, 45554635465, '', 'CEMEAI', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`) VALUES
(1, 'Administrador', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(4, 'Carina', 'carina@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
