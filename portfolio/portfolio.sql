-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 jun 2021 om 20:55
-- Serverversie: 10.4.17-MariaDB
-- PHP-versie: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `naam` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `company` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `telefoon` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `subject` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `bericht` varchar(512) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projecten`
--

CREATE TABLE `projecten` (
  `ID` int(11) NOT NULL,
  `projecten` varchar(256) NOT NULL,
  `omschrijving` varchar(512) NOT NULL,
  `pstartdate` date NOT NULL,
  `peinddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `projecten`
--

INSERT INTO `projecten` (`ID`, `projecten`, `omschrijving`, `pstartdate`, `peinddate`) VALUES
(1, 'Bingo', 'Een leuke spel van Bingo', '2021-06-07', '2021-06-18'),
(2, 'Ganzenbord', 'Ganzen race naar de einde', '2020-10-05', '2020-10-23'),
(3, 'Blackjack', 'Gok je weg uit', '2020-11-02', '2020-12-18');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `skills`
--

CREATE TABLE `skills` (
  `ID` int(11) NOT NULL,
  `skills` varchar(256) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `skills`
--

INSERT INTO `skills` (`ID`, `skills`, `value`) VALUES
(1, 'html', '90 %'),
(2, 'css', '60 %'),
(3, 'javascript', '80 %'),
(4, 'php', '50 %'),
(5, 'mysql', '70 %');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `werkervaring`
--

CREATE TABLE `werkervaring` (
  `ID` int(11) NOT NULL,
  `werkervaring` varchar(256) NOT NULL,
  `omschrijving` varchar(512) NOT NULL,
  `werkvan` date NOT NULL,
  `werktot` date NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `werkervaring`
--

INSERT INTO `werkervaring` (`ID`, `werkervaring`, `omschrijving`, `werkvan`, `werktot`, `foto`) VALUES
(1, 'Vakkenvullen', 'De vakken van een Albert Heijn vullen', '2017-07-07', '2021-06-18', ''),
(2, 'Servicedesk', 'Mensen helpen met computer problemen oplossen', '2020-08-28', '2021-06-18', ''),
(3, 'Netwerking', 'Netwerken bouwen voor verschillende redenen', '2020-08-25', '2021-06-18', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `projecten`
--
ALTER TABLE `projecten`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `werkervaring`
--
ALTER TABLE `werkervaring`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
