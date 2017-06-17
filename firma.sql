-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Cze 2017, 12:58
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `firma`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miejsca`
--

CREATE TABLE `miejsca` (
  `ID` int(11) NOT NULL,
  `MIEJSCE` varchar(20) NOT NULL,
  `DATA` date NOT NULL,
  `a7` varchar(20) NOT NULL,
  `a8` varchar(20) NOT NULL,
  `a9` varchar(20) NOT NULL,
  `a10` varchar(11) NOT NULL,
  `a11` varchar(11) NOT NULL,
  `a12` varchar(11) NOT NULL,
  `a13` varchar(11) NOT NULL,
  `a14` varchar(11) NOT NULL,
  `a15` varchar(11) NOT NULL,
  `a16` varchar(11) NOT NULL,
  `a17` varchar(11) NOT NULL,
  `a18` varchar(11) NOT NULL,
  `a19` varchar(11) NOT NULL,
  `a20` varchar(11) NOT NULL,
  `a21` varchar(11) NOT NULL,
  `a22` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `miejsca`
--

INSERT INTO `miejsca` (`ID`, `MIEJSCE`, `DATA`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`) VALUES
(1, 'AGH', '2017-06-06', '', '2', '2', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'UJ', '2016-02-25', '1', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'KRA', '2016-02-23', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Lokomotywa', '2016-03-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Czarnowiejska', '2017-06-06', '', '', '3', '4', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Czerwone Maki', '2017-06-06', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'UEK', '2017-06-06', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'PKW', '2017-06-06', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'PKS', '2017-06-06', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'UP', '2017-06-06', '', '', '', '', '2', '', '', '', '', '', '2', '', '', '', '', ''),
(11, 'UP2', '2017-06-06', '', '', '', '', '', '2', '', '', '', '2', '', '', '', '', '', ''),
(12, 'UP', '2017-06-06', '', '', '', '', '', '', '2', '2', '2', '', '', '', '', '', '', ''),
(13, 'Filutek', '2017-06-06', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'Kawioty', '2017-06-06', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'Lokomotywa', '2017-06-06', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'Rejmonta', '2017-06-06', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'Ingardena', '2017-06-06', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'Krupnicza', '2017-06-06', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `LOGIN` varchar(40) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL,
  `TYPE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`ID`, `LOGIN`, `PASSWORD`, `TYPE`) VALUES
(1, 'Ala', '202cb962ac59075b964b07152d234b70', 'Admin'),
(2, 'As', '250cf8b51c773f3f8dc8b4be867a9a02', 'User'),
(3, 'Bartek', '68053af2923e00204c3ca7c6a3150cf7', 'User'),
(4, 'Bartek', '76d80224611fc919a5d54f0ff9fba446', 'User');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `miejsca`
--
ALTER TABLE `miejsca`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `miejsca`
--
ALTER TABLE `miejsca`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
