-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 07 okt 2017 om 20:52
-- Serverversie: 5.6.35
-- PHP-versie: 7.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superadmin`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `affiliation`
--

CREATE TABLE IF NOT EXISTS `affiliation` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `affiliation`
--

INSERT INTO `affiliation` (`id`, `name`) VALUES
(1, 'Avengers'),
(2, 'Inhumans'),
(3, 'Spider-Friends'),
(4, 'Defenders'),
(5, 'Guardians of the Galaxy');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `superheroes`
--

CREATE TABLE IF NOT EXISTS `superheroes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `afn_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `superheroes`
--

INSERT INTO `superheroes` (`id`, `name`, `gender`, `afn_id`) VALUES
(1, 'Spider-Man', 'male', 3),
(2, 'Captain America', 'male', 1),
(3, 'Hulk', 'male', 1),
(4, 'Star-Lord', 'male', 5),
(5, 'Gamora', 'female', 5);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `affiliation`
--
ALTER TABLE `affiliation`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `superheroes`
--
ALTER TABLE `superheroes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `afn_id` (`afn_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `affiliation`
--
ALTER TABLE `affiliation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `superheroes`
--
ALTER TABLE `superheroes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `superheroes`
--
ALTER TABLE `superheroes`
  ADD CONSTRAINT `sup_afn_fk` FOREIGN KEY (`afn_id`) REFERENCES `affiliation` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
