-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Sze 29. 15:20
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `ugyvedes`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `dokumentumok`
--

CREATE TABLE `dokumentumok` (
  `id` int(11) NOT NULL,
  `ugyfel_id` int(11) DEFAULT NULL,
  `ugyszam` int(11) DEFAULT NULL,
  `ugy_tipusa` varchar(50) DEFAULT NULL,
  `feltoltes_datuma` date DEFAULT NULL,
  `megjegyzes` text DEFAULT NULL,
  `fajl` varchar(200) DEFAULT NULL,
  `szamla` tinyint(1) DEFAULT NULL,
  `felado` varchar(100) DEFAULT NULL,
  `cimzett` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `feladatok`
--

CREATE TABLE `feladatok` (
  `id` int(11) NOT NULL,
  `ugyszam` int(11) DEFAULT NULL,
  `hatarido` date DEFAULT NULL,
  `feladat` text DEFAULT NULL,
  `csatolmany` varchar(200) DEFAULT NULL,
  `felado_neve` varchar(100) DEFAULT NULL,
  `cimzett_neve` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `id` int(11) NOT NULL,
  `nev` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jelszo` varchar(255) DEFAULT NULL,
  `ketfaktoros_belepes` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `hataridok`
--

CREATE TABLE `hataridok` (
  `id` int(11) NOT NULL,
  `ugyszam` int(11) DEFAULT NULL,
  `ugyfel_id` int(11) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `ido` time DEFAULT NULL,
  `leiras` text DEFAULT NULL,
  `helyszin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `levelezesek`
--

CREATE TABLE `levelezesek` (
  `id` int(11) NOT NULL,
  `ugyszam` int(11) DEFAULT NULL,
  `statusz` varchar(50) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `level` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `lezart_ugyek`
--

CREATE TABLE `lezart_ugyek` (
  `ugyszam` int(11) NOT NULL,
  `datum` date DEFAULT NULL,
  `ugyintezo_ugyved_neve` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `munkaorak`
--

CREATE TABLE `munkaorak` (
  `id` int(11) NOT NULL,
  `ugyszam` int(11) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `munka_reszlet` text DEFAULT NULL,
  `munka_kezdete` time DEFAULT NULL,
  `munka_vege` time DEFAULT NULL,
  `szunetek` decimal(4,2) DEFAULT NULL,
  `teljesites_igazolasa` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `szamlazas`
--

CREATE TABLE `szamlazas` (
  `id` int(11) NOT NULL,
  `sablon_szoveg` text DEFAULT NULL,
  `ugyfel_id` int(11) DEFAULT NULL,
  `ugyszam` int(11) DEFAULT NULL,
  `honap` varchar(20) DEFAULT NULL,
  `aktualis_munkaorak` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ugyek`
--

CREATE TABLE `ugyek` (
  `ugyszam` int(11) NOT NULL,
  `ugyfel_neve` varchar(100) DEFAULT NULL,
  `ellenerdeku_fel` varchar(100) DEFAULT NULL,
  `ugy_elnevezese` varchar(150) DEFAULT NULL,
  `ugy_tipusa` varchar(50) DEFAULT NULL,
  `leiras` text DEFAULT NULL,
  `statusz` varchar(50) DEFAULT NULL,
  `ugyintezo_ugyved_neve` varchar(100) DEFAULT NULL,
  `dijazas` varchar(50) DEFAULT NULL,
  `munkaorak_osszesitett` decimal(5,2) DEFAULT NULL,
  `hataridok` date DEFAULT NULL,
  `ertesites` varchar(50) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `szamlazva` tinyint(1) DEFAULT NULL,
  `dokumentumok` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ugyfelek`
--

CREATE TABLE `ugyfelek` (
  `ugyfel_id` int(11) NOT NULL,
  `ugyfel_neve` varchar(100) DEFAULT NULL,
  `szuletesi_ido` date DEFAULT NULL,
  `szuletesi_hely` varchar(100) DEFAULT NULL,
  `anyja_neve` varchar(100) DEFAULT NULL,
  `szemelyi_ig_szam` varchar(50) DEFAULT NULL,
  `lakcim` varchar(200) DEFAULT NULL,
  `telefonszam` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `adoszam` varchar(50) DEFAULT NULL,
  `cegjegyzekszam` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `dokumentumok`
--
ALTER TABLE `dokumentumok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ugyszam` (`ugyszam`),
  ADD KEY `ugyfel_id` (`ugyfel_id`);

--
-- A tábla indexei `feladatok`
--
ALTER TABLE `feladatok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ugyszam` (`ugyszam`);

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- A tábla indexei `hataridok`
--
ALTER TABLE `hataridok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ugyszam` (`ugyszam`),
  ADD KEY `ugyfel_id` (`ugyfel_id`);

--
-- A tábla indexei `levelezesek`
--
ALTER TABLE `levelezesek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ugyszam` (`ugyszam`);

--
-- A tábla indexei `lezart_ugyek`
--
ALTER TABLE `lezart_ugyek`
  ADD PRIMARY KEY (`ugyszam`);

--
-- A tábla indexei `munkaorak`
--
ALTER TABLE `munkaorak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ugyszam` (`ugyszam`);

--
-- A tábla indexei `szamlazas`
--
ALTER TABLE `szamlazas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ugyszam` (`ugyszam`),
  ADD KEY `ugyfel_id` (`ugyfel_id`);

--
-- A tábla indexei `ugyek`
--
ALTER TABLE `ugyek`
  ADD PRIMARY KEY (`ugyszam`);

--
-- A tábla indexei `ugyfelek`
--
ALTER TABLE `ugyfelek`
  ADD PRIMARY KEY (`ugyfel_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `dokumentumok`
--
ALTER TABLE `dokumentumok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `feladatok`
--
ALTER TABLE `feladatok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `hataridok`
--
ALTER TABLE `hataridok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `levelezesek`
--
ALTER TABLE `levelezesek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `munkaorak`
--
ALTER TABLE `munkaorak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `szamlazas`
--
ALTER TABLE `szamlazas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `ugyfelek`
--
ALTER TABLE `ugyfelek`
  MODIFY `ugyfel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `dokumentumok`
--
ALTER TABLE `dokumentumok`
  ADD CONSTRAINT `dokumentumok_ibfk_1` FOREIGN KEY (`ugyszam`) REFERENCES `ugyek` (`ugyszam`),
  ADD CONSTRAINT `dokumentumok_ibfk_2` FOREIGN KEY (`ugyfel_id`) REFERENCES `ugyfelek` (`ugyfel_id`);

--
-- Megkötések a táblához `feladatok`
--
ALTER TABLE `feladatok`
  ADD CONSTRAINT `feladatok_ibfk_1` FOREIGN KEY (`ugyszam`) REFERENCES `ugyek` (`ugyszam`);

--
-- Megkötések a táblához `hataridok`
--
ALTER TABLE `hataridok`
  ADD CONSTRAINT `hataridok_ibfk_1` FOREIGN KEY (`ugyszam`) REFERENCES `ugyek` (`ugyszam`),
  ADD CONSTRAINT `hataridok_ibfk_2` FOREIGN KEY (`ugyfel_id`) REFERENCES `ugyfelek` (`ugyfel_id`);

--
-- Megkötések a táblához `levelezesek`
--
ALTER TABLE `levelezesek`
  ADD CONSTRAINT `levelezesek_ibfk_1` FOREIGN KEY (`ugyszam`) REFERENCES `ugyek` (`ugyszam`);

--
-- Megkötések a táblához `lezart_ugyek`
--
ALTER TABLE `lezart_ugyek`
  ADD CONSTRAINT `lezart_ugyek_ibfk_1` FOREIGN KEY (`ugyszam`) REFERENCES `ugyek` (`ugyszam`);

--
-- Megkötések a táblához `munkaorak`
--
ALTER TABLE `munkaorak`
  ADD CONSTRAINT `munkaorak_ibfk_1` FOREIGN KEY (`ugyszam`) REFERENCES `ugyek` (`ugyszam`);

--
-- Megkötések a táblához `szamlazas`
--
ALTER TABLE `szamlazas`
  ADD CONSTRAINT `szamlazas_ibfk_1` FOREIGN KEY (`ugyszam`) REFERENCES `ugyek` (`ugyszam`),
  ADD CONSTRAINT `szamlazas_ibfk_2` FOREIGN KEY (`ugyfel_id`) REFERENCES `ugyfelek` (`ugyfel_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
