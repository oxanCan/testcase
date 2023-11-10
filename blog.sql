-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Kas 2023, 11:27:29
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_details` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`about_id`, `about_details`) VALUES
(1, 'Mauris elit leo, blandit quis venenatis et, varius id tellus. Nullam consequat, mi gravida interdum mollis, sem lorem dictum quam, eu faucibus lacus quam nec dolor. Pellentesque et mattis sem. Nunc tristique dignissim dapibus. Aenean porta varius dictum. Donec malesuada ante ut blandit lacinia. Donec tincidunt nisi sapien, quis interdum lectus ornare vitae. Sed volutpat ex eu pulvinar placerat. Pellentesque a bibendum felis, et euismod urna. Sed imperdiet placerat eros vestibulum dictum. Nam neque lorem, malesuada eu tincidunt eu, tincidunt quis metus. In augue sem, porttitor at ex et, aliquam fermentum Mauris elit leo, blandit quis venenatis et, varius id tellus. Nullam consequat, mi gravida interdum mollis, sem lorem dictum quam, eu faucibus lacus quam nec dolor. Pellentesque et mattis sem. Nunc tristique dignissim dapibus. Aenean porta varius dictum. Donec malesuada ante ut blandit lacinia. Donec tincidunt nisi sapien, quis interdum lectus ornare vitae. Sed volutpat ex eu pulvinar placerat. Pellentesque a bibendum felis, et euismod urna. Sed imperdiet placerat eros vestibulum dictum. Nam neque lorem, malesuada eu tincidunt eu, tincidunt quis metus. In augue sem, porttitor at ex et, aliquam fermentum\n\n\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(25) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `short_tag` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `blog_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blog_id`, `category_id`, `title`, `short_tag`, `date`, `blog_text`) VALUES
(1, '9', 'x', 'x', '2023-11-09 19:37:27', '<p>312321</p>\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog_users`
--

CREATE TABLE `blog_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog_users`
--

INSERT INTO `blog_users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Ozan Can', '1234564@gmail.com', 'adcd7048512e64b48da55b027577886ee5a36350'),
(2, 'Ozan Can', 'mad@gmail.com', 'adcd7048512e64b48da55b027577886ee5a36350');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(9, 'DENEME');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_mail` varchar(1000) NOT NULL,
  `contact_phone` varchar(500) NOT NULL,
  `contact_message` varchar(2555) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_mail`, `contact_phone`, `contact_message`, `status`) VALUES
(2, '', 'ozancank11@gmail.com', '5555555555', 'ALALALDSKSAKLDJALSKJDHLSKADSALK', '1'),
(3, 'DSADAS', 'DSADAS', 'DASDAS', 'DSADASDAS', '1'),
(6, 'OXAN', 'OXAN', 'OXAN', 'OXAN', '1'),
(7, 'saasd', 'dsa', 'dsa', 'dsa', '1'),
(8, '31312', '321321', '3213213', '21321323321', '1'),
(9, 'Madness Karacan', 'djsakhdjsa@danskldas.com', '1233213213213', 'DSIHADKJASHDKAJSGDHJADK', '1'),
(10, '321', '231321', '321321', '321321', '1'),
(11, '3123', '213213', '12321', '332132', '1'),
(12, '321321', '3213', '213213', '321321', '1'),
(13, '3213', '123213', '2313', '21321321', '1'),
(14, '213213', '23133', '23321', '321321', '1'),
(15, '321321', '321321', '31232131', '2321321321', '1'),
(16, '3213213', '321321', '3213', '3213213', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `href` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`page_id`, `parent_id`, `page_name`, `href`) VALUES
(1, 0, 'Yönetim', ''),
(2, 1, 'Bloglar', 'bloglist'),
(3, 1, 'Yeni Yazı', 'addblog'),
(4, 1, 'İletişim Formları', 'contact'),
(5, 1, 'Hakkımda Düzenleme', 'editabout'),
(7, 1, 'Rol Düzenleme', 'roles'),
(8, 1, 'Moderatör Ekle', 'addmod');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `permission`
--

CREATE TABLE `permission` (
  `permission_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `control` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `permission`
--

INSERT INTO `permission` (`permission_id`, `page_id`, `role_id`, `control`) VALUES
(1, 4, 2, '0'),
(2, 5, 2, '0'),
(3, 7, 2, '0'),
(4, 2, 1, '1'),
(5, 3, 1, '1'),
(6, 4, 1, '1'),
(7, 5, 1, '1'),
(8, 7, 1, '1'),
(9, 8, 1, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Moderatör');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(25) NOT NULL,
  `user_name` varchar(55) NOT NULL,
  `user_phone` int(15) NOT NULL,
  `user_mail` varchar(25) NOT NULL,
  `user_password` varchar(55) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_phone`, `user_mail`, `user_password`, `role_id`) VALUES
(2, 'Ozan Can', 2147483647, 'ozancank11@gmail.com', 'fe703d258c7ef5f50b71e06565a65aa07194907f', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Tablo için indeksler `blog_users`
--
ALTER TABLE `blog_users`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Tablo için indeksler `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`permission_id`);

--
-- Tablo için indeksler `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- Tablo için AUTO_INCREMENT değeri `blog_users`
--
ALTER TABLE `blog_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `permission`
--
ALTER TABLE `permission`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
