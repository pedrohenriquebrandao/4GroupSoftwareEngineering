-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 22-Jul-2018 às 01:50
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colheitafeliz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_administrador`
--

DROP TABLE IF EXISTS `adm_administrador`;
CREATE TABLE IF NOT EXISTS `adm_administrador` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_punicao`
--

DROP TABLE IF EXISTS `adm_punicao`;
CREATE TABLE IF NOT EXISTS `adm_punicao` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email_usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_administrador` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_inicial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_final` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `adm_punicao`
--

INSERT INTO `adm_punicao` (`id`, `email_usuario`, `email_administrador`, `tipo`, `data_inicial`, `data_final`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Nettie Heaney', 'robyn.ruecker@gleason.biz', 'provident', '2008-11-11', '2004-03-23', 'Vitae tenetur quia harum.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(2, 'Charles Borer PhD', 'blanche.krajcik@gmail.com', 'omnis', '1981-11-02', '1971-01-30', 'Sint quaerat aut sunt.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(3, 'Darron Christiansen', 'garrick.daniel@connelly.com', 'doloribus', '2002-01-25', '2014-02-13', 'Ut nihil reprehenderit in quod vitae fugit.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(4, 'Eugene Schaefer', 'koelpin.tatum@hotmail.com', 'sit', '2000-03-06', '1979-05-24', 'Accusantium corrupti consequatur atque nostrum amet rerum voluptas.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(5, 'Jalyn Greenfelder', 'horace.casper@crist.com', 'similique', '2014-07-16', '1989-08-25', 'Omnis accusamus autem nemo maxime praesentium ut libero.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(6, 'Robbie Beahan Sr.', 'walter.vandervort@donnelly.com', 'est', '1971-08-17', '1989-08-12', 'Aperiam aut commodi voluptatem modi id.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(7, 'Lexi Schowalter', 'kovacek.vicky@kilback.com', 'voluptatibus', '1977-12-25', '1985-10-15', 'Modi reiciendis quae explicabo architecto.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(8, 'Orlo Bergstrom', 'conn.vicky@wiza.com', 'eveniet', '1985-04-11', '1985-07-09', 'Veritatis rerum quaerat ab voluptatem.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(9, 'Neil McLaughlin V', 'jschmeler@von.com', 'blanditiis', '1999-10-29', '1975-01-27', 'Qui qui illum consequuntur ut est non.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(10, 'Dr. Evelyn Kohler PhD', 'francis.altenwerth@boyle.com', 'omnis', '1976-05-27', '1982-12-02', 'Est sapiente ut ullam dolor sequi ratione.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(11, 'Mercedes Gleason MD', 'kelley34@hotmail.com', 'eum', '2012-05-21', '1971-04-29', 'Occaecati adipisci iure repellendus incidunt voluptatem.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(12, 'Imogene Wisoky', 'glen26@considine.biz', 'et', '1985-09-06', '2006-05-10', 'Dolor cupiditate temporibus exercitationem eaque.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(13, 'Miss Eve O\'Hara', 'eschmeler@monahan.com', 'dolor', '1988-02-13', '2017-12-26', 'Qui omnis eligendi autem error unde.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(14, 'Ms. Maximillia Hickle', 'wkulas@hotmail.com', 'aut', '2005-01-14', '2004-07-10', 'Eaque impedit est in autem.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(15, 'Demond Champlin I', 'elisha54@barrows.info', 'libero', '1985-06-29', '1971-07-03', 'Totam sapiente expedita eos vitae expedita.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(16, 'Nels Bednar', 'blick.karl@konopelski.net', 'voluptas', '2006-05-29', '2005-12-28', 'Voluptatem quia non eveniet quidem.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(17, 'Ariel Klein II', 'hstokes@mann.com', 'aut', '1977-02-12', '1976-09-26', 'Ut non molestiae tempora.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(18, 'Cleora Bashirian', 'kemmer.isac@jacobson.biz', 'quia', '1992-09-11', '1978-12-30', 'Dolor rem quam quia odit libero tempore nesciunt.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(19, 'Isabel Kertzmann', 'justina.mueller@funk.com', 'aut', '1990-10-12', '1991-01-12', 'Autem voluptatem eius reiciendis eum reprehenderit aut molestias.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(20, 'Dr. Amalia Gutmann', 'tillman.corrine@yahoo.com', 'necessitatibus', '1971-09-19', '1975-03-25', 'Nihil autem dolorem nihil dolores omnis.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(21, 'Olen Stanton DVM', 'adriel.osinski@kris.com', 'autem', '2015-02-21', '2007-09-30', 'Expedita ut occaecati tenetur et.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(22, 'Avery Medhurst Jr.', 'clementine.berge@hotmail.com', 'ad', '2005-02-13', '1988-07-24', 'Nobis recusandae harum voluptatem.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(23, 'Frankie Waelchi', 'bechtelar.lonie@wilderman.com', 'cumque', '2005-10-28', '1970-09-28', 'Ut dolor et maxime.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(24, 'Axel Jaskolski', 'schinner.barbara@gmail.com', 'corrupti', '2011-07-24', '2018-03-14', 'Sed temporibus expedita quae ullam similique.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(25, 'Karina Paucek', 'demarco.stokes@huel.org', 'vero', '2015-10-19', '2017-03-07', 'Voluptas voluptas veritatis officia facilis voluptatem reiciendis est.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(26, 'Jaron Pagac', 'vkirlin@hotmail.com', 'sequi', '1976-09-07', '1997-09-14', 'Illo asperiores et debitis sed voluptas.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(27, 'Dr. Frances Pfeffer PhD', 'rodriguez.jolie@hotmail.com', 'quod', '1984-09-12', '1971-07-30', 'Velit placeat id fugiat culpa.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(28, 'Jamison Emard', 'jermain72@yahoo.com', 'dolorem', '2006-11-18', '2008-04-29', 'Quae necessitatibus veniam incidunt asperiores nostrum quas cupiditate harum.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(29, 'Prof. Frank Mann', 'morissette.asa@schultz.com', 'eum', '2016-12-05', '1971-06-08', 'Voluptas est voluptas suscipit aspernatur praesentium.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(30, 'Mr. Rusty Tillman', 'agreen@weissnat.com', 'quos', '2006-05-10', '2001-01-15', 'Hic dicta quia explicabo iste.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(31, 'Vance Pacocha', 'liana47@gmail.com', 'reiciendis', '2005-07-05', '1992-07-08', 'Excepturi officiis praesentium aut minima ipsum magnam.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(32, 'Emanuel Block', 'caitlyn.purdy@hotmail.com', 'qui', '2017-11-27', '1979-11-26', 'Deserunt quo omnis eum commodi laudantium a reprehenderit delectus.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(33, 'Prof. Nigel Robel', 'jordi04@yahoo.com', 'maiores', '1970-12-25', '2000-07-05', 'Fugit veniam rerum libero facere.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(34, 'Willard Stroman DVM', 'okoepp@yahoo.com', 'et', '1973-05-06', '1972-07-24', 'Et quaerat architecto eum.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(35, 'Coby Schowalter', 'will.alanna@bartoletti.com', 'qui', '1992-07-22', '1998-12-26', 'Quia pariatur itaque aliquid quia dicta voluptate nostrum.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(36, 'Marty Turner', 'buck.mohr@hotmail.com', 'et', '2014-11-15', '1990-04-03', 'Sequi error molestiae quos laudantium ut.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(37, 'Dominic McCullough PhD', 'quigley.ofelia@von.com', 'accusantium', '1973-11-12', '1997-12-16', 'Repudiandae unde quia et ratione tempore.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(38, 'Reba Mitchell', 'kimberly67@hotmail.com', 'et', '2013-07-07', '1973-09-07', 'Pariatur aspernatur voluptate iure non ut.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(39, 'Elouise Considine', 'rwiegand@hayes.com', 'illo', '2003-03-24', '1974-10-06', 'Rerum doloribus perferendis exercitationem laboriosam quidem aut.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(40, 'Dr. Orin Reichert V', 'chris62@yahoo.com', 'inventore', '1974-01-23', '2013-12-26', 'Omnis odit esse quod voluptatem beatae.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(41, 'Jerod Durgan', 'deckow.lucas@hotmail.com', 'minima', '2014-02-21', '1987-08-14', 'Aut ducimus modi culpa voluptatem atque ipsum dolore.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(42, 'Ms. Roselyn Labadie V', 'bergnaum.joesph@yahoo.com', 'sequi', '1999-08-05', '2012-01-29', 'Deleniti modi impedit exercitationem mollitia.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(43, 'Hipolito Anderson', 'donnie12@barrows.org', 'consectetur', '2012-08-10', '1971-07-27', 'Neque eaque voluptas suscipit ipsam dolore sunt quia.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(44, 'Mr. Markus Bradtke Jr.', 'showe@volkman.com', 'autem', '1990-07-07', '1990-12-12', 'Recusandae et officiis necessitatibus aperiam quia at facere.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(45, 'Berta Kunze', 'kschinner@kuvalis.com', 'exercitationem', '1995-10-03', '1985-09-24', 'Qui ducimus voluptas quia aut doloremque fugit nam.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(46, 'Brandyn Stark III', 'douglas.daphnee@cronin.com', 'et', '1974-07-15', '1991-08-12', 'Aliquam quisquam omnis fugit.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(47, 'Fermin Emmerich', 'aletha88@hotmail.com', 'ut', '2016-05-04', '1973-01-03', 'Sunt nihil et minima et id.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(48, 'Jarret Feest', 'walker.claudie@pfannerstill.com', 'sequi', '1994-04-28', '2011-07-21', 'Dolorem itaque suscipit est nostrum.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(49, 'Letha O\'Reilly II', 'ycummerata@conn.info', 'dignissimos', '2017-08-21', '2008-01-03', 'Eaque rerum eum architecto.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(50, 'Mr. Freddy Cartwright', 'terrance.macejkovic@abshire.com', 'fuga', '1982-01-05', '1982-05-14', 'Velit fugit quasi odit molestiae sint ut quo dignissimos.', '2018-07-22 04:49:57', '2018-07-22 04:49:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumidor`
--

DROP TABLE IF EXISTS `consumidor`;
CREATE TABLE IF NOT EXISTS `consumidor` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumidor_assinatura`
--

DROP TABLE IF EXISTS `consumidor_assinatura`;
CREATE TABLE IF NOT EXISTS `consumidor_assinatura` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `dataDeAssinatura` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` double(8,2) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consumidor_assinatura_login_id_foreign` (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `consumidor_assinatura`
--

INSERT INTO `consumidor_assinatura` (`id`, `dataDeAssinatura`, `preco`, `status`, `login_id`, `created_at`, `updated_at`) VALUES
(1, '08/19', 0.91, 'molestiae', 19, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(2, '04/20', 5.82, 'non', 40, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(3, '10/20', 3.37, 'non', 46, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(4, '08/20', 4.99, 'quod', 65, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(5, '10/18', 5.57, 'sed', 97, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(6, '11/18', 0.09, 'et', 35, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(7, '09/19', 0.38, 'enim', 16, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(8, '07/19', 1.95, 'consequuntur', 11, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(9, '09/19', 1.09, 'omnis', 27, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(10, '11/19', 2.23, 'ut', 90, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(11, '06/21', 0.35, 'possimus', 94, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(12, '11/20', 2.76, 'quo', 99, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(13, '08/19', 7.83, 'facere', 25, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(14, '09/18', 0.44, 'saepe', 94, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(15, '11/20', 3.09, 'ea', 87, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(16, '06/21', 0.05, 'animi', 73, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(17, '12/20', 1.13, 'nihil', 57, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(18, '01/19', 2.73, 'ducimus', 96, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(19, '07/20', 3.66, 'culpa', 58, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(20, '11/18', 8.00, 'officia', 89, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(21, '05/20', 5.61, 'dolores', 0, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(22, '10/19', 0.04, 'quaerat', 37, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(23, '11/20', 5.95, 'illo', 44, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(24, '06/21', 6.63, 'ducimus', 92, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(25, '08/18', 1.84, 'numquam', 28, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(26, '08/18', 4.41, 'labore', 17, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(27, '08/20', 7.60, 'nisi', 1, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(28, '03/21', 2.94, 'quia', 23, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(29, '11/20', 3.08, 'enim', 65, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(30, '11/19', 2.82, 'soluta', 20, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(31, '07/18', 7.41, 'et', 59, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(32, '03/19', 0.30, 'quia', 64, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(33, '09/19', 3.89, 'laborum', 11, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(34, '12/18', 2.30, 'tempora', 83, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(35, '11/19', 5.59, 'amet', 0, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(36, '11/19', 7.94, 'nisi', 16, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(37, '03/19', 6.71, 'non', 68, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(38, '04/20', 2.19, 'iusto', 18, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(39, '08/18', 2.85, 'id', 98, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(40, '05/19', 2.80, 'quas', 88, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(41, '12/18', 2.37, 'magnam', 80, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(42, '11/18', 0.07, 'voluptas', 89, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(43, '03/21', 1.62, 'soluta', 58, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(44, '11/20', 7.67, 'earum', 7, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(45, '01/19', 0.77, 'et', 73, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(46, '07/19', 5.28, 'cum', 74, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(47, '02/19', 7.71, 'quia', 72, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(48, '12/19', 6.08, 'fuga', 9, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(49, '04/19', 7.75, 'quod', 9, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(50, '01/21', 1.33, 'ea', 73, '2018-07-22 04:49:57', '2018-07-22 04:49:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumidor_carrinho`
--

DROP TABLE IF EXISTS `consumidor_carrinho`;
CREATE TABLE IF NOT EXISTS `consumidor_carrinho` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consumidor_carrinho_usuario_id_foreign` (`usuario_id`),
  KEY `consumidor_carrinho_produto_id_foreign` (`produto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `consumidor_carrinho`
--

INSERT INTO `consumidor_carrinho` (`id`, `usuario_id`, `produto_id`, `created_at`, `updated_at`) VALUES
(1, 8, 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(2, 4, 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(3, 4, 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(4, 4, 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(5, 4, 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(6, 8, 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(7, 9, 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(8, 6, 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(9, 4, 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(10, 8, 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(11, 6, 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(12, 4, 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(13, 9, 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(14, 7, 9, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(15, 8, 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(16, 8, 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(17, 5, 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(18, 2, 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(19, 5, 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(20, 5, 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(21, 3, 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(22, 5, 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(23, 2, 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(24, 6, 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(25, 5, 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(26, 9, 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(27, 4, 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(28, 5, 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(29, 1, 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(30, 1, 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(31, 2, 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(32, 5, 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(33, 1, 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(34, 5, 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(35, 3, 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(36, 7, 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(37, 6, 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(38, 6, 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(39, 6, 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(40, 8, 9, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(41, 8, 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(42, 9, 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(43, 9, 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(44, 2, 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(45, 4, 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(46, 2, 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(47, 2, 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(48, 4, 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(49, 2, 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(50, 5, 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumidor_cartao`
--

DROP TABLE IF EXISTS `consumidor_cartao`;
CREATE TABLE IF NOT EXISTS `consumidor_cartao` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validade` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codCartao` int(10) UNSIGNED NOT NULL,
  `numCartao` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consumidor_cartao_login_id_foreign` (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `consumidor_cartao`
--

INSERT INTO `consumidor_cartao` (`id`, `nome`, `validade`, `codCartao`, `numCartao`, `login_id`, `created_at`, `updated_at`) VALUES
(1, 'Elyse Torphy', '11/19', 928, '4532596144683311', 11, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(2, 'Prof. Alvis Leffler', '03/21', 386, '2439975275536902', 58, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(3, 'Gwen Bashirian Jr.', '04/20', 426, '5580454466632896', 41, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(4, 'Mr. Donald Nolan PhD', '12/20', 927, '2403023386314307', 25, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(5, 'Natasha Kuhic', '02/21', 962, '4532803898756', 41, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(6, 'Prof. Madison Johnson V', '04/21', 362, '4929462990902407', 56, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(7, 'Prof. Abigayle Steuber', '08/20', 645, '4532110679824959', 82, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(8, 'Jacklyn Bednar', '09/18', 202, '4556232187772073', 27, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(9, 'Yoshiko Boyle', '07/20', 782, '5152890203792881', 94, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(10, 'Mrs. Daisha Russel V', '11/18', 997, '4024007106788481', 30, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(11, 'Camren Gleason', '07/18', 471, '4024007194983473', 75, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(12, 'Ms. Lora Bosco', '12/20', 628, '4024007190907898', 36, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(13, 'Yvette Fay III', '03/19', 258, '4916577206619308', 62, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(14, 'Murray Pfeffer IV', '09/18', 214, '6011491321520988', 73, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(15, 'Hope Shields IV', '02/21', 668, '5468620345540362', 79, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(16, 'Xavier Adams', '02/20', 553, '4916895719881987', 17, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(17, 'Ms. Elisha Stroman DDS', '04/20', 675, '5234509523085121', 88, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(18, 'Akeem Herman', '11/20', 609, '373339131897754', 62, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(19, 'Marc Jenkins', '05/19', 572, '4485966629286244', 55, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(20, 'Dr. Donna Durgan', '04/19', 668, '4539859284543163', 39, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(21, 'Abby Dooley', '02/19', 247, '6011865618821805', 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(22, 'Zoey Baumbach', '11/19', 734, '4716252376478560', 93, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(23, 'Dana Jakubowski', '08/18', 668, '4716362843726846', 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(24, 'Emory Leannon', '06/20', 73, '4532217783739872', 96, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(25, 'Lonnie Yundt', '04/21', 201, '6011279104556307', 16, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(26, 'Weldon Rau', '11/20', 317, '2437513641500427', 60, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(27, 'Jarrett Emard', '12/19', 763, '2372197858750078', 33, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(28, 'Toney Bayer', '01/19', 301, '4916180316625', 71, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(29, 'Dr. Saige Ziemann Sr.', '04/19', 975, '4929116092469521', 10, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(30, 'Dayton Doyle', '07/20', 257, '4024007100411', 81, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(31, 'Sven Stanton', '11/18', 892, '6011268505453057', 79, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(32, 'Edd Strosin II', '07/21', 42, '4556936951501761', 92, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(33, 'Tianna Hermann IV', '08/18', 145, '2221625357150807', 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(34, 'Otto Wuckert DDS', '06/20', 350, '4539116382409866', 25, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(35, 'Lurline O\'Kon PhD', '02/21', 126, '4916463964003979', 27, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(36, 'Eloisa Aufderhar', '06/19', 551, '4929697201658302', 34, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(37, 'Meta Kihn DDS', '11/20', 475, '4532156497313', 61, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(38, 'Mikayla Buckridge', '06/20', 268, '4556425117327501', 81, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(39, 'Dr. Esteban Carter', '09/18', 984, '4024007146307748', 84, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(40, 'Mr. Urban Hartmann MD', '03/19', 440, '5336599152817933', 45, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(41, 'Dr. Obie Considine', '12/19', 908, '4716452994528198', 47, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(42, 'Linnie Schimmel', '06/20', 961, '372525169203987', 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(43, 'Hudson Blick', '05/20', 463, '2221776470747225', 29, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(44, 'Miss Vita Grimes I', '08/19', 447, '4716667819699912', 70, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(45, 'Vaughn Hyatt', '09/20', 482, '2663406829491508', 51, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(46, 'Miss Elizabeth Toy', '03/21', 768, '2720140638574961', 41, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(47, 'Irma Krajcik Jr.', '03/19', 365, '6011647104959863', 12, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(48, 'Milton Quigley', '04/21', 609, '4539805562918', 74, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(49, 'Clint Toy V', '04/21', 496, '4929490050918724', 42, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(50, 'Mona Conn', '01/21', 254, '2407612343587801', 62, '2018-07-22 04:48:37', '2018-07-22 04:48:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumidor_endereco`
--

DROP TABLE IF EXISTS `consumidor_endereco`;
CREATE TABLE IF NOT EXISTS `consumidor_endereco` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complemento` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `consumidor_endereco_login_id_foreign` (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `consumidor_endereco`
--

INSERT INTO `consumidor_endereco` (`id`, `rua`, `bairro`, `cep`, `numero`, `cidade`, `estado`, `complemento`, `zona`, `login_id`, `created_at`, `updated_at`) VALUES
(1, 'Hansen Manor', 'Emelie Lock', '892428282', '797', 'Olsonmouth', 'Virginia', 'Tempore quaerat ut illo distinctio facilis.', 'Quia velit earum cupiditate minima.', 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(2, 'Mohamed Estate', 'Laron Pines', '754302287', '271', 'Harbermouth', 'Oklahoma', 'Autem voluptate rerum veniam blanditiis omnis ut.', 'Voluptas eos officiis maxime molestiae quis ullam aut.', 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(3, 'Kade Valleys', 'Cierra Club', '562242959', '20181', 'Hughmouth', 'Hawaii', 'Voluptatum similique qui sequi officiis.', 'Quia blanditiis incidunt molestiae minima at.', 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(4, 'Sporer Lodge', 'Lottie Pike', '640842221', '404', 'Port Julian', 'Louisiana', 'Corporis impedit repellat cumque amet expedita.', 'Natus in accusamus in eius animi.', 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(5, 'Simonis Plains', 'Conn Wells', '244800808', '4005', 'Whiteton', 'Wyoming', 'Id quae nihil ea rerum.', 'Reiciendis eius voluptatem sed est doloribus natus sed.', 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(6, 'Deon Forge', 'Shawna Manor', '491840560', '208', 'Beahanmouth', 'Wisconsin', 'Ipsum voluptatem alias aut occaecati aut sit.', 'Mollitia ea est eaque reprehenderit dolorum aut vel.', 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(7, 'Gabrielle Fall', 'McCullough Ramp', '322674856', '38962', 'Joanstad', 'Oregon', 'Autem deserunt cumque saepe mollitia ut quam tenetur labore.', 'Repellat omnis vel porro sapiente atque aspernatur tenetur cum.', 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(8, 'Larkin Turnpike', 'Faye Fort', '753669010', '692', 'Lake Jamir', 'District of Columbia', 'Eum sunt voluptates cum vel dolorum ea.', 'Occaecati iusto est enim laborum.', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(9, 'Paucek Mount', 'Kris Meadows', '386280378', '545', 'Lake Aurore', 'Idaho', 'Qui dolorum pariatur aut officiis nam impedit.', 'Id a architecto voluptatem quam doloremque.', 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(10, 'Haskell Knoll', 'Karine Shore', '92458865', '56215', 'New Miamouth', 'West Virginia', 'Cum possimus ducimus qui praesentium at voluptas quas aut.', 'Amet dolorem temporibus et voluptatem pariatur quis corporis.', 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(11, 'Sporer Bypass', 'Stracke Mountains', '665425641', '215', 'Stephonton', 'Missouri', 'Et minus ea ratione odio nulla accusantium dolor.', 'Molestias placeat ea distinctio laboriosam doloremque distinctio.', 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(12, 'Ryan Via', 'Bahringer Stream', '506091413', '989', 'Lake Karolannshire', 'Connecticut', 'Et magni deleniti hic rerum.', 'Facilis aut nihil dolor assumenda.', 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(13, 'Sage Ford', 'Mose Terrace', '843527968', '9327', 'North Kellenburgh', 'Montana', 'Sed sapiente distinctio voluptatem aliquam.', 'Ipsum vel autem laboriosam earum dolorem.', 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(14, 'Padberg Motorway', 'Lorna Inlet', '517927776', '722', 'South Hildegardberg', 'Kentucky', 'Laboriosam consectetur asperiores ullam sed optio aut.', 'Assumenda sed ipsam pariatur ut ipsum ut officiis.', 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(15, 'Stanton Harbor', 'Jones Station', '919588779', '9619', 'South Landentown', 'Wyoming', 'Ipsam numquam dolores fuga quaerat sequi id nisi.', 'Officia voluptatem quia iste illum.', 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(16, 'Kris Terrace', 'Jacobi Course', '541096281', '501', 'O\'Connellstad', 'California', 'Labore omnis et et nihil non explicabo.', 'Quas debitis eos labore consequatur nostrum consectetur itaque vitae.', 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(17, 'Ryley Row', 'Bell Glen', '549186887', '309', 'Lindmouth', 'Michigan', 'Nobis omnis voluptates et dicta consequatur expedita.', 'Corrupti eos molestiae ipsam et quo voluptatem.', 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(18, 'Jackeline Fords', 'Tracy Hills', '636321118', '77479', 'North Aurelietown', 'Michigan', 'Quis impedit maiores et nostrum.', 'Sed eum temporibus hic ratione.', 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(19, 'Kris Points', 'Merle Park', '684798209', '49857', 'New Katelynberg', 'Maryland', 'Fuga rem aut exercitationem nesciunt placeat accusamus.', 'Perferendis ab quod quia est maxime delectus praesentium.', 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(20, 'Reilly Parks', 'Wintheiser Plain', '183568325', '7665', 'Joanieberg', 'District of Columbia', 'Quis rerum est nobis ducimus qui numquam culpa.', 'Qui fugit deleniti et quia.', 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(21, 'Fanny Tunnel', 'Lacey Square', '392279089', '94804', 'Celestinochester', 'Tennessee', 'Nihil quia magnam neque quasi saepe perspiciatis temporibus molestiae.', 'Voluptates qui eos numquam qui.', 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(22, 'Pouros Ramp', 'Rowland Bridge', '647826971', '783', 'South Ninahaven', 'Texas', 'Aut odio exercitationem repellat esse.', 'Quam rem atque non id et consequatur.', 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(23, 'Heller Street', 'Ariane Lake', '48454625', '7867', 'East Jodie', 'Vermont', 'Adipisci molestias harum rerum doloribus sunt sit perferendis quis.', 'Maiores animi voluptatem reprehenderit.', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(24, 'Thompson Roads', 'Hirthe Forge', '80686014', '122', 'Port Madelyn', 'Missouri', 'Et qui nesciunt vel beatae atque autem.', 'Ea saepe odio non sunt adipisci rerum consequatur.', 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(25, 'Ernesto Shoals', 'Bernice Prairie', '82142888', '626', 'Port Raymundo', 'Oklahoma', 'Laborum dolore ut ab aspernatur facilis.', 'Officiis reprehenderit enim et dolor expedita eius vitae.', 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(26, 'Kirlin Isle', 'Ara Vista', '237463299', '36917', 'Lake Georgeberg', 'Iowa', 'In rerum explicabo quo ea quos.', 'Culpa ipsum aut similique expedita porro ab illo tempore.', 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(27, 'Spinka Villages', 'Pouros Oval', '456189147', '9789', 'Lake Emely', 'California', 'Ipsa aperiam esse quo itaque autem.', 'Corporis quia laboriosam quidem exercitationem.', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(28, 'Eichmann Lakes', 'Blanda Centers', '366765022', '1879', 'Hansenland', 'Oklahoma', 'Qui porro voluptates alias architecto omnis.', 'Nesciunt eveniet nulla ullam.', 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(29, 'Hessel Inlet', 'Manuel Manor', '47658282', '37361', 'Jovanyton', 'Arkansas', 'Laudantium autem odit tempore tenetur.', 'Omnis dolorem quia minus est esse.', 9, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(30, 'Emily Heights', 'Mayert Mountains', '407200729', '87783', 'Champlintown', 'Texas', 'Quia incidunt at officia quo maiores magnam mollitia.', 'Error ullam ut quis deleniti ut error eum.', 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(31, 'Lesch Stravenue', 'Arvel Groves', '312599178', '740', 'South Reynold', 'Illinois', 'Quas sapiente minus animi rerum eos odio perferendis.', 'Dicta tenetur ullam est aut dignissimos corporis ullam.', 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(32, 'Langosh Landing', 'Ramiro Isle', '350752636', '60455', 'Halvorsonfurt', 'New Mexico', 'Nulla error quo unde ipsum ad minima atque.', 'Ad dolor dolor harum hic aut delectus.', 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(33, 'Altenwerth Burgs', 'Delores Radial', '398456734', '7983', 'Robertsshire', 'Arizona', 'Quae et et voluptates provident voluptatem et.', 'Qui consectetur debitis in accusantium.', 9, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(34, 'Howe Summit', 'Iva Crossroad', '632668875', '50825', 'Grahamview', 'North Carolina', 'Necessitatibus necessitatibus qui consequatur sed vero numquam nisi.', 'Eos libero earum et temporibus.', 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(35, 'Thompson Islands', 'Ferry Hill', '574254548', '42881', 'Dameonmouth', 'Arkansas', 'Qui officiis earum magnam quas nesciunt incidunt.', 'Quis consequatur consequuntur eveniet.', 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(36, 'Bode Spring', 'O\'Conner Knolls', '393703131', '158', 'Baumbachmouth', 'Washington', 'Laudantium deserunt doloribus quisquam voluptatum.', 'Maxime voluptatem nostrum quidem saepe sed et.', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(37, 'Gusikowski Mount', 'Kreiger Plain', '625757077', '847', 'Wilkinsonchester', 'Illinois', 'In molestiae nisi cumque et.', 'Rerum itaque et voluptate fuga deserunt.', 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(38, 'Antonio Parkways', 'Reinger Ways', '78495652', '921', 'Wizaview', 'Ohio', 'Omnis ea aut voluptatem consequatur.', 'Omnis provident aut excepturi autem quia.', 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(39, 'Rodriguez Lake', 'Patsy Summit', '745212845', '9248', 'Bertside', 'Missouri', 'Et voluptatem odio quia eius fugiat.', 'Praesentium est numquam nisi consectetur laboriosam.', 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(40, 'Goodwin River', 'Randy Parkways', '28972545', '580', 'Dinamouth', 'Minnesota', 'Eum asperiores sit eligendi quidem nihil qui.', 'Eligendi nesciunt natus nihil fugiat ex.', 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(41, 'Tremblay Causeway', 'Nyasia Glen', '676809931', '61510', 'East Giuseppeside', 'Florida', 'Expedita harum eius sunt ab.', 'Rem distinctio facere ut labore nobis expedita et atque.', 9, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(42, 'Parisian Crossing', 'Adelia Fields', '660754027', '54757', 'Mollieport', 'Pennsylvania', 'Consequuntur quasi perspiciatis qui ut nemo.', 'Labore tempora sit delectus et aut sit dolor.', 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(43, 'Maggio Drives', 'Cassie Plaza', '309822140', '159', 'Lake Manley', 'Idaho', 'Nostrum eos deserunt dolor non.', 'Minima sit autem voluptas tenetur repudiandae incidunt tempora.', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(44, 'Ferry Greens', 'Maci Falls', '78868676', '8962', 'South Dejon', 'Washington', 'Omnis quia quo dignissimos sit.', 'Inventore aut veritatis et quia dignissimos asperiores.', 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(45, 'Beier Path', 'Bauch Union', '797725502', '905', 'Joanybury', 'South Dakota', 'Maxime et velit non dolorum.', 'Facere alias voluptate eum qui iusto ea minima.', 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(46, 'Johnson Spur', 'Waylon Mission', '731338067', '86626', 'North Angelita', 'California', 'Ut ea ea aperiam esse ut blanditiis.', 'Voluptatem quia id ullam voluptate ut perferendis explicabo repudiandae.', 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(47, 'Bergstrom Spur', 'Koelpin Circles', '690690115', '276', 'New Isaiahport', 'West Virginia', 'Nostrum non qui et voluptatem cupiditate minus.', 'Dicta dolore ut autem aut.', 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(48, 'Sawayn Row', 'Jerrold Park', '952566862', '4060', 'Reingerfort', 'Montana', 'Repellat odio placeat et animi excepturi.', 'Alias facilis et iste.', 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(49, 'Germaine Place', 'Hans View', '456599787', '33880', 'Breanneville', 'Indiana', 'Odit quis soluta commodi qui eius.', 'Deserunt voluptas sunt in est eaque.', 9, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(50, 'Huels Plaza', 'Ezequiel Cliff', '84377221', '921', 'Sporerberg', 'Idaho', 'Commodi ut totam aut minus.', 'Laborum ducimus aut magni occaecati.', 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumidor_login`
--

DROP TABLE IF EXISTS `consumidor_login`;
CREATE TABLE IF NOT EXISTS `consumidor_login` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `consumidor_login_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumidor_pedido`
--

DROP TABLE IF EXISTS `consumidor_pedido`;
CREATE TABLE IF NOT EXISTS `consumidor_pedido` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `finalizado` int(10) UNSIGNED NOT NULL,
  `pendente` int(10) UNSIGNED NOT NULL,
  `cancelado` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumidor_usuarios`
--

DROP TABLE IF EXISTS `consumidor_usuarios`;
CREATE TABLE IF NOT EXISTS `consumidor_usuarios` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `consumidor_usuarios_cpf_unique` (`cpf`),
  KEY `consumidor_usuarios_login_id_foreign` (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `consumidor_usuarios`
--

INSERT INTO `consumidor_usuarios` (`id`, `cpf`, `nome`, `sexo`, `telefone`, `login_id`, `created_at`, `updated_at`) VALUES
(1, '7108237049250', 'Myrtie Fisher', 'Prof.', '915869550', 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(2, '3969848589818', 'Kara Grady', 'Dr.', '674391366', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(3, '8119218354170', 'Ansley Kertzmann', 'Dr.', '429805191', 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(4, '9962538804646', 'Montana Rice', 'Prof.', '671865898', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(5, '6564383870277', 'Zelma Cummings', 'Mrs.', '436252894', 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(6, '9224096960319', 'Prof. Jeffery Lind DDS', 'Mr.', '31521964', 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(7, '9025692653021', 'Sim Kub', 'Prof.', '550850878', 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(8, '7101001921950', 'Miss Corine Mayert', 'Prof.', '169285048', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(9, '5683943098072', 'Mrs. Brandi Bernier', 'Prof.', '384733570', 9, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(10, '7805039894216', 'Dr. Edward Kuhlman I', 'Ms.', '286957754', 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(11, '9768808776787', 'Prof. Florine Erdman PhD', 'Prof.', '379450281', 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(12, '7685853919285', 'Caroline Rodriguez', 'Dr.', '113004363', 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(13, '3420951457871', 'Octavia Cruickshank', 'Dr.', '711666957', 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(14, '3724116620842', 'Nathan Erdman PhD', 'Miss', '830847015', 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(15, '9214461695786', 'Prof. Ryley Stroman', 'Mr.', '708538367', 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(16, '9730436320656', 'Ulices Ward PhD', 'Dr.', '767767321', 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(17, '5803121143404', 'Angelita Conn II', 'Ms.', '649009735', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(18, '0345164677560', 'Alberta Schulist', 'Ms.', '294304242', 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(19, '8480977285525', 'Claude Runte IV', 'Mr.', '307651386', 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(20, '1077632526085', 'Mrs. Halie Gerlach', 'Dr.', '704172059', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(21, '9590178711309', 'Prof. Kacey Medhurst', 'Prof.', '125918534', 9, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(22, '4828777110779', 'Ottilie Aufderhar', 'Dr.', '776183122', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(23, '8479443601945', 'Sterling Schiller', 'Dr.', '801895916', 9, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(24, '2079674283482', 'Talia Quigley DVM', 'Mr.', '300730912', 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(25, '1896453488521', 'Winifred Toy', 'Mr.', '742379860', 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(26, '5859167280085', 'Dr. Gust Abshire III', 'Dr.', '425085508', 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(27, '7772250449658', 'Deondre Jaskolski', 'Mr.', '612083412', 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(28, '8050537897910', 'Dr. Sherman Daniel', 'Prof.', '654797610', 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(29, '3401009296444', 'Mr. Sam Lockman PhD', 'Prof.', '553926749', 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(30, '4818176292701', 'Prof. Tillman Hahn PhD', 'Dr.', '139336624', 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(31, '8738343731511', 'Ahmed Powlowski', 'Ms.', '243876523', 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(32, '1816017636854', 'Miss Destiney Schumm', 'Dr.', '938369443', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(33, '4859351891135', 'Nadia Graham', 'Mrs.', '10251084', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(34, '4048036443329', 'Hilton Flatley III', 'Ms.', '147828345', 9, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(35, '1110520838300', 'Lorena Murray', 'Prof.', '149708294', 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(36, '6211233260718', 'Dr. Karlie Kreiger', 'Dr.', '361575446', 5, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(37, '9733251863254', 'Miss Addison Beier Jr.', 'Mrs.', '417375102', 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(38, '4357014213015', 'Miss Macie Rosenbaum DDS', 'Dr.', '594911821', 9, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(39, '6046174629597', 'Watson Farrell I', 'Ms.', '465833709', 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(40, '2841919349273', 'Malvina Haag', 'Miss', '124058621', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(41, '0207913291161', 'Casimer Bauch', 'Ms.', '221728448', 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(42, '2083239653054', 'Prof. Lyda Bogisich', 'Dr.', '816600275', 9, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(43, '1457771413482', 'Hilario Wolff', 'Miss', '711288164', 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(44, '7193933898288', 'Chadrick Leffler', 'Mr.', '836397870', 9, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(45, '1124572848798', 'Jayce Fritsch V', 'Miss', '959890236', 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(46, '0502693481369', 'Adriana Hegmann Jr.', 'Dr.', '35159017', 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(47, '8104971642558', 'Christina Will', 'Mr.', '251056181', 3, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(48, '2559987407923', 'Rusty Kiehn II', 'Miss', '882483597', 7, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(49, '2494196681026', 'Jamil Weissnat', 'Mr.', '374635198', 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(50, '4951851737002', 'Saige Durgan', 'Prof.', '63042968', 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(96, '2014_10_12_100000_create_password_resets_table', 1),
(97, '2018_05_25_120820_create_consumidor_login_table', 1),
(98, '2018_05_25_121506_create_consumidor_usuario_table', 1),
(99, '2018_05_25_123131_create_consumidor_table', 1),
(100, '2018_05_25_124707_create_consumidor_assinatura_table', 1),
(101, '2018_05_25_130426_create_consumidor_pedido_table', 1),
(102, '2018_05_25_131512_create_consumidor_cartao_table', 1),
(103, '2018_05_25_133344_create_consumidor_endereco_table', 1),
(104, '2018_05_25_134243_create_consumidor_carrinho_table', 1),
(105, '2018_05_25_141014_create_produtor_produto_table', 1),
(106, '2018_05_25_143422_create_produtor_valor_table', 1),
(107, '2018_06_08_115511_create_produtor_comentario_table', 1),
(108, '2018_06_08_120145_create_produtor_avaliacao_table', 1),
(109, '2018_06_08_120559_create_produtor_loja_table', 1),
(110, '2018_06_08_121145_create_produtor_renda_table', 1),
(111, '2018_06_08_121535_create_produtor_assinatura_table', 1),
(112, '2018_06_08_122256_create_adm_administrador_table', 1),
(113, '2018_06_08_122654_create_adm_punicao_table', 1),
(114, '2018_06_13_044925_create_produtor_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtores`
--

DROP TABLE IF EXISTS `produtores`;
CREATE TABLE IF NOT EXISTS `produtores` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_id` int(10) UNSIGNED NOT NULL,
  `endereco_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produtores_login_id_foreign` (`login_id`),
  KEY `produtores_endereco_id_foreign` (`endereco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtores`
--

INSERT INTO `produtores` (`id`, `nome`, `cnpj`, `login_id`, `endereco_id`, `created_at`, `updated_at`) VALUES
(1, 'Elmer Gerhold', '7582287348530', 65, 83, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(2, 'Faye Jacobson', '0615294723087', 60, 9, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(3, 'Agustina Botsford II', '7541328412043', 3, 13, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(4, 'Orrin Bauch', '4684277883557', 17, 23, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(5, 'Prof. Milford Bins', '0405591757294', 42, 57, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(6, 'Mrs. Alison Hessel I', '9484391547374', 73, 36, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(7, 'Malcolm Mills', '3232331157468', 5, 21, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(8, 'Markus Heathcote', '3030236119006', 1, 66, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(9, 'Ms. Tanya Lebsack II', '7143750102853', 91, 6, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(10, 'Lizzie Larkin', '8859891483490', 98, 53, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(11, 'Araceli Cormier II', '2548774128639', 8, 55, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(12, 'Dion White', '5072980829518', 73, 91, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(13, 'Joshua Kertzmann', '8671440361871', 77, 30, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(14, 'Verda Cronin', '2646326464898', 76, 11, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(15, 'Erick Raynor IV', '0811913090312', 17, 4, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(16, 'Dr. Alvah Welch II', '5446737673295', 43, 2, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(17, 'Joany Towne', '9658326384963', 44, 8, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(18, 'Dr. Trudie Witting II', '0699716336574', 36, 80, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(19, 'Skye Hand DDS', '7697012586764', 32, 95, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(20, 'Jeffry Goldner', '3102194294559', 77, 14, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(21, 'Claudie Schiller', '9929958534751', 20, 15, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(22, 'Prof. Grover Lind IV', '0283782777579', 91, 46, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(23, 'Sibyl Dare', '7356814301875', 38, 52, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(24, 'Katharina Yundt MD', '9334885277792', 51, 42, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(25, 'Sherwood Bayer', '7760857845942', 82, 49, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(26, 'Rae Abshire', '6504294959319', 28, 88, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(27, 'Alysa Kovacek', '7613928290984', 97, 40, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(28, 'Rusty Waelchi', '8621847228277', 31, 82, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(29, 'Erin Lakin', '5148349346177', 12, 73, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(30, 'Dr. Noemi Collins PhD', '4473089052554', 31, 42, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(31, 'Mr. Howell McGlynn', '0417593919358', 64, 28, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(32, 'Dena Upton', '4024924260339', 25, 63, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(33, 'Zoey Terry', '2934957606023', 79, 54, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(34, 'Derek Wisoky', '2969933946411', 81, 23, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(35, 'Cielo Ziemann DDS', '8448227904008', 11, 91, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(36, 'Emanuel Johns', '3498824223106', 5, 67, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(37, 'Maxwell Ward', '6270647776499', 87, 96, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(38, 'Paige Reinger', '2139059080867', 59, 79, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(39, 'Carlie McClure', '7049687493487', 37, 50, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(40, 'Albina Bogan', '9596883997700', 31, 83, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(41, 'Miss Cynthia Lebsack I', '1053103495968', 94, 85, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(42, 'Prof. Camille Raynor II', '4605054267483', 32, 14, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(43, 'Dr. Cody Koss II', '8246361301710', 54, 19, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(44, 'Dr. Antonietta Cronin PhD', '2578690995817', 63, 1, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(45, 'Theodora Quitzon', '3271708184805', 69, 58, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(46, 'Glen Ankunding', '6505429100262', 52, 22, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(47, 'Jewell Weissnat', '9940741323208', 3, 38, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(48, 'Mr. Glen Zemlak MD', '4937678390156', 26, 74, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(49, 'Zachery Hirthe', '9498957471041', 56, 50, '2018-07-22 04:48:37', '2018-07-22 04:48:37'),
(50, 'Dr. Pink Barrows DDS', '3416270858796', 9, 20, '2018-07-22 04:48:37', '2018-07-22 04:48:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtor_assinatura`
--

DROP TABLE IF EXISTS `produtor_assinatura`;
CREATE TABLE IF NOT EXISTS `produtor_assinatura` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `valor` double(8,2) NOT NULL,
  `duracao` date NOT NULL,
  `frete` double(8,2) NOT NULL,
  `promocao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_assinatura` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtor_avaliacao`
--

DROP TABLE IF EXISTS `produtor_avaliacao`;
CREATE TABLE IF NOT EXISTS `produtor_avaliacao` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ruim` int(10) UNSIGNED NOT NULL,
  `pessimo` int(10) UNSIGNED NOT NULL,
  `mediano` int(10) UNSIGNED NOT NULL,
  `bom` int(10) UNSIGNED NOT NULL,
  `otimo` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtor_comentario`
--

DROP TABLE IF EXISTS `produtor_comentario`;
CREATE TABLE IF NOT EXISTS `produtor_comentario` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `feedback` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtor_comentario`
--

INSERT INTO `produtor_comentario` (`id`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 'Officia eum quisquam vero ullam praesentium autem quos.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(2, 'Amet qui perspiciatis quaerat accusamus maxime eligendi sit assumenda.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(3, 'Maxime repudiandae perspiciatis enim eligendi qui est adipisci.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(4, 'Esse qui id culpa officiis ut ea.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(5, 'Non et natus soluta iste est id.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(6, 'Odit error nihil consequatur.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(7, 'Quos quae doloribus et laboriosam vitae nihil et commodi.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(8, 'Illo ipsam consequuntur quos maiores doloremque esse qui.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(9, 'Voluptates ut quibusdam aspernatur quia recusandae.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(10, 'Quisquam porro illum cum excepturi.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(11, 'Hic consequatur ut quaerat qui nulla est temporibus.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(12, 'Ratione distinctio ipsum ea sint animi.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(13, 'Odio quaerat non quis officiis unde et animi fugit.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(14, 'Dicta maiores repudiandae aut necessitatibus voluptatibus occaecati dolorem.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(15, 'Est incidunt dolores nulla sunt reiciendis ut est.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(16, 'In adipisci mollitia iusto vero.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(17, 'Sit sunt libero sunt aspernatur.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(18, 'Quia omnis nobis ipsam ipsa omnis quia.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(19, 'At maxime qui temporibus et incidunt quibusdam reiciendis alias.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(20, 'Qui nisi accusantium fuga a sit sed.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(21, 'Ut vero nisi at qui modi.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(22, 'Vel voluptas corporis qui occaecati fugiat consequatur sed.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(23, 'Dolorem voluptatem debitis et repudiandae aliquid tempora.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(24, 'Accusamus rem voluptatem vel autem.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(25, 'Et ducimus perferendis eos.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(26, 'Possimus et illum vero eius animi.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(27, 'Velit libero quia quas aut dolorem.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(28, 'Id natus dolores temporibus consequatur ut.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(29, 'Et et provident est est incidunt.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(30, 'Illum provident maxime nemo earum dolor commodi.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(31, 'Ipsam molestias autem consequatur in sint cupiditate nobis.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(32, 'Velit et facere quia qui beatae explicabo sit.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(33, 'Ipsum omnis non eaque in earum.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(34, 'Quibusdam voluptate suscipit quibusdam iusto ipsum.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(35, 'Iusto et eum dolore cum enim aut.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(36, 'Nulla quam in fuga dolorum.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(37, 'Aut quis enim fugit eos est fugiat.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(38, 'Et asperiores modi quisquam delectus.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(39, 'Nam voluptatibus reprehenderit dolores ut iusto.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(40, 'Et veniam sequi dolorum animi adipisci numquam.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(41, 'Vero velit distinctio inventore quia officiis beatae.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(42, 'Quas expedita hic voluptatibus voluptas.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(43, 'In error sit doloremque enim ut odio ut incidunt.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(44, 'Sunt deleniti alias officia consequuntur consequatur praesentium.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(45, 'Temporibus nostrum aut qui non.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(46, 'Eos ut saepe voluptatum nostrum.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(47, 'Quia non cupiditate commodi voluptas occaecati nisi.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(48, 'Dolores incidunt culpa quia eos laborum repellat fuga.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(49, 'Dolores accusamus accusantium non nesciunt.', '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(50, 'Qui magnam vel ut et.', '2018-07-22 04:49:57', '2018-07-22 04:49:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtor_loja`
--

DROP TABLE IF EXISTS `produtor_loja`;
CREATE TABLE IF NOT EXISTS `produtor_loja` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cnpj` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtor_produto`
--

DROP TABLE IF EXISTS `produtor_produto`;
CREATE TABLE IF NOT EXISTS `produtor_produto` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd_frete_gratis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produtor_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produtor_produto_produtor_id_foreign` (`produtor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtor_produto`
--

INSERT INTO `produtor_produto` (`id`, `nome`, `descricao`, `tipo`, `qtd_frete_gratis`, `imagem`, `produtor_id`, `created_at`, `updated_at`) VALUES
(1, 'veniam', 'Sed corrupti et culpa.', 'cum', '52', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\73303a9e897e1c5906383a833ef0b8fc.jpg', 77, '2018-07-22 04:48:39', '2018-07-22 04:48:39'),
(2, 'commodi', 'Et voluptas et itaque eligendi magni vel.', 'sed', '39', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\d885f36c32f919393e93adbbd455b629.jpg', 7, '2018-07-22 04:48:40', '2018-07-22 04:48:40'),
(3, 'provident', 'Saepe iste earum aut voluptate ea corrupti.', 'ea', '59', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\5792fe9db4db79ed609de287ed5b80f1.jpg', 26, '2018-07-22 04:48:42', '2018-07-22 04:48:42'),
(4, 'cupiditate', 'Rerum facilis deleniti possimus ab quibusdam et.', 'non', '54', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\570833692baa4eb0020a07ef8b01d9aa.jpg', 20, '2018-07-22 04:48:43', '2018-07-22 04:48:43'),
(5, 'molestiae', 'Laboriosam consequatur doloribus quidem et.', 'commodi', '80', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\943ebb08bc09fda653ad9f797e31ae3e.jpg', 73, '2018-07-22 04:48:45', '2018-07-22 04:48:45'),
(6, 'perferendis', 'Delectus voluptatem enim sapiente sapiente sint.', 'eligendi', '23', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\348b4c9119f3c8d0da747169b16a1fe6.jpg', 33, '2018-07-22 04:48:46', '2018-07-22 04:48:46'),
(7, 'saepe', 'Enim neque sequi voluptatem dolores.', 'quo', '24', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\05582e191c2f4174ff91dbf4ccda21f9.jpg', 44, '2018-07-22 04:48:47', '2018-07-22 04:48:47'),
(8, 'qui', 'Ut praesentium sint deserunt sapiente vel et.', 'sit', '18', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\0e6c995b402250312b75ef96c7244724.jpg', 66, '2018-07-22 04:48:49', '2018-07-22 04:48:49'),
(9, 'architecto', 'Sit quisquam cumque praesentium fuga incidunt quibusdam quasi.', 'asperiores', '0', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\ffb70162953129cceb31e28fe7a05cea.jpg', 49, '2018-07-22 04:48:50', '2018-07-22 04:48:50'),
(10, 'totam', 'Quo et et maiores laudantium sunt cupiditate sint.', 'omnis', '34', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\8bc3bf0ee89a1b3b1c53087c5f59a6b8.jpg', 81, '2018-07-22 04:48:52', '2018-07-22 04:48:52'),
(11, 'similique', 'Quibusdam ad et hic.', 'laudantium', '72', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\d40d6aa64e67fe812560c4d9c181b6e9.jpg', 6, '2018-07-22 04:48:53', '2018-07-22 04:48:53'),
(12, 'eum', 'Assumenda quos quibusdam vel provident.', 'odit', '28', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\f32df80a673d6efd7f87089ec93aedc1.jpg', 19, '2018-07-22 04:48:55', '2018-07-22 04:48:55'),
(13, 'doloremque', 'Est illo quia et architecto eveniet temporibus facilis sed.', 'quis', '70', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\bec47734a949c8dabd6d979d41be681a.jpg', 46, '2018-07-22 04:48:56', '2018-07-22 04:48:56'),
(14, 'delectus', 'Qui qui dolores perspiciatis ad unde maxime.', 'quod', '26', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\bd874c2677d99b9dc6208e34d816829c.jpg', 40, '2018-07-22 04:48:58', '2018-07-22 04:48:58'),
(15, 'repellat', 'Quae aut neque tempore.', 'hic', '69', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\5504f6bc688d65f1a752d901ea1c5c46.jpg', 65, '2018-07-22 04:48:59', '2018-07-22 04:48:59'),
(16, 'dolor', 'Molestiae at cum consequuntur.', 'voluptas', '87', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\d5d0d078ac99635a28e3ff60183a540b.jpg', 65, '2018-07-22 04:49:01', '2018-07-22 04:49:01'),
(17, 'nisi', 'Ut occaecati omnis deserunt eum omnis fugit vel dolor.', 'eum', '57', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\c59f0d2415ef381948bea39e0656886d.jpg', 47, '2018-07-22 04:49:03', '2018-07-22 04:49:03'),
(18, 'atque', 'Iure vel necessitatibus odit amet.', 'sed', '51', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\b044bd7dbd55a6e2b31690d1ea831d75.jpg', 62, '2018-07-22 04:49:04', '2018-07-22 04:49:04'),
(19, 'debitis', 'Saepe officia ipsum minus.', 'ad', '21', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\3778005dc75e8ca6b9018b17662695f8.jpg', 96, '2018-07-22 04:49:06', '2018-07-22 04:49:06'),
(20, 'voluptatibus', 'Aut id assumenda tenetur voluptas unde.', 'fugiat', '49', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\60bbf8d3e81ae420f4c0966d0d826855.jpg', 24, '2018-07-22 04:49:07', '2018-07-22 04:49:07'),
(21, 'eos', 'Voluptatibus facere dignissimos veritatis dicta.', 'possimus', '99', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\5faf36bfd3810afa9aebcab3a65f2ead.jpg', 71, '2018-07-22 04:49:09', '2018-07-22 04:49:09'),
(22, 'aut', 'Ex ea id et enim.', 'exercitationem', '1', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\03b9225bc8afd968974315d706eadcf1.jpg', 85, '2018-07-22 04:49:11', '2018-07-22 04:49:11'),
(23, 'dolor', 'Voluptatem modi atque nobis in pariatur excepturi quibusdam.', 'id', '15', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\f4cc61e3a0fde73933a632d01cef5c78.jpg', 24, '2018-07-22 04:49:13', '2018-07-22 04:49:13'),
(24, 'quis', 'Accusamus vero nulla eveniet.', 'repellendus', '70', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\c6d16c117db6e04162b47d0f9ed80be0.jpg', 49, '2018-07-22 04:49:15', '2018-07-22 04:49:15'),
(25, 'ea', 'Qui rerum modi aliquid ex.', 'eum', '16', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\0f03250373ac96fdf27842a329624225.jpg', 23, '2018-07-22 04:49:16', '2018-07-22 04:49:16'),
(26, 'qui', 'Fugit sint tempore et nisi et quia.', 'ad', '6', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\2a0045a9916bb0d66be2e5399801204a.jpg', 22, '2018-07-22 04:49:17', '2018-07-22 04:49:17'),
(27, 'laborum', 'Neque vero sunt exercitationem aut.', 'est', '16', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\a17f68e73b093afda856ee1baa710253.jpg', 76, '2018-07-22 04:49:19', '2018-07-22 04:49:19'),
(28, 'molestiae', 'Ipsam voluptatibus soluta qui praesentium perspiciatis quia.', 'voluptas', '99', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\3c560e6372ee287273253ae3d9f320bb.jpg', 15, '2018-07-22 04:49:21', '2018-07-22 04:49:21'),
(29, 'tenetur', 'Excepturi praesentium ut odit quis commodi molestiae.', 'dolorum', '1', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\0c9a5bcba95733c229718488dbe5057f.jpg', 23, '2018-07-22 04:49:22', '2018-07-22 04:49:22'),
(30, 'voluptas', 'Dolorem omnis est dolore autem iusto et quisquam.', 'voluptas', '45', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\c7829a8b42112f82b808a725b3481dfe.jpg', 0, '2018-07-22 04:49:25', '2018-07-22 04:49:25'),
(31, 'sequi', 'Excepturi ipsa sunt cumque est blanditiis quaerat rem.', 'et', '32', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\1f67f827d43c1f8d1e5264ac91495ea1.jpg', 32, '2018-07-22 04:49:26', '2018-07-22 04:49:26'),
(32, 'rerum', 'Ducimus ipsa beatae quibusdam architecto suscipit qui aut rerum.', 'numquam', '77', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\786c45d30b0e2a9eaeda9f15fea65de0.jpg', 79, '2018-07-22 04:49:27', '2018-07-22 04:49:27'),
(33, 'magnam', 'Dolore maiores sint nesciunt omnis dicta.', 'maiores', '81', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\fa06b368fd3937ac9391d588dd15f378.jpg', 17, '2018-07-22 04:49:28', '2018-07-22 04:49:28'),
(34, 'architecto', 'Commodi porro sed maxime praesentium.', 'non', '71', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\e44e8d6ff334ec80879e851b2d432e41.jpg', 96, '2018-07-22 04:49:30', '2018-07-22 04:49:30'),
(35, 'dolorem', 'Distinctio qui est eius quisquam et.', 'aut', '59', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\62b2786086e89b2a35013bf58d410b62.jpg', 4, '2018-07-22 04:49:31', '2018-07-22 04:49:31'),
(36, 'nostrum', 'Quia amet qui quod.', 'aut', '21', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\c8a8da8c5707a8fe816494ee7c190580.jpg', 96, '2018-07-22 04:49:33', '2018-07-22 04:49:33'),
(37, 'dolorum', 'Voluptatum quia quis facere qui nisi impedit.', 'et', '0', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\10e5142794e415f492f66b21dc17d4fd.jpg', 79, '2018-07-22 04:49:35', '2018-07-22 04:49:35'),
(38, 'sit', 'Voluptatem repudiandae debitis sint atque suscipit error.', 'aut', '8', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\19311d93ae7c75ff0efe6ae4a4867551.jpg', 22, '2018-07-22 04:49:36', '2018-07-22 04:49:36'),
(39, 'atque', 'Odio et amet ad voluptatem exercitationem et nihil non.', 'molestias', '42', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\cb4303b20cbc31bcd7ccc8e2f7578bf1.jpg', 12, '2018-07-22 04:49:38', '2018-07-22 04:49:38'),
(40, 'sed', 'Quia fuga officia qui quaerat quos molestias.', 'quo', '0', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\1868aa798b34e4800391e5cf03e3d317.jpg', 86, '2018-07-22 04:49:39', '2018-07-22 04:49:39'),
(41, 'magni', 'Non autem tenetur quia cum incidunt et illum.', 'doloribus', '36', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\98ffdd3f4f246d4c05deaf6100138ddc.jpg', 73, '2018-07-22 04:49:42', '2018-07-22 04:49:42'),
(42, 'aliquid', 'Molestiae porro dolorum voluptatibus consectetur recusandae deserunt ab.', 'eligendi', '46', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\f1563d4850916f4a0952bc623c8d12c9.jpg', 47, '2018-07-22 04:49:43', '2018-07-22 04:49:43'),
(43, 'aut', 'Sit et minima ea autem.', 'porro', '43', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\e7d825949387cbbc7c1c251e9efd36f0.jpg', 41, '2018-07-22 04:49:45', '2018-07-22 04:49:45'),
(44, 'molestiae', 'Eligendi eius pariatur nihil placeat.', 'maiores', '34', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\64e0eecb1ec613db1b642f6a19ee40fa.jpg', 63, '2018-07-22 04:49:47', '2018-07-22 04:49:47'),
(45, 'libero', 'Voluptatem modi suscipit dolorem.', 'quidem', '14', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\a08696bb2f3c9be7ab8c081bb10d29c7.jpg', 78, '2018-07-22 04:49:48', '2018-07-22 04:49:48'),
(46, 'iusto', 'Quo aut ullam voluptas assumenda.', 'corrupti', '81', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\baa6a16876aed85be02da2f47dac39ed.jpg', 80, '2018-07-22 04:49:50', '2018-07-22 04:49:50'),
(47, 'repellat', 'Eos et eaque non corporis omnis.', 'ut', '54', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\6955ea84b9b8293137193df79a700690.jpg', 15, '2018-07-22 04:49:51', '2018-07-22 04:49:51'),
(48, 'aut', 'Sed deserunt et unde voluptates omnis.', 'esse', '62', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\a2140d94ccd64764b6cfc8ec42544ca2.jpg', 14, '2018-07-22 04:49:54', '2018-07-22 04:49:54'),
(49, 'ipsa', 'At porro quam sit voluptatibus.', 'aut', '39', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\db9b19399975ed40d2d2143d5225efc9.jpg', 7, '2018-07-22 04:49:55', '2018-07-22 04:49:55'),
(50, 'est', 'Sed quia nostrum et fugit praesentium esse.', 'autem', '76', 'C:\\Users\\Gabriel\\AppData\\Local\\Temp\\674aecf558dfdcab67b4891e60838b59.jpg', 36, '2018-07-22 04:49:57', '2018-07-22 04:49:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtor_renda`
--

DROP TABLE IF EXISTS `produtor_renda`;
CREATE TABLE IF NOT EXISTS `produtor_renda` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mes` date NOT NULL,
  `total` double(8,2) NOT NULL,
  `lucro` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtor_renda`
--

INSERT INTO `produtor_renda` (`id`, `mes`, `total`, `lucro`, `created_at`, `updated_at`) VALUES
(1, '1989-04-16', 3.16, 2.28, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(2, '2017-01-28', 3.39, 0.14, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(3, '2015-12-09', 1.48, 3.95, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(4, '1975-02-13', 7.11, 0.82, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(5, '1998-03-03', 5.71, 0.87, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(6, '1974-01-17', 7.71, 2.24, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(7, '1979-11-19', 1.75, 0.66, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(8, '1974-10-23', 2.14, 0.65, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(9, '2011-01-15', 1.78, 6.42, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(10, '1992-10-30', 7.56, 7.56, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(11, '1973-05-26', 6.87, 3.75, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(12, '2017-05-10', 5.02, 3.03, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(13, '1975-07-27', 2.90, 5.88, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(14, '1988-08-29', 3.97, 2.76, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(15, '2005-10-02', 6.01, 1.10, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(16, '1972-07-21', 0.50, 6.86, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(17, '1988-11-14', 7.85, 5.11, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(18, '1980-01-01', 6.18, 2.32, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(19, '2009-08-14', 3.39, 5.79, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(20, '1980-12-26', 4.85, 3.62, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(21, '2014-02-12', 7.48, 7.40, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(22, '2004-12-26', 0.74, 1.64, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(23, '1979-10-14', 2.33, 7.47, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(24, '1997-08-20', 2.26, 4.35, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(25, '1984-01-13', 0.17, 1.66, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(26, '1976-07-11', 4.91, 3.34, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(27, '2004-09-22', 4.39, 2.59, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(28, '1977-04-30', 2.65, 5.15, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(29, '1994-05-16', 4.83, 2.97, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(30, '1987-05-22', 6.30, 1.38, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(31, '2001-03-12', 4.78, 0.85, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(32, '1986-06-09', 2.35, 4.62, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(33, '1975-02-21', 5.74, 1.95, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(34, '2013-06-30', 0.38, 5.62, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(35, '2007-07-31', 3.72, 2.58, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(36, '1998-05-29', 2.70, 6.00, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(37, '2000-02-19', 2.21, 1.12, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(38, '1987-08-26', 5.81, 5.08, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(39, '2011-11-30', 2.37, 0.75, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(40, '2010-05-07', 2.27, 7.04, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(41, '2001-05-11', 2.60, 5.40, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(42, '1999-07-24', 2.14, 0.11, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(43, '2013-02-11', 1.82, 7.30, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(44, '1970-04-19', 1.98, 5.39, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(45, '1972-03-11', 0.68, 4.63, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(46, '2006-01-17', 7.74, 6.50, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(47, '1975-04-22', 2.55, 2.44, '2018-07-22 04:47:19', '2018-07-22 04:47:19'),
(48, '1982-08-26', 2.12, 1.87, '2018-07-22 04:47:20', '2018-07-22 04:47:20'),
(49, '1973-06-25', 5.94, 5.60, '2018-07-22 04:47:20', '2018-07-22 04:47:20'),
(50, '1996-01-18', 0.52, 2.47, '2018-07-22 04:47:20', '2018-07-22 04:47:20'),
(51, '1999-05-30', 2.84, 2.88, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(52, '1970-03-01', 4.12, 0.97, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(53, '2002-02-25', 4.03, 7.92, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(54, '2003-02-27', 7.31, 0.54, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(55, '2010-04-08', 2.13, 7.91, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(56, '1997-10-15', 5.53, 6.05, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(57, '2002-04-17', 0.68, 0.48, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(58, '1973-12-19', 0.03, 2.43, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(59, '1997-03-03', 3.94, 2.74, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(60, '2015-06-24', 4.45, 6.86, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(61, '1980-01-03', 7.00, 6.62, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(62, '1971-08-16', 3.14, 5.10, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(63, '1973-07-08', 7.91, 6.64, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(64, '2011-01-29', 3.71, 6.57, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(65, '2015-04-28', 2.85, 3.64, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(66, '2000-08-06', 3.21, 1.43, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(67, '2011-11-16', 3.65, 6.36, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(68, '2011-10-09', 5.17, 0.83, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(69, '1973-06-24', 0.57, 2.17, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(70, '1986-07-08', 1.71, 1.26, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(71, '2015-01-15', 1.31, 1.33, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(72, '1998-08-31', 0.14, 2.84, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(73, '2002-11-08', 1.17, 0.94, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(74, '1997-10-28', 5.51, 6.66, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(75, '2013-11-20', 2.34, 4.76, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(76, '1971-06-11', 1.73, 0.81, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(77, '2009-07-09', 2.36, 0.20, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(78, '2015-08-24', 3.69, 4.49, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(79, '1992-04-20', 5.44, 2.69, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(80, '2011-12-30', 2.73, 5.43, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(81, '1987-03-12', 5.50, 3.13, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(82, '1985-11-01', 5.59, 1.09, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(83, '2002-03-01', 6.57, 4.12, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(84, '1986-10-25', 5.39, 6.72, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(85, '2013-03-12', 1.20, 0.05, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(86, '2003-06-19', 7.03, 6.32, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(87, '1978-08-14', 5.94, 4.96, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(88, '2010-05-21', 2.79, 5.93, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(89, '1978-10-27', 4.23, 0.43, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(90, '2004-06-05', 3.85, 2.38, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(91, '1981-08-14', 0.60, 1.95, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(92, '2010-05-31', 2.28, 7.16, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(93, '2014-10-22', 7.88, 3.72, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(94, '2002-04-16', 7.63, 2.30, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(95, '2009-04-07', 4.52, 0.15, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(96, '2002-08-24', 1.16, 2.57, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(97, '2014-06-29', 6.89, 1.97, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(98, '1972-08-16', 6.26, 2.10, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(99, '1981-05-18', 4.03, 7.53, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(100, '1985-11-09', 0.18, 7.46, '2018-07-22 04:49:57', '2018-07-22 04:49:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtor_valor`
--

DROP TABLE IF EXISTS `produtor_valor`;
CREATE TABLE IF NOT EXISTS `produtor_valor` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `quilo` double(8,2) NOT NULL,
  `quilo_ promocao` double(8,2) NOT NULL,
  `unidade` double(8,2) NOT NULL,
  `unidade_promocao` double(8,2) NOT NULL,
  `caixa` double(8,2) NOT NULL,
  `caixa_promocao` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtor_valor`
--

INSERT INTO `produtor_valor` (`id`, `quilo`, `quilo_ promocao`, `unidade`, `unidade_promocao`, `caixa`, `caixa_promocao`, `created_at`, `updated_at`) VALUES
(1, 0.23, 0.40, 0.16, 1.65, 0.93, 0.61, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(2, 1.84, 1.64, 0.50, 1.36, 0.46, 0.04, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(3, 1.16, 1.80, 1.64, 0.25, 0.76, 1.91, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(4, 1.01, 1.62, 1.19, 0.91, 0.91, 0.11, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(5, 0.09, 1.34, 0.45, 0.12, 1.05, 0.51, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(6, 0.53, 0.76, 1.47, 0.85, 1.08, 0.81, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(7, 1.12, 0.89, 1.92, 1.92, 0.60, 0.41, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(8, 0.73, 0.46, 0.44, 0.14, 1.97, 0.22, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(9, 0.79, 0.32, 1.60, 1.78, 0.07, 0.37, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(10, 1.99, 0.33, 1.07, 1.97, 1.96, 0.75, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(11, 1.99, 0.25, 0.70, 0.50, 1.66, 1.13, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(12, 1.02, 0.41, 1.26, 1.44, 1.23, 0.95, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(13, 0.47, 0.66, 1.84, 1.66, 0.91, 1.35, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(14, 0.40, 0.37, 1.48, 1.02, 0.25, 0.40, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(15, 0.16, 0.63, 1.17, 0.64, 0.52, 0.39, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(16, 0.74, 0.12, 1.76, 0.77, 0.11, 1.48, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(17, 1.28, 0.24, 0.98, 1.08, 1.78, 0.42, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(18, 0.34, 0.87, 1.69, 0.56, 1.48, 1.40, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(19, 1.69, 0.31, 0.85, 0.66, 1.20, 0.12, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(20, 1.92, 0.14, 1.85, 0.71, 1.20, 0.92, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(21, 1.11, 1.14, 0.04, 0.02, 1.37, 1.65, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(22, 1.68, 1.89, 1.57, 0.35, 0.29, 0.28, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(23, 0.20, 0.13, 0.84, 0.41, 1.39, 1.99, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(24, 1.35, 1.55, 1.92, 1.77, 1.03, 1.99, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(25, 1.89, 1.50, 0.15, 1.51, 0.90, 1.67, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(26, 1.67, 0.53, 1.78, 0.26, 1.24, 0.87, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(27, 0.96, 0.54, 0.45, 0.07, 0.88, 0.80, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(28, 0.96, 0.53, 1.10, 0.28, 1.00, 1.51, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(29, 1.82, 0.77, 1.05, 1.21, 0.69, 0.51, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(30, 0.35, 0.39, 0.82, 0.46, 2.00, 0.29, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(31, 0.91, 1.39, 1.23, 0.30, 1.15, 0.16, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(32, 0.34, 1.17, 1.18, 0.23, 0.38, 0.71, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(33, 0.62, 1.03, 1.67, 0.04, 0.69, 1.98, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(34, 0.18, 1.85, 0.22, 1.74, 1.43, 0.31, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(35, 1.48, 1.90, 0.43, 0.86, 0.20, 1.26, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(36, 0.54, 1.45, 1.23, 1.63, 1.42, 0.66, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(37, 0.86, 0.48, 1.22, 1.58, 0.12, 0.86, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(38, 1.91, 0.36, 1.93, 1.10, 0.68, 1.73, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(39, 0.48, 1.04, 1.91, 0.23, 1.92, 0.17, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(40, 1.59, 1.00, 1.17, 1.02, 1.31, 0.25, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(41, 0.33, 1.93, 0.38, 1.56, 0.62, 1.32, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(42, 1.08, 1.70, 0.22, 1.14, 1.84, 1.05, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(43, 0.40, 1.23, 1.32, 1.17, 1.22, 1.44, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(44, 1.85, 0.11, 0.55, 1.68, 0.33, 1.10, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(45, 0.69, 1.79, 0.73, 1.23, 1.38, 0.82, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(46, 0.71, 1.13, 0.79, 1.86, 0.07, 0.36, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(47, 0.50, 1.37, 0.08, 1.48, 1.60, 1.38, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(48, 0.98, 1.39, 1.87, 1.57, 0.02, 1.46, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(49, 1.93, 0.91, 1.99, 0.66, 0.28, 0.47, '2018-07-22 04:49:57', '2018-07-22 04:49:57'),
(50, 0.91, 1.44, 1.98, 0.41, 0.92, 1.83, '2018-07-22 04:49:57', '2018-07-22 04:49:57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
