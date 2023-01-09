-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Lis 2022, 21:55
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `car_rent`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `info` varchar(1024) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `rented` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `photo`, `info`, `price`, `rented`) VALUES
(1, 'BMW', 'M3 CS', 'bmwm3.png', 'Rok produkcji: 2018, Przebieg: 12 000km, Pojemność skokowa: 3.0L, Rodzaj paliwa: Benzyna', '900 zł', 'no'),
(2, 'Audi', 'RS3', 'rs3.png', 'Rok produkcji: 2020, Przebieg: 8 000km, Pojemność skokowa: 2.5L, Rodzaj paliwa: Benzyna', '500 zł','no'),
(3, 'Mercedes-Benz' , 'A54 AMG', ' mbamg.png', 'Rok prodkcji: 2014, Przebieg: 36 235 km, Pojemność skokowa: 2.0L, Rodzaj paliwa: Benzyna', '450zł' , 'no'),
(4, 'Toyota', 'Supra mk5', 'toyotamk5.png', 'Rok produkcji: 2019, Przebieg: 24 000km, Pojemność skokowa: 3.0L, Rodzaj paliwa: Benzyna', '450 zł','no'),
(5, 'Nissan', 'Gt-r', 'gtr.png', 'Rok produkcji: 2016, Przebieg: 60 000km, Pojemność skokowa: 3.8L, Rodzaj paliwa: Benzyna', '200 zł','no'),
(6, 'Lamborghini', 'Aventador SVJ', 'svj.png', 'Rok produkcji: 2019, Przebieg: 5 000km, Pojemność skokowa: 6.5L, Rodzaj paliwa: Benzyna', '1200 zł','no'),
(7, 'Hyundai', 'i30N', 'i30n.png', 'Rok produkcji: 2019, Przebieg: 45 000km, Pojemność skokowa: 2.0L, Rodzaj paliwa: Benzyna', '350 zł','no'),
(8, 'Honda', 'NSX', 'hondansx.png', 'Rok produkcji: 2018, Przebieg: 23 000km, Pojemność skokowa: 3.5L, Rodzaj paliwa: Benzyna', '750 zł','no'),
(9, 'Ferrari', 'F8 Tributo', 'F8tributo.png', 'Rok produkcji: 2019, Przebieg: 31 000km, Pojemność skokowa: 3.9L, Rodzaj paliwa: Benzyna', '999 zł','no'),
(10, 'Ford', 'Mustang mach 1', 'mustangmach1.png', 'Rok produkcji: 2021, Przebieg: 9 000km, Pojemność skokowa: 5.0L, Rodzaj paliwa: Benzyna', '650 zł','no'),
(11, 'Dodge', 'Charger', 'dodgech.png', 'Rok produkcji: 1970, Przebieg: 72 000km, Pojemność skokowa: 7.0L, Rodzaj paliwa: Benzyna', '1200 zł','no'),
(12, 'Porsche', 'GT3-RS', 'porschegt3.png', 'Rok produkcji: 2018, Przebieg: 25 000km, Pojemność skokowa: 4.0L, Rodzaj paliwa: Benzyna', '820 zł','no'),
(13, 'Chevrolet', 'Camaro', 'chevroletcam.png', 'Rok produkcji: 2015, Przebieg: 50 000km, Pojemność skokowa: 6.2L, Rodzaj paliwa: Benzyna', '550 zł','no');


----------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
