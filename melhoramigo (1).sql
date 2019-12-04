-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2019 às 18:55
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `melhoramigo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios`
--

CREATE TABLE `anuncios` (
  `id` int(11) NOT NULL,
  `foto` varchar(256) COLLATE utf8_bin NOT NULL,
  `descricao` text COLLATE utf8_bin NOT NULL,
  `dt_inicio` date NOT NULL,
  `dt_fim` date NOT NULL,
  `status` int(11) NOT NULL,
  `titulo` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `anuncios`
--

INSERT INTO `anuncios` (`id`, `foto`, `descricao`, `dt_inicio`, `dt_fim`, `status`, `titulo`) VALUES
(1, 'img/e1.jpg', 'Adocao de filhotes 28/11', '0000-00-00', '0000-00-00', 1, '04/12 - Nao Perca Proximo Sabado'),
(2, 'img/e2.jpg', 'Adestramento. Aulao com professionais. 08/01', '0000-00-00', '0000-00-00', 1, '05/12 - Corra Eh amanha!'),
(3, 'img/e3.jpg', 'Desfile Caominhada. Traga seu pet. 02/12', '0000-00-00', '0000-00-00', 1, '06/12 - Dezembro dos Cachorros'),
(4, 'img/e4.jpg', 'Curso de cuidados basicos para animais.', '0000-00-00', '0000-00-00', 1, '07/12 - Dog Fest'),
(5, 'img/e5.jpg', 'Banho e tosa gratuito. 10/12 - saiba mais', '0000-00-00', '0000-00-00', 1, '08/12 - Noite dos Cachorros'),
(6, 'img/e6.jpg', 'Encontro. Dia no parque. Sol e diversao garantida.', '0000-00-00', '0000-00-00', 1, '09/12 - Caominhada'),
(7, 'img/e7.jpg', 'Depoimento de adotantes. 20/12', '0000-00-00', '0000-00-00', 1, '15/12 - Inauguracao Doghouse'),
(8, 'img/e8.jpg', 'Metodos para tratar pequenas molestias - O curso acontecera no dia 20/12/219.', '0000-00-00', '0000-00-00', 1, '10/12 - Utilidade Publica'),
(10, 'img/e10.jpg', 'Castracao Solidaria 21/02', '0000-00-00', '0000-00-00', 1, '11/12 - Leve seu Animal'),
(11, 'img/e11.jpg', 'Alimentacao natural. Os beneficios de uma alimentacao saudavel - 30/12/2019', '0000-00-00', '0000-00-00', 0, '12/12 - Nao Perca'),
(12, 'img/e12.jpg', 'Banho e tosa ajudando os animais!!!!', '0000-00-00', '0000-00-00', 1, '13/12 - Cherosinho'),
(13, 'img/e13.jpg', 'Cuidados para Transportar Animais.', '0000-00-00', '0000-00-00', 0, '14/12 - Cuide bem do Seu Cao'),
(14, 'img/e14.jpg', 'Racao para todos. Compre uma racao e doe outra para um amigo.', '0000-00-00', '0000-00-00', 1, '16/12 - Ajude');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `idposts` int(11) NOT NULL,
  `foto` varchar(256) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(256) COLLATE utf8_bin NOT NULL,
  `dt_criacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_fim` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `nomeanimal` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`idposts`, `foto`, `descricao`, `dt_criacao`, `dt_fim`, `id_user`, `nomeanimal`) VALUES
(1, 'img/f1.jpg', 'Lindo animal disponivel para adocao. Dois anos, castrado, vacinado vermifugado', '2019-11-05 20:05:29', '2019-11-20', 1, 'Lola'),
(2, 'img/f2.jpg', 'Animal quirido procura casa imediatamente. Grande Porte. Foi abandonado', '2019-11-07 20:05:29', '2019-11-30', 1, 'Jimmy'),
(3, 'img/f3.jpg', 'Animal quirido procura casa imediatamente. Grande Porte. Foi abandonado', '2019-11-21 20:05:29', '2020-05-30', 2, 'Nikita'),
(4, 'img/f4.jpg', 'Animal quirido procura casa imediatamente. Grande Porte. Foi abandonado', '2019-11-21 20:05:29', '2019-12-03', 2, 'Thor'),
(5, 'img/f5.jpg', 'Animal quirido procura casa imediatamente. Grande Porte. Foi abandonado', '2019-11-21 20:05:29', '2019-12-05', 2, 'Bolinha'),
(6, 'img/f6.jpg', 'Animal quirido procura casa imediatamente. Grande Porte. Foi abandonado', '2019-11-21 20:05:29', '2019-12-10', 2, 'Jade'),
(7, 'img/f7.jpg', 'Animal quirido procura casa imediatamente. Grande Porte. Foi abandonado', '2019-11-21 20:05:29', '2019-12-07', 2, 'Max'),
(8, 'img/f8.jpg', 'Animal quirido procura casa imediatamente. Grande Porte. Foi abandonado', '2019-11-21 20:05:29', '2019-12-12', 2, 'Clarisse'),
(9, 'img/f9.jpg', 'Animal quirido procura casa imediatamente. Grande Porte. Foi abandonado', '2019-11-21 20:05:29', '2019-12-13', 2, 'Babi'),
(10, 'm.jpg', 'yfytfyfytf', '2019-12-02 16:48:38', '0000-00-00', 1, 'nomds'),
(11, 'm.jpg', 'yfytfyfytf', '2019-12-02 16:49:02', '2019-12-10', 1, 'nomds'),
(12, 'd.jpg', 'afasfafa', '2019-12-02 17:06:53', '0000-00-00', 1, 'sdsd'),
(13, 'sdthftg', 'sdrcgwrergcwv', '2019-12-02 17:07:11', '0000-00-00', 1, 'sdsd'),
(14, 'img/20191202211833e10.jpg', 'Teste de envio', '2019-12-02 17:18:33', '0000-00-00', 1, 'sdsd'),
(15, 'img/20191202234631dog.jpg', 'teste novamente', '2019-12-02 19:46:31', '0000-00-00', 1, 'sdsd'),
(16, 'img/20191202235247e2.jpg', 'Esta disponivel', '2019-12-02 19:52:47', '0000-00-00', 1, 'Jimmy'),
(17, 'img/20191203000448e3.jpg', 'Linda poodle para adocao', '2019-12-02 20:04:48', '0000-00-00', 1, 'Lili'),
(18, 'img/2019120300114720191203001103dog2.jpg', 'erfy', '2019-12-02 20:11:47', '0000-00-00', 3, 'serfeftyrterfhg'),
(19, 'img/20191203141423e5.jpg', 'Maia esta para adocao ASAP', '2019-12-03 10:14:23', '0000-00-00', 1, 'Maya');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_bin NOT NULL,
  `email` varchar(60) COLLATE utf8_bin NOT NULL,
  `password` varchar(45) COLLATE utf8_bin NOT NULL,
  `foto` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`idusers`, `nome`, `email`, `password`, `foto`) VALUES
(1, 'Felipe', 'felipe@drechsler', '123456', 'img/u1.jpg'),
(2, 'Speroni', 'rafael@speroni', '123456', 'img/u2.jpg'),
(3, 'Cecilia', 'cecilia@mariangeles', '123456', 'img/u12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`idposts`),
  ADD KEY `fk_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `idposts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
