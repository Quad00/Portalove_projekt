-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: So 03.Dec 2022, 17:11
-- Verzia serveru: 10.4.24-MariaDB
-- Verzia PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `portalove_projekt`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `meno` varchar(100) NOT NULL,
  `heslo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `admin`
--

INSERT INTO `admin` (`id`, `meno`, `heslo`, `email`) VALUES
(1, 'admin', '955db0b81ef1989b4a4dfeae8061a9a6', '');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `kategorie`
--

CREATE TABLE `kategorie` (
  `id` int(11) NOT NULL,
  `nazov` varchar(255) NOT NULL,
  `kat_obrazok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `kategorie`
--

INSERT INTO `kategorie` (`id`, `nazov`, `kat_obrazok`) VALUES
(1, 'Domy', 'images/products/house.jpg'),
(2, 'Auta', 'images/products/car.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `kategorie_obrazky`
--

CREATE TABLE `kategorie_obrazky` (
  `id` int(11) NOT NULL,
  `kategorie_id` int(11) NOT NULL,
  `obrazky_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `kategorie_obrazky`
--

INSERT INTO `kategorie_obrazky` (`id`, `kategorie_id`, `obrazky_id`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(9, 1, 0),
(11, 1, 16);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nazov` varchar(255) NOT NULL,
  `page` varchar(100) NOT NULL,
  `subor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`id`, `nazov`, `page`, `subor`) VALUES
(1, 'Kategorie', 'home', 'index.php'),
(9, 'Admin panel', '', 'admin/index.php');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `obrazky`
--

CREATE TABLE `obrazky` (
  `id` int(11) NOT NULL,
  `popis` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `obrazky`
--

INSERT INTO `obrazky` (`id`, `popis`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Auto popis2', 'auto1.jpg', '2022-12-02 13:26:34', '2022-12-02 13:26:34'),
(2, 'Autopopis2', 'auto2.jpg', '2022-12-02 13:26:34', '2022-12-02 13:26:34'),
(3, 'Auto popis3', 'auto3.jpg', '2022-12-02 13:27:38', '2022-12-02 13:27:38'),
(4, 'Dom popis1', 'dom1.jpg', '2022-12-02 13:36:04', '2022-12-02 13:36:04'),
(5, 'Dom popis2', 'dom2.jpg', '2022-12-02 13:36:04', '2022-12-02 13:36:04'),
(6, 'Dom popis3', 'dom3.jpg', '2022-12-02 13:36:04', '2022-12-02 13:36:04');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `kategorie_obrazky`
--
ALTER TABLE `kategorie_obrazky`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `obrazky`
--
ALTER TABLE `obrazky`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pre tabuľku `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `kategorie_obrazky`
--
ALTER TABLE `kategorie_obrazky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pre tabuľku `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pre tabuľku `obrazky`
--
ALTER TABLE `obrazky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
