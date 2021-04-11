-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Ned 11. dub 2021, 19:36
-- Verze serveru: 10.4.14-MariaDB
-- Verze PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `autoservis`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `automobily`
--

CREATE TABLE `automobily` (
  `id` int(11) NOT NULL,
  `registranci_znacka` varchar(45) NOT NULL,
  `vyrobce` varchar(45) NOT NULL,
  `rok_vyroby` varchar(45) NOT NULL,
  `barva` varchar(45) NOT NULL,
  `obsah_motoru` varchar(45) NOT NULL,
  `typ_vozu_id` int(11) NOT NULL,
  `majitele_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `automobily`
--

INSERT INTO `automobily` (`id`, `registranci_znacka`, `vyrobce`, `rok_vyroby`, `barva`, `obsah_motoru`, `typ_vozu_id`, `majitele_id`) VALUES
(1, '7AM-0365', 'Ford', '1992', 'stříbrná', '1,2', 1, 1),
(2, '4Z7-7130', 'škoda', '2000', 'modrá', '2', 2, 2),
(3, '4Z2-9037', 'citroen', '2008', 'černá', '2,0', 3, 3);

-- --------------------------------------------------------

--
-- Struktura tabulky `majitele`
--

CREATE TABLE `majitele` (
  `id` int(11) NOT NULL,
  `jmeno` varchar(45) NOT NULL,
  `prijmeni` varchar(45) NOT NULL,
  `adresa` varchar(45) NOT NULL,
  `telefon` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `majitele`
--

INSERT INTO `majitele` (`id`, `jmeno`, `prijmeni`, `adresa`, `telefon`, `email`) VALUES
(1, 'Karel', 'Plochý', 'Praha Vinohrady 7', '605 049 566', 'KarelPlochy@seznam.cz'),
(2, 'Jindra', 'Kapr', 'Havřice 47', '605 253 429', 'JindraKapr@seznam.cz'),
(3, 'Jitka', 'Blankytná', 'Pod Krchovem 53', '703 023 566', 'JitkaBlankytna@seznam.cz');

-- --------------------------------------------------------

--
-- Struktura tabulky `opravy`
--

CREATE TABLE `opravy` (
  `id` int(11) NOT NULL,
  `datum` datetime NOT NULL,
  `doba_opravy` datetime NOT NULL,
  `zamestnanec_id` int(11) NOT NULL,
  `soucastky_id` int(11) NOT NULL,
  `pocet_ks` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `opravy`
--

INSERT INTO `opravy` (`id`, `datum`, `doba_opravy`, `zamestnanec_id`, `soucastky_id`, `pocet_ks`) VALUES
(1, '2021-02-17 00:00:00', '2021-02-17 02:00:00', 1, 2, '1'),
(2, '2021-02-15 00:00:00', '2021-02-15 01:50:00', 2, 2, '1'),
(3, '2021-02-27 00:00:00', '2021-02-28 03:00:00', 3, 1, '1');

-- --------------------------------------------------------

--
-- Struktura tabulky `soucastky`
--

CREATE TABLE `soucastky` (
  `id` int(11) NOT NULL,
  `zamestnanci_id` int(11) NOT NULL,
  `opravy_id` int(11) NOT NULL,
  `soucastka` varchar(45) NOT NULL,
  `typ_vozu` varchar(45) NOT NULL,
  `cena` varchar(45) NOT NULL,
  `skladem_ks` varchar(45) NOT NULL,
  `automobily_id` int(11) NOT NULL,
  `automobily_typ_vozu_id` int(11) NOT NULL,
  `automobily_majitele_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `soucastky`
--

INSERT INTO `soucastky` (`id`, `zamestnanci_id`, `opravy_id`, `soucastka`, `typ_vozu`, `cena`, `skladem_ks`, `automobily_id`, `automobily_typ_vozu_id`, `automobily_majitele_id`) VALUES
(1, 1, 1, 'ruční brzda', 'ford', '2000', '1', 1, 1, 1),
(2, 2, 2, 'těsnění', 'citroen', '2300', '2', 3, 3, 3),
(3, 3, 3, 'spojka', 'škoda', '3000', '0', 2, 2, 2);

-- --------------------------------------------------------

--
-- Struktura tabulky `typ_vozu`
--

CREATE TABLE `typ_vozu` (
  `id` int(11) NOT NULL,
  `typ_vozu` varchar(45) NOT NULL,
  `prevodovka` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `typ_vozu`
--

INSERT INTO `typ_vozu` (`id`, `typ_vozu`, `prevodovka`) VALUES
(1, 'Sedan', 'ne'),
(2, 'Kombi', 'ne'),
(3, 'Off-road', 'ano');

-- --------------------------------------------------------

--
-- Struktura tabulky `zamestnanci`
--

CREATE TABLE `zamestnanci` (
  `id` int(11) NOT NULL,
  `jmeno` varchar(45) NOT NULL,
  `prijmeni` varchar(45) NOT NULL,
  `telefon` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `zamestnanci`
--

INSERT INTO `zamestnanci` (`id`, `jmeno`, `prijmeni`, `telefon`) VALUES
(1, 'Honza', 'Kutil', '605 120 566'),
(2, 'Kryštof', 'Pokorný', '703 888 568'),
(3, 'Honimír', 'Dlouhý', '605 845 320');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `automobily`
--
ALTER TABLE `automobily`
  ADD PRIMARY KEY (`id`,`typ_vozu_id`,`majitele_id`);

--
-- Klíče pro tabulku `majitele`
--
ALTER TABLE `majitele`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `opravy`
--
ALTER TABLE `opravy`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `soucastky`
--
ALTER TABLE `soucastky`
  ADD PRIMARY KEY (`id`,`zamestnanci_id`,`opravy_id`,`automobily_id`,`automobily_typ_vozu_id`,`automobily_majitele_id`);

--
-- Klíče pro tabulku `typ_vozu`
--
ALTER TABLE `typ_vozu`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `zamestnanci`
--
ALTER TABLE `zamestnanci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `automobily`
--
ALTER TABLE `automobily`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pro tabulku `majitele`
--
ALTER TABLE `majitele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pro tabulku `opravy`
--
ALTER TABLE `opravy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pro tabulku `soucastky`
--
ALTER TABLE `soucastky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pro tabulku `typ_vozu`
--
ALTER TABLE `typ_vozu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pro tabulku `zamestnanci`
--
ALTER TABLE `zamestnanci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
