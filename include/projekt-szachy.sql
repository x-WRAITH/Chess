-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Maj 2021, 20:58
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt-szachy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `szachy`
--

CREATE TABLE `szachy` (
  `id` int(11) NOT NULL,
  `Imie` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Nazwisko` text NOT NULL,
  `Punkty` int(11) NOT NULL,
  `Wygrane` int(11) NOT NULL,
  `Przegrane` int(11) NOT NULL,
  `Remisy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `szachy`
--

INSERT INTO `szachy` (`id`, `Imie`, `Nazwisko`, `Punkty`, `Wygrane`, `Przegrane`, `Remisy`) VALUES
(14, 'Janfdff76575', 'Kowalss', 156, 0, 0, 0),
(17, 'Franek', 'Marian', 25, 0, 0, 0),
(20, 'Jan', 'Maciek', 4, 0, 0, 0),
(21, 'Jan', 'Maciek', 0, 0, 0, 0),
(22, 'Jan', 'Maciek', 10, 0, 0, 0),
(23, 'Jan', 'Kowalski', 0, 0, 0, 0),
(25, 'Jan', 'Maciek', 0, 0, 0, 0),
(27, 'Jan', 'Kowalskissss', 0, 0, 0, 0),
(28, 'Jan', 'Kowalskifgdfgdfg', 0, 0, 0, 0),
(29, 'dfgdfsgsdfgf', 'jghjfghjsfgjs', 0, 0, 0, 0),
(30, 'm./,m.m,', 'm,.m,.m,.', 0, 0, 0, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `szachy`
--
ALTER TABLE `szachy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `szachy`
--
ALTER TABLE `szachy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
