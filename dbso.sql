-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 30 2022 г., 13:50
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
-- База данных: `top`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chat`
--

CREATE TABLE `chat` (
  `username` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `chat`
--

INSERT INTO `chat` (`username`, `msg`) VALUES
('denis33', 'hello'),
('denis33', 'hello');

-- --------------------------------------------------------

--
-- Структура таблицы `friends`
--

CREATE TABLE `friends` (
  `userid` int(11) NOT NULL,
  `friendid` int(16) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `friends`
--

INSERT INTO `friends` (`userid`, `friendid`, `username`) VALUES
(5, 6, 'moshe'),
(5, 7, 'den'),
(6, 5, 'denis33');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `msgid` int(11) NOT NULL,
  `userid` int(16) NOT NULL,
  `senduserid` int(16) NOT NULL,
  `title` varchar(255) NOT NULL,
  `msgbody` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`msgid`, `userid`, `senduserid`, `title`, `msgbody`, `username`) VALUES
(1, 5, 6, 'hii its denis', 'how are you?', 'denis33'),
(2, 6, 5, 'hii denis', 'im ok and you?', 'moshe');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `postid` int(16) NOT NULL,
  `userid` int(16) NOT NULL,
  `username` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`postid`, `userid`, `username`, `title`, `text`, `img`) VALUES
(1, 5, 'denis33', 'cool', 'aquaman', 'Aquaman-principal.png'),
(2, 5, 'denis33', 'its me', 'hello everybody', '_MG_2606.JPG'),
(3, 5, 'denis33', 'my code', 'i love it', 'Screen Shot 2021-01-31 at 20.29.59.png'),
(4, 6, 'moshe', 'ha i love your photo', 'reading', '_MG_2605.JPG');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(16) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` int(16) NOT NULL,
  `country` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `firstname`, `lastname`, `phone`, `country`, `avatar`) VALUES
(5, 'denis33', 'denis@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'denis', 'sitnitsky', 544904758, 'israel', '_MG_2605.JPG'),
(6, 'moshe', 'mosh1@gmail.com', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9', 'moshe', 'sira', 544904748, 'israel', 'Aquaman-principal.png'),
(7, 'den', 'den@gmail.com', '43814346e21444aaf4f70841bf7ed5ae93f55a9d', 'deni', 'dert', 544904713, 'canada', 'me.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msgid`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
