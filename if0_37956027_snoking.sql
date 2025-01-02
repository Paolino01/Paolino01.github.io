-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql304.infinityfree.com
-- Creato il: Dic 29, 2024 alle 04:28
-- Versione del server: 10.6.19-MariaDB
-- Versione PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_37956027_snoking`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `buildings`
--

CREATE TABLE `buildings` (
  `buildingId` int(11) NOT NULL,
  `type` varchar(50) NOT NULL COMMENT 'Church, Castle, Tower, etc',
  `startedOn` date NOT NULL DEFAULT current_timestamp(),
  `positionX` int(11) NOT NULL,
  `positionY` int(11) NOT NULL,
  `rotation` int(11) NOT NULL DEFAULT 0 COMMENT 'Può essere ruotato di 90, 180 o 270 gradi',
  `size` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0: completed, 1: in construction, 2: destroyed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `stats`
--

CREATE TABLE `stats` (
  `statId` int(11) NOT NULL,
  `nReport` int(11) NOT NULL DEFAULT 0,
  `nBuildingsCompleted` int(11) NOT NULL DEFAULT 0,
  `nBuildingsDestroyed` int(11) NOT NULL DEFAULT 0,
  `dayLastSmoked` date NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `stats`
--

INSERT INTO `stats` (`statId`, `nReport`, `nBuildingsCompleted`, `nBuildingsDestroyed`, `dayLastSmoked`) VALUES
(2, 1, 0, 1, '2024-12-29');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`buildingId`);

--
-- Indici per le tabelle `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`statId`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `buildings`
--
ALTER TABLE `buildings`
  MODIFY `buildingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `stats`
--
ALTER TABLE `stats`
  MODIFY `statId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
