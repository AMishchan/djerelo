-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 15 2017 г., 11:18
-- Версия сервера: 10.1.26-MariaDB
-- Версия PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `djerelo_base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL,
  `rooms_quontaty` int(2) DEFAULT NULL,
  `adults` int(2) NOT NULL,
  `kids` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `room_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name_ua` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name_ua`, `name_ru`, `name_en`, `img`) VALUES
(1, 'Люкс', 'Люкс', 'Lux', '3.png'),
(2, 'Апартаменти', 'Апартаменты', 'Apartment', '2.png'),
(3, 'Напівлюкс', 'Полулюкс', 'junior suite', '1.png'),
(4, 'Двомісний', 'Двухместный', 'Twoplace', '4.png'),
(5, 'Стандарт', 'Стандарт', 'Standard', '5.png'),
(6, 'Одномісний стандарт', 'Одноместный стандарт', 'Single standard', '2.png'),
(8, 'тест222', 'тест', 'test', '1509377170Penguins.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address_ua` varchar(510) NOT NULL,
  `address_ru` varchar(255) NOT NULL,
  `address_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `address_ua`, `address_ru`, `address_en`) VALUES
(1, '+38(044)272-46-04', 'dzheradmin@ukrnafta.com', 'м. Киев Вул. Обсерваторна 21', 'Г.Киев Ул. Обсерваторная 21', 'test2');

-- --------------------------------------------------------

--
-- Структура таблицы `feetback`
--

CREATE TABLE `feetback` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `feetback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feetback`
--

INSERT INTO `feetback` (`id`, `first_name`, `feetback`) VALUES
(1, 'test', 'test'),
(2, 'test1', 'test1'),
(3, 'test2', 'test2'),
(4, 'test3', 'test3'),
(5, 'test5', 'test5'),
(6, 'test', 'test'),
(7, 'test', 'test'),
(8, 'test', 'test'),
(9, 'test', 'test'),
(10, 'test', 'test'),
(11, 'test', 'test'),
(12, 'test', 'test'),
(13, 'test', 'test'),
(14, 'test', 'test'),
(15, 'test', 'test'),
(16, 'test', 'test'),
(17, 'test', 'test');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE `rooms` (
  `ID` int(11) NOT NULL,
  `room_number` varchar(10) NOT NULL,
  `short_description_ru` varchar(1000) DEFAULT NULL,
  `short_description_ua` varchar(255) DEFAULT NULL,
  `short_description_en` varchar(255) DEFAULT NULL,
  `full_description_ru` text,
  `full_description_ua` text,
  `full_description_en` text,
  `main_img` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rooms`
--

INSERT INTO `rooms` (`ID`, `room_number`, `short_description_ru`, `short_description_ua`, `short_description_en`, `full_description_ru`, `full_description_ua`, `full_description_en`, `main_img`, `category_id`) VALUES
(1, '32', 'test', 'test', 'test', 'test', 'test', 'test', NULL, 1),
(2, '123', 'test', 'test', 'test', 'test', 'test', 'test', NULL, 1),
(3, '456', 'test', 'test', 'test', 'test', 'test', 'test', '1510228578Chrysanthemum.jpg', 1),
(4, '10', 'test', 'test', 'test', 'test', 'test', 'test', '1510228754Desert.jpg', 1),
(5, '10', 'test', 'test', 'test', 'test', 'test', 'test', '1510228791Desert.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `room_images`
--

CREATE TABLE `room_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `room_images`
--

INSERT INTO `room_images` (`id`, `image`, `room_id`) VALUES
(1, '1510739784Desert.jpg', 3),
(2, '1510740207Hydrangeas.jpg', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$IPnWOTDLZybLDF85tTUlJugPvHw30fQFi3Z6YhR.FNvfN2bAAOLgC', NULL, '2017-09-19 04:59:16', '2017-09-19 04:59:16');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_ibfk_1` (`room_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feetback`
--
ALTER TABLE `feetback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `room_images`
--
ALTER TABLE `room_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_images_ibfk_1` (`room_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `feetback`
--
ALTER TABLE `feetback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `rooms`
--
ALTER TABLE `rooms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `room_images`
--
ALTER TABLE `room_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Ограничения внешнего ключа таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Ограничения внешнего ключа таблицы `room_images`
--
ALTER TABLE `room_images`
  ADD CONSTRAINT `room_images_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
