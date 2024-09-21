-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3306
-- Timp de generare: apr. 25, 2023 la 12:22 PM
-- Versiune server: 8.0.31
-- Versiune PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `alegere_teme_proiect`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `proiecte`
--

DROP TABLE IF EXISTS `proiecte`;
CREATE TABLE IF NOT EXISTS `proiecte` (
  `id_proiect` int NOT NULL AUTO_INCREMENT,
  `proiect` varchar(50) NOT NULL,
  `ales` tinyint NOT NULL DEFAULT '2',
  PRIMARY KEY (`id_proiect`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Eliminarea datelor din tabel `proiecte`
--

INSERT INTO `proiecte` (`id_proiect`, `proiect`, `ales`) VALUES
(1, 'Magazin Online', 0),
(2, 'Biblioteca Virtuala', 1),
(3, 'Licitatii online', 0),
(4, 'Avizier examene', 1),
(5, 'Chat cu istoric si useri', 1),
(6, 'Parser rezultate cautare, statistici, admin', 1),
(7, 'Aplicatie de management de stocuri', 1),
(8, 'Content Management System', 1),
(9, 'Generare de grafice din XML / alte date, admin', 1),
(10, 'Masina de votat', 1),
(11, 'Editare fisiere prin FTP -> HTML (interpretare cod', 1),
(12, 'Registru matricol', 1),
(13, 'Prezenta online pentru cursuri si laboratoare', 1),
(14, 'Sistem alegere teme proiect', 1),
(16, 'Chestionar online', 2);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `proiecte_alese`
--

DROP TABLE IF EXISTS `proiecte_alese`;
CREATE TABLE IF NOT EXISTS `proiecte_alese` (
  `id_proiecte_alese` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_proiect` int NOT NULL,
  PRIMARY KEY (`id_proiecte_alese`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Eliminarea datelor din tabel `proiecte_alese`
--

INSERT INTO `proiecte_alese` (`id_proiecte_alese`, `id_user`, `id_proiect`) VALUES
(14, 7, 3),
(13, 4, 1),
(12, 2, 3),
(11, 1, 5);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `useri`
--

DROP TABLE IF EXISTS `useri`;
CREATE TABLE IF NOT EXISTS `useri` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nume_user` varchar(20) NOT NULL,
  `prenume_user` varchar(20) NOT NULL,
  `parola` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Eliminarea datelor din tabel `useri`
--

INSERT INTO `useri` (`id_user`, `nume_user`, `prenume_user`, `parola`) VALUES
(1, 'user', 'user', 'user'),
(2, 'Ionescu', 'Magda', '123'),
(7, 'Popa', 'Ioana', 'popa'),
(4, 'Ionescu', 'Maria', '1234'),
(6, 'Rus', 'Adina', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
