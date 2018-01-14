-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Січ 14 2018 р., 20:47
-- Версія сервера: 5.6.38
-- Версія PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `users`
--

-- --------------------------------------------------------

--
-- Структура таблиці `users info`
--

CREATE TABLE `users info` (
  `name` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `hobby` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `birthday` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `bank_account` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `about` text COLLATE utf8_unicode_520_ci,
  `interest` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Дамп даних таблиці `users info`
--

INSERT INTO `users info` (`name`, `last_name`, `age`, `sex`, `hobby`, `user_name`, `password`, `birthday`, `bank_account`, `about`, `interest`, `id`) VALUES
('vova', 'kayun', 31, 'male', 'games', 'vovan', '20d135f0f28185b84a4cf7aa51f29500', '14.07.86', '5555555555555', '', 'sport', 2),
('ann', 'smit', 25, 'female', 'books', 'ann', 'ea204361fe7f024b130143eb3e189a18', '', '', '', 'music', 3),
('Katya', 'Osadcha', 42, 'female', 'travell', 'hat', '68053af2923e00204c3ca7c6a3150cf7', '', '', '', 'art', 4),
('Nata', 'Drobot', 34, 'female', 'films', 'nata', 'f1c1592588411002af340cbaedd6fc33', '22.02.83', '', '', 'dance', 5),
('Lyda', 'Kerr', 27, 'female', 'films', 'lk', 'b59c67bf196a4758191e42f76670ceba', '03.04.1991', '', 'optimist', 'psychology', 6);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `users info`
--
ALTER TABLE `users info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `users info`
--
ALTER TABLE `users info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
