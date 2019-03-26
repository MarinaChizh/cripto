-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 12 2019 г., 19:26
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `vedomost`
--

CREATE TABLE `vedomost` (
  `id` int(11) NOT NULL,
  `FIO` varchar(255) DEFAULT NULL,
  `ZP` int(11) UNSIGNED DEFAULT NULL,
  `P` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vedomost`
--

INSERT INTO `vedomost` (`id`, `FIO`, `ZP`, `P`) VALUES
(1, 'Иванов Иван Иванович', 833, 'Литейный цех'),
(2, 'Петров Петр Петрович', 250, 'Литейный цех'),
(3, 'Иванов', 833, 'Литейный цех'),
(4, 'Иванов', 833, 'Литейный цех'),
(5, 'Васичкин М.И', 600, 'Цех'),
(6, 'Васичкин П.В.', 600, 'Бухгалтерия');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `vedomost`
--
ALTER TABLE `vedomost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `vedomost`
--
ALTER TABLE `vedomost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
