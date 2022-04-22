-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 apr 2022 om 23:42
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caf_s`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adminlogin`
--

CREATE TABLE `adminlogin` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `adminlogin`
--

INSERT INTO `adminlogin` (`name`, `username`, `password`) VALUES
('Yorick te Riele', 'yorickstr', 'hoihoi123');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `voorraad`
--

CREATE TABLE `voorraad` (
  `ID` int(5) NOT NULL,
  `klasse` varchar(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `beschrijving` varchar(300) NOT NULL,
  `naam` varchar(30) NOT NULL,
  `prijs` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `voorraad`
--

INSERT INTO `voorraad` (`ID`, `klasse`, `foto`, `beschrijving`, `naam`, `prijs`) VALUES
(1, 'friet', 'https://i.ibb.co/PYF1WP0/friet1.png', 'Heerlijke verse friet met 80%+ mayonaise.', 'Robuuste Paprikafriet', '€4,99'),
(2, 'friet', 'https://i.ibb.co/ZG4DRjp/friet2.jpg', 'Verse rasfriet gemaakt van vastkokende aardappelen.', 'Knapperige Rasfriet', '€8,99'),
(4, 'snacks', 'https://i.ibb.co/TB6pzDh/snack2.png', 'Onze heerlijke knapperige kipnuggets komen al jaren lang als beste uit de test. Proef nu waarom!', 'Kipnuggies', '€3,49'),
(5, 'burgers', 'https://i.ibb.co/hBYJMB3/burger1.jpg', 'Zachte burger met rundvlees, tomaat, kaas, kruidenboter en peterselie.', 'El Burger S', '€5,99'),
(3, 'snacks', 'https://i.ibb.co/bFf3n94/snack1.png', 'Heerlijke lichtpittige rundvleessnack met onze speciale Mehico-saus.', 'El Mexicano', '€4,99'),
(6, 'Chinees', 'https://i.ibb.co/QjT066v/caf-s.png', 'Heerlijke unieke mix van bami & groenten + unieke kruiden (zowel oosters als westers)', 'Bami S', '10,99');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
