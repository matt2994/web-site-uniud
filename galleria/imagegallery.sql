-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ago 02, 2019 alle 12:37
-- Versione del server: 10.3.16-MariaDB
-- Versione PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imagegallery`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploadedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `photos`
--

INSERT INTO `photos` (`id`, `path`, `uploadedOn`) VALUES
(60, '1564739680andrea.jpg', '2019-08-02 11:54:40'),
(62, '1564740867universitÃ .jpg', '2019-08-02 12:14:27'),
(63, '1564742017mattia.png', '2019-08-02 12:33:37'),
(64, '1564742145photo5994792825386020568.jpg', '2019-08-02 12:35:45'),
(65, '1564742145photo5994792825386020567.jpg', '2019-08-02 12:35:45'),
(66, '1564742145photo5994792825386020569.jpg', '2019-08-02 12:35:45'),
(67, '1564742145photo5994792825386020578.jpg', '2019-08-02 12:35:45'),
(68, '1564742145photo5994792825386020579.jpg', '2019-08-02 12:35:45');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
