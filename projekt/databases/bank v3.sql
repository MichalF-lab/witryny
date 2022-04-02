-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Kwi 2022, 16:15
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
  `pesel_klienta` varchar(11) NOT NULL,
  `autor` varchar(11) NOT NULL,
  `tresc` text NOT NULL,
  `id` int(11) NOT NULL,
  `nowa` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `czat`
--

INSERT INTO `czat` (`pesel_klienta`, `autor`, `tresc`, `id`, `nowa`) VALUES
('86081824427', '86081824427', 'To jest test', 1, 0),
('86081824427', '86081824427', 'I wygląda na to że działa', 2, 0),
('86081824427', '02252044191', 'My również się cieszymy :)', 3, 0),
('86081824427', '86081824427', 'Eloo', 9, 1),
('86081824427', '86081824427', 'W jakies sprawie', 15, 1),
('86081824427', '87110438598', 'Ok', 16, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kredyt`
--

CREATE TABLE `kredyt` (
  `Id_kredytu` int(11) NOT NULL,
  `pesel` varchar(11) NOT NULL,
  `rata` int(11) NOT NULL,
  `pozostalo_rat` int(11) NOT NULL,
  `pozostalo_do_spalacenia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kredyt`
--

INSERT INTO `kredyt` (`Id_kredytu`, `pesel`, `rata`, `pozostalo_rat`, `pozostalo_do_spalacenia`) VALUES
(2, '86081824427', 320, 0, 0),
(8, '86081824427', 110, 0, 0),
(9, '86081824427', 110, 0, 0),
(10, '86081824427', 220, 0, 0),
(11, '86081824427', 110, 0, 0),
(12, '86081824427', 110, 0, 0),
(13, '86081824427', 110, 0, 0),
(14, '86081824427', 990, 0, 0),
(16, '86081824427', 110, 0, 0),
(17, '86081824427', 440, 0, 0),
(18, '86081824427', 110, 0, 0),
(19, '86081824427', 110, 0, 0),
(20, '86081824427', 110, 0, 0),
(21, '86081824427', 110, 0, 0),
(22, '86081824427', 110, 0, 0),
(23, '86081824427', 11000, 0, 0),
(24, '86081824427', 11000, 0, 0),
(25, '86081824427', 110, 0, 0),
(26, '86081824427', 110, 0, 0),
(27, '86081824427', 660, 0, 0),
(28, '86081824427', 110, 0, 0),
(29, '86081824427', 110, 0, 0),
(30, '86081824427', 2200, 0, 0),
(31, '86081824427', 110, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nr_tranzakcji`
--

CREATE TABLE `nr_tranzakcji` (
  `id_trazakcji` int(11) NOT NULL,
  `pesel` varchar(11) NOT NULL,
  `pesel_nadawcy` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `nr_tranzakcji`
--

INSERT INTO `nr_tranzakcji` (`id_trazakcji`, `pesel`, `pesel_nadawcy`) VALUES
(1, '86081824427', '0'),
(2, '0', '86081824427'),
(3, '02252044191', '86081824427'),
(4, '86081824427', '02252044191'),
(5, '86081824427', '02252044191'),
(6, '02252044191', '86081824427'),
(7, '86081824427', '0'),
(8, '0', '86081824427'),
(9, '86081824427', '0'),
(10, '0', '86081824427'),
(11, '86081824427', '0'),
(12, '0', '86081824427'),
(13, '02252044191', '86081824427'),
(14, '86081824427', '0'),
(15, '0', '86081824427'),
(16, '86081824427', '0'),
(17, '0', '86081824427'),
(18, '86081824427', '0'),
(19, '0', '86081824427'),
(20, '86081824427', '0'),
(21, '02252044191', '86081824427'),
(22, '0', '86081824427'),
(23, '86081824427', '0'),
(24, '0', '86081824427'),
(25, '86081824427', '0'),
(26, '0', '86081824427'),
(27, '02252044191', '86081824427');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rachunek`
--

CREATE TABLE `rachunek` (
  `pesel` varchar(11) NOT NULL,
  `stan_konta` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `rachunek`
--

INSERT INTO `rachunek` (`pesel`, `stan_konta`) VALUES
('02252044191', 2283.55),
('86081824427', 88551.76);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tranzakcje`
--

CREATE TABLE `tranzakcje` (
  `id_tranzakcji` int(11) NOT NULL,
  `nadawca` text NOT NULL,
  `odbiorca` text NOT NULL,
  `ile` int(11) NOT NULL,
  `data` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `tranzakcje`
--

INSERT INTO `tranzakcje` (`id_tranzakcji`, `nadawca`, `odbiorca`, `ile`, `data`) VALUES
(1, 'Artur', 'NBank', 100, '2022-03-21'),
(2, 'NBank', 'Artur', 110, '2022-03-21'),
(3, 'Artur', 'Fabian', 12, '2022-03-21'),
(4, 'Artur', 'Fabian', 0, '2022-03-21'),
(5, 'Artur', 'Fabian', 1, '2022-03-21'),
(6, 'Fabian', 'Artur', 10, '2022-03-21'),
(7, 'Artur', 'NBank', 10000, '2022-03-21'),
(8, 'NBank', 'Artur', 11000, '2022-03-21'),
(9, 'Artur', 'NBank', 10000, '2022-03-21'),
(10, 'NBank', 'Artur', 11000, '2022-03-21'),
(11, 'Artur', 'NBank', 100, '2022-03-21'),
(12, 'NBank', 'Artur', 110, '2022-03-21'),
(13, 'Fabian', 'Artur', 1, '2022-03-21'),
(14, 'Artur', 'NBank', 100, '2022-03-21'),
(15, 'NBank', 'Artur', 110, '2022-03-21'),
(16, 'Artur', 'NBank', 600, '2022-03-21'),
(17, 'NBank', 'Artur', 660, '2022-03-21'),
(18, 'Artur', 'NBank', 100, '2022-03-22'),
(19, 'NBank', 'Artur', 110, '2022-03-22'),
(20, 'Artur', 'NBank', 100, '2022-03-22'),
(21, 'Fabian', 'Artur', 2, '2022-03-22'),
(22, 'NBank', 'Artur', 110, '2022-03-22'),
(23, 'Artur', 'NBank', 2000, '2022-03-22'),
(24, 'NBank', 'Artur', 2200, '2022-03-22'),
(25, 'Artur', 'NBank', 100, '2022-03-23'),
(26, 'NBank', 'Artur', 110, '2022-03-23'),
(27, 'Fabian', 'Artur', 1000, '2022-03-23');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `pesel` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `login` text CHARACTER SET utf8mb4 NOT NULL,
  `hasło` text CHARACTER SET utf8mb4 NOT NULL,
  `Imie` text CHARACTER SET utf8mb4 NOT NULL,
  `Nazwisko` text CHARACTER SET utf8mb4 NOT NULL,
  `data_dolaczenia` date NOT NULL DEFAULT current_timestamp(),
  `data_urodzenia` date NOT NULL,
  `rodzaj_konta` text CHARACTER SET utf8mb4 NOT NULL,
  `pytanie_pom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ile_nieprzeczytanych` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`pesel`, `login`, `hasło`, `Imie`, `Nazwisko`, `data_dolaczenia`, `data_urodzenia`, `rodzaj_konta`, `pytanie_pom`, `ile_nieprzeczytanych`) VALUES
('02252044191', '857043', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'Fabian', 'Fabian', '2022-03-15', '2002-05-10', 'moderator', 'Biały', 0),
('86081824427', '123456', '40bd001563085fc35165329ea1ff5c5ecbdbbeef\r\n', 'Artur', 'Stachowiak', '2022-03-08', '2002-03-06', 'client', '', 0),
('87110438598', '123455', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'Andrei', 'Sokołowski', '2022-03-22', '1992-03-12', 'support', 'Samara', 0),
('98072714848', '111111', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Michał', 'Frąckowiak', '2022-03-22', '2002-02-04', 'admin', 'Dosia', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `czat`
--
ALTER TABLE `czat`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kredyt`
--
ALTER TABLE `kredyt`
  ADD PRIMARY KEY (`Id_kredytu`);

--
-- Indeksy dla tabeli `nr_tranzakcji`
--
ALTER TABLE `nr_tranzakcji`
  ADD PRIMARY KEY (`id_trazakcji`);

--
-- Indeksy dla tabeli `rachunek`
--
ALTER TABLE `rachunek`
  ADD PRIMARY KEY (`pesel`);

--
-- Indeksy dla tabeli `tranzakcje`
--
ALTER TABLE `tranzakcje`
  ADD PRIMARY KEY (`id_tranzakcji`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`pesel`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `czat`
--
ALTER TABLE `czat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `kredyt`
--
ALTER TABLE `kredyt`
  MODIFY `Id_kredytu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT dla tabeli `nr_tranzakcji`
--
ALTER TABLE `nr_tranzakcji`
  MODIFY `id_trazakcji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT dla tabeli `tranzakcje`
--
ALTER TABLE `tranzakcje`
  MODIFY `id_tranzakcji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
