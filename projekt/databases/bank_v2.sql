-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Mar 2022, 21:16
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
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `czat`
--

INSERT INTO `czat` (`pesel_klienta`, `autor`, `tresc`, `id`) VALUES
('86081824427', '86081824427', 'To jest test', 1),
('86081824427', '86081824427', 'I wygląda na to że działa', 2),
('86081824427', '02252044191', 'My również się cieszymy :)', 3);

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
(13, '86081824427', 110, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nr_tranzakcji`
--

CREATE TABLE `nr_tranzakcji` (
  `pesel` varchar(11) NOT NULL,
  `id_trazakcji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `nr_tranzakcji`
--

INSERT INTO `nr_tranzakcji` (`pesel`, `id_trazakcji`) VALUES
('86081824427', 1),
('86081824427', 2),
('86081824427', 3),
('86081824427', 4),
('86081824427', 5),
('86081824427', 6),
('90090515836', 7),
('86081824427', 8),
('86081824427', 9),
('86081824427', 10),
('86081824427', 11),
('86081824427', 12),
('86081824427', 13),
('86081824427', 14),
('86081824427', 15),
('86081824427', 16),
('86081824427', 17),
('86081824427', 18),
('86081824427', 19),
('86081824427', 20),
('86081824427', 21),
('86081824427', 22),
('86081824427', 23);

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
('86081824427', 2453.21);

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
(1, 'Artur', 'Kebab', 10, '2022-03-15'),
(2, 'Babcia', 'Artur', 30, '2022-03-15'),
(3, 'NBank', 'Artur', 300, '2022-03-15'),
(4, 'NBank', 'Artur', 100, '2022-03-15'),
(5, 'Xkom', 'Artur', 99, '2022-03-15'),
(6, 'Zahir', 'Artur', 99, '2022-03-15'),
(7, 'NBank', 'Artur', 320, '2022-03-15'),
(8, 'NBank', 'Artur', 320, '2022-03-15'),
(9, 'NBank', 'Artur', 320, '2022-03-15'),
(10, 'NBank', 'Artur', 110, '2022-03-15'),
(11, 'NBank', 'Artur', 110, '2022-03-15'),
(12, 'NBank', 'Artur', 100, '2022-03-15'),
(13, 'NBank', 'Artur', 110, '2022-03-15'),
(14, 'NBank', 'Artur', 400, '2022-03-15'),
(15, 'NBank', 'Artur', 220, '2022-03-15'),
(16, 'NBank', 'Artur', 220, '2022-03-15'),
(17, 'Artur', 'NBank', 200, '2022-03-15'),
(18, 'NBank', 'Artur', 110, '2022-03-15'),
(19, 'NBank', 'Artur', 110, '2022-03-15'),
(20, 'Artur', 'NBank', 100, '2022-03-15'),
(21, 'NBank', 'Artur', 110, '2022-03-15'),
(22, 'Artur', 'NBank', 100, '2022-03-15'),
(23, 'NBank', 'Artur', 110, '2022-03-15');

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
('86081824427', '123456', '40bd001563085fc35165329ea1ff5c5ecbdbbeef\r\n', 'Artur', 'Stachowiak', '2022-03-08', '2002-03-06', 'Klient', '', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `kredyt`
--
ALTER TABLE `kredyt`
  MODIFY `Id_kredytu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `nr_tranzakcji`
--
ALTER TABLE `nr_tranzakcji`
  MODIFY `id_trazakcji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT dla tabeli `tranzakcje`
--
ALTER TABLE `tranzakcje`
  MODIFY `id_tranzakcji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
