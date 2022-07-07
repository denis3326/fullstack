-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 07 2022 г., 16:17
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shopp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `buy`
--

CREATE TABLE `buy` (
  `user_name` varchar(255) NOT NULL,
  `up_time` int(16) NOT NULL,
  `itm_title` varchar(255) NOT NULL,
  `itm_text` varchar(255) NOT NULL,
  `count` int(16) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` int(16) NOT NULL,
  `address` varchar(255) NOT NULL,
  `home_num` int(16) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `buy`
--

INSERT INTO `buy` (`user_name`, `up_time`, `itm_title`, `itm_text`, `count`, `country`, `phone`, `address`, `home_num`, `msg`) VALUES
('denis', 20220530, 'iphone', 'sx max', 1, 'israel', 544904758, 'leon blum', 32, '');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `itm_id` int(16) NOT NULL,
  `itm_title` varchar(255) NOT NULL,
  `itm_text` varchar(255) NOT NULL,
  `user_id` int(16) NOT NULL,
  `add_time` int(16) NOT NULL,
  `price` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`itm_id`, `itm_title`, `itm_text`, `user_id`, `add_time`, `price`) VALUES
(1, 'table', 'wood table', 1, 20220530, 70),
(3, 'car', 'red jeep toy', 1, 20220530, 6),
(1, 'table', 'wood table', 2, 20220530, 70),
(3, 'car', 'red jeep toy', 2, 20220530, 6),
(2, 'bed', 'white bed', 2, 20220530, 200),
(2, 'bed', 'white bed', 1, 20220530, 200),
(63, 'iphone', 'sx max', 1, 20220530, 230);

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `itm_id` int(16) NOT NULL,
  `category_id` int(16) NOT NULL,
  `itm_category` varchar(255) NOT NULL,
  `itm_title` varchar(255) NOT NULL,
  `itm_text` varchar(255) NOT NULL,
  `itm_img` varchar(255) NOT NULL,
  `time` int(16) NOT NULL,
  `price` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`itm_id`, `category_id`, `itm_category`, `itm_title`, `itm_text`, `itm_img`, `time`, `price`) VALUES
(1, 1, 'home', 'table', 'wood table', 'table.avif', 0, 70),
(2, 1, 'home', 'bood bed', 'white bed', 'bed.jpg', 0, 200),
(3, 2, 'toys', 'car', 'red jeep toy', 'car.jpg', 0, 6),
(59, 1, 'home', 'door', 'white door', 'doorw.jpg', 0, 300),
(63, 25, 'phones', 'iphone', 'sx max', 'phone.jpg', 0, 230),
(70, 25, 'phones', 'nokia', 'old phone', 'nokia.jpg', 0, 25),
(72, 2, 'toy', 'tree toy', 'for childrens under 4 years old', 'toy.jpg', 0, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `nav`
--

CREATE TABLE `nav` (
  `nav_id` int(16) NOT NULL,
  `nav_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `nav`
--

INSERT INTO `nav` (`nav_id`, `nav_title`) VALUES
(1, 'home'),
(25, 'phones'),
(2, 'toys');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(16) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `email`, `user_password`) VALUES
(0, 'admin', '', 'admin@gmail.com', '777'),
(1, 'denis', 'sitnitsky', 'denis@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(2, 'moshe', 'sira', 'mosh1@gmail.com', 'bcbe3365e6ac95ea2c0343a2395834dd');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itm_id`),
  ADD UNIQUE KEY `itm_title` (`itm_title`);

--
-- Индексы таблицы `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`nav_id`),
  ADD UNIQUE KEY `nav_title` (`nav_title`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `itm_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT для таблицы `nav`
--
ALTER TABLE `nav`
  MODIFY `nav_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
