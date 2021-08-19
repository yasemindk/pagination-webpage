-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Tem 2021, 10:54:18
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `pagination`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pagi`
--

CREATE TABLE `pagi` (
  `id` int(11) NOT NULL,
  `user_names` varchar(100) NOT NULL,
  `user_surnames` varchar(150) NOT NULL,
  `user_job` varchar(150) NOT NULL,
  `user_age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `pagi`
--

INSERT INTO `pagi` (`id`, `user_names`, `user_surnames`, `user_job`, `user_age`) VALUES
(1, 'ege', 'erbilen', 'bilgisayar', 45),
(2, 'ertan ', 'yeşilova', 'mimar', 23),
(3, 'nejat', 'özsoy', 'dokdor', 12),
(4, 'ertan ', 'yeşilova', 'mimar', 25),
(5, 'inci', 'kütük', 'usta', 56),
(6, 'ertan ', 'yeşilova', 'bakkal', 18),
(7, 'ahmet', 'topbaş', 'dokdor', 31),
(8, 'sultan', 'eyüp', 'veteriner', 46),
(9, 'ali altan', 'yaşayan', 'bilgisayar', 41),
(10, 'ertan ', 'yeşilova', 'mimar', 14),
(11, 'talha', 'özsoy', 'manav', 47),
(12, 'atıl', 'yeşilova', 'mimar', 36),
(13, 'gözde', 'güven', 'usta', 47),
(14, 'ertan ', 'saçlı', 'dişçi', 66),
(15, 'nursel', 'yanni', 'manav', 25),
(16, 'sude', 'yaman', 'veteriner', 44),
(17, 'esma', 'ataş ', 'muhasebe', 54),
(18, 'ılgın', 'namlı', 'bakkal', 23),
(19, 'esma', 'ataş ', 'muhasebe', 54),
(20, 'mehmet', 'karaman', 'iş adamı', 54),
(21, 'feriha', 'gündüz', 'ev hanımı', 32),
(22, 'mehmet', 'veli', 'muhasebe', 32),
(23, 'cengiz', 'levent', 'reklamcı', 41),
(24, 'yusuf', 'ziya', 'araba ustası', 48),
(25, 'erdal', 'yağcı', 'öğretmen', 23),
(26, 'bengü', 'çiftçi', 'ev hanımı', 53),
(27, 'elif', 'seda', 'dokdor', 34),
(28, 'sibel', 'dişli', 'reklamcı', 25),
(29, 'ertunç', 'per', 'vekil', 63),
(30, 'azra', 'güç', 'mühendis', 39),
(31, 'ayşe', 'toprak', 'öğretmen', 39),
(32, 'muhammed', 'kaya', 'şöför', 25),
(33, 'zehra', 'tansu', 'öğretmen', 45),
(34, 'hande', 'ayaz', 'sanatçı', 43),
(35, 'bengü', 'demircan', 'müzisyen', 65),
(36, 'yücel', 'dindar', 'kasiyer', 25),
(37, 'ömer ', 'taha', 'mühendis', 22),
(38, 'önder', 'olgun', 'gazeteci', 55),
(39, 'dursun', 'tekin', 'dokdor', 35),
(40, 'adnan', 'akbulut', 'öğretmen', 56);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `pagi`
--
ALTER TABLE `pagi`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `pagi`
--
ALTER TABLE `pagi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
