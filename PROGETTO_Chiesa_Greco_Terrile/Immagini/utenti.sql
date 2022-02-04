-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Feb 04, 2022 alle 08:04
-- Versione del server: 8.0.28-0ubuntu0.20.04.3
-- Versione PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `S4825218`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `Nome` varchar(20) NOT NULL,
  `Cognome` varchar(25) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `ID` bigint UNSIGNED NOT NULL,
  `news` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`Nome`, `Cognome`, `Password`, `Mail`, `ID`, `news`) VALUES
('pollo', 'pollo', '$2y$10$QFRSXi1XwV.var5TkUCzQeD8V0HLMWGkjeYt3SGLWL0myz8OGLEXK', 'pollo@gmail.com', 33, NULL),
('marzia', 'Chiesa', '$2y$10$5XYcmGWnFssVQ7hTH5wspudPBDhz9URTXuaIZQnJy.hUjuRfGs8Da', 'chiesfghanicola54@gmail.com', 129, NULL),
('Nicola', 'Chiesa', '$2y$10$6YIk/a3N2ETOGUBO2epzGuikhNlZ/adXsRi0XpStD9D1nyXw9RC62', 'chiesaasdasdnicola54@gmail.com', 130, NULL),
('Nicola', 'benzi', '$2y$10$vD7RjwQFLQwWO9skppAUlOaYvEkc8qId8JwSI/2KSgmskxxqarGB2', 'progettoimmagine@gmail.com', 131, NULL),
('Nicola', 'Chiesa', '$2y$10$dMbaU3GFGYSJ7otomJDSRO5y16bL1GfcW0NTEB3sT1UPBQdyu59ZO', 'chiesanicola54@gmail.com', 132, NULL);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `ID` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
