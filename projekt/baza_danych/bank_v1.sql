-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 04 Mar 2022, 11:49
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bank`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czat`
--

CREATE TABLE `czat` (
  `id_rozmowy` int(11) NOT NULL,
  `autor` varchar(11) NOT NULL,
  `tresc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nr_rachunku`
--

CREATE TABLE `nr_rachunku` (
  `pesel` varchar(11) NOT NULL,
  `nr_racunku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rachunek`
--

CREATE TABLE `rachunek` (
  `nr_rachunku` int(11) NOT NULL,
  `stan_konta` int(11) NOT NULL,
  `id_karty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tranzakcje`
--

CREATE TABLE `tranzakcje` (
  `id_tranzakcji` int(11) NOT NULL,
  `nadawca` int(11) NOT NULL,
  `odbiorca` int(11) NOT NULL,
  `ile` int(11) NOT NULL,
  `data` date NOT NULL DEFAULT current_timestamp(),
  `autoryzacja` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `użytkownicy`
--

CREATE TABLE `użytkownicy` (
  `pesel` varchar(11) NOT NULL,
  `login` text NOT NULL,
  `hasło` text NOT NULL,
  `Imie` text NOT NULL,
  `Nazwisko` text NOT NULL,
  `data_dolaczenia` date NOT NULL DEFAULT current_timestamp(),
  `data_urodzenia` date NOT NULL,
  `id_blika` int(11) NOT NULL,
  `rodzaj_konta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zgłoszenia`
--

CREATE TABLE `zgłoszenia` (
  `id_zgłoszenia` int(11) NOT NULL,
  `prcownik` varchar(11) NOT NULL,
  `klient` int(11) NOT NULL,
  `id_rozmowy` text NOT NULL,
  `czy_zakończono` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `nr_rachunku`
--
ALTER TABLE `nr_rachunku`
  ADD PRIMARY KEY (`nr_racunku`);

--
-- Indeksy dla tabeli `rachunek`
--
ALTER TABLE `rachunek`
  ADD PRIMARY KEY (`nr_rachunku`);

--
-- Indeksy dla tabeli `tranzakcje`
--
ALTER TABLE `tranzakcje`
  ADD PRIMARY KEY (`id_tranzakcji`);

--
-- Indeksy dla tabeli `zgłoszenia`
--
ALTER TABLE `zgłoszenia`
  ADD PRIMARY KEY (`id_zgłoszenia`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `nr_rachunku`
--
ALTER TABLE `nr_rachunku`
  MODIFY `nr_racunku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `zgłoszenia`
--
ALTER TABLE `zgłoszenia`
  MODIFY `id_zgłoszenia` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
