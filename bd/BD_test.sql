
CREATE TABLE `vedomost_norm` (
  `id` int(10) NOT NULL,
  `FIO` varchar(200) NOT NULL,
  `SPEC` varchar(200) NOT NULL,
  `RAZRIAD` int(125) NOT NULL,
  `%` int(125) NOT NULL,
  `ZP` varchar(200) NOT NULL,
  `PREMIA` int(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `vedomost_norm` (`id`, `FIO`, `SPEC`, `RAZRIAD`, `%`, `ZP`, `PREMIA`) VALUES
(1, 'Иванов В.В.', 'Слесарь', 2, 2, '200', NULL),
(2, 'Петров А.М.', 'Плотник', 5, 1, '300', NULL),
(3, 'Соловьев А.Г.', 'Плотник-станочник', 3, 0, '250', NULL),
(4, 'Кар И.М.', 'Плиточник', 3, 5, '300', NULL),
(5, 'Ворт Д.А.', 'Водитель', 1, 0, '400', NULL),
(6, 'Иванов Н.О.', 'Водитель', 2, 5, '450', NULL),
(7, 'Жукова П.К.', 'Повар', 3, 3, '500', NULL),
(8, 'Базаль Э.Е.', 'Слесарь', 3, 3, '300', NULL),
(9, 'Герцик Ж.У.', 'Плотник', 1, 3, '250', NULL),
(10, 'Наумчик О.В', 'Маляр', 4, 5, '500', NULL);

-- Расчёи размера премии
UPDATE `vedomost_norm` SET `PREMIA`=`ZP`*`%`/100 

-- Выбрать сдельщиков разряда 3, у которых % выполн норм между 1-3. Сортировка по ФИО. Вывод столбы: ФИО, Спец, Разряд, % выполн норм.
SELECT `id`, `FIO`, `SPEC`, `RAZRIAD`, `%` FROM `vedomost_norm` WHERE `RAZRIAD` = 3 AND `%` BETWEEN 1 AND 3 ORDER BY `vedomost_norm`.`FIO` ASC

-- Выбрать рабочих, у которых ЗП ниже среднего. Вывести табл номер, ФИО, ЗП
SELECT `id`, `FIO`, `ZP` FROM `vedomost_norm` WHERE `ZP`< (SELECT AVG(`ZP`) FROM `vedomost_norm`)


-- 
SELECT COUNT(`RAZRIAD`) AS "Количество", AVG(`ZP`) AS "Средняя ЗП", `RAZRIAD` AS "Разряд", MAX(`PREMIA`) AS "Премия"  FROM `vedomost_norm` GROUP BY `RAZRIAD` ORDER BY `RAZRIAD`





