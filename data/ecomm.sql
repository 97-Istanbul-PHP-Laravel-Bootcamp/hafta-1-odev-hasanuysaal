-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Tem 2021, 08:56:23
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ecomm`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `title`, `description`, `image`, `created_at`) VALUES
(2, 0, 'Telefonlar', 'Akıllı telefonlar', '', '2021-07-13 19:40:58'),
(3, 0, 'Bilgisayarlar', 'Laptoplar, Masaüstü ve Oyun Bilgisayarları', '', '2021-07-13 19:41:59'),
(4, 0, 'Beyaz Eşya', 'Buzdolabı, Çamaşır Makinesi, Bulaşık Makinesi', '', '2021-07-13 19:43:09'),
(5, 0, 'Elektrikli Mutfak Aletleri', 'Elektrikli Mutfak Aletleri', '', '2021-07-15 08:39:46'),
(6, 0, 'TV, Ses ve Görüntü Sistemleri', 'TV, Ses ve Görüntü Sistemleri', '', '2021-07-15 08:40:07');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `uniq_id` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `category_id`, `detail`, `price`, `stock`, `uniq_id`, `user_id`, `image`, `status`, `created_at`) VALUES
(1, 'Ayfon 12', 'ayfon ios ', 2, 'asdsadsad sda sadsadasdas sadsadsa', 12000, 5, '12345', 5, '', 0, '0000-00-00 00:00:00'),
(2, 'Samsung 5', 'Akıllı telefonlar Android', 2, 'Temiz', 2500, 5, '0', 1, 0x31, 0, '0000-00-00 00:00:00'),
(3, 'Dell 22', 'Oyun Bilgisayarları', 3, '1050ti i7 16gb ram', 8000, 10, '0', 1, 0x31, 0, '2021-07-15 07:14:17'),
(4, 'Arçelik 15', 'Çamaşır Makinesi', 4, '697929', 3500, 6, '0', 1, 0x31, 0, '2021-07-15 07:52:28'),
(5, 'LG X6', 'Akıllı telefonlar Android', 2, 'Temiz', 6000, 6, '851815', 1, 0x31, 0, '2021-07-15 08:05:36'),
(6, 'Lenovo', 'pc', 3, 'win 10', 8500, 3, '709335', 2, 0x31, 0, '2021-07-15 08:36:36'),
(7, 'Xiaomi s6', 'Akıllı telefonlar', 2, 'miui 12', 5000, 15, '980021', 2, 0x31, 0, '2021-07-15 08:37:06'),
(8, 'Bosch 5', 'Klima', 4, '5 programlı', 6000, 3, '246497', 5, 0x31, 0, '2021-07-15 08:37:49'),
(9, 'Blender', 'Blender', 5, 'Blender', 500, 3, '360449', 1, 0x31, 0, '2021-07-15 08:40:44'),
(10, 'Sony', 'TV', 6, 'Smart Tv', 5000, 5, '623652', 1, 0x31, 0, '2021-07-15 08:41:09'),
(11, 'Kumtel Fırın', 'Fırın', 5, 'Midi Fırın', 600, 6, '915664', 1, 0x31, 0, '2021-07-15 08:41:35'),
(12, 'Monster A5', 'Monster', 3, 'PC', 2500, 3, '955598', 1, 0x31, 0, '2021-07-15 08:42:25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT 2,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `rank`, `created_at`) VALUES
(1, 'hasan', 'uysal', 'hasan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2021-07-12 13:55:49'),
(2, 'ahmet', 'mehmet', 'ahmet@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, '2021-07-12 13:58:42'),
(5, 'Hasan', 'Uysal', 'uysalhasan32@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, '2021-07-13 18:15:15'),
(6, 'ali', 'veli', 'ali@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, '2021-07-13 18:16:07');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
