-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 04, 2022 alle 09:07
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saw`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `Nome` varchar(60) NOT NULL,
  `quantita` int(11) NOT NULL,
  `prezzo` float NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`Nome`, `quantita`, `prezzo`, `ID`) VALUES
('Durlindana', 57, 555.6, 1),
('Excalibur', 33, 33, 2),
('Mjolnir', 444, 44, 3),
('Olifante', 55, 55, 4),
('Pomo della Discordia', 44, 44, 5),
('Ruyi Jingu Bang', 55, 7777, 6);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
