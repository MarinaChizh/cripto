SELECT `FIO`, `ZP`/2.15 AS '$', `P` 
FROM `зп работника`;
-- Меняет зп работника с бел руб на доллар и переим наимен поля

SELECT * 
FROM `Salespeople`
-- Выодит таблицу на экран

SELECT `SNUM` AS 'НОМЕР', `SNAME` AS 'ИМЯ', `CITY` AS 'ГОРОД', `COMM` AS 'КОМИССИЯ' 
FROM `Salespeople`
-- Меняет имя поля с англ на рус


SELECT * 
FROM `Salespeople` WHERE `CITY` = 'London' OR `CITY` = 'Barcelona' OR `CITY` = 'New York'
-- Найти продавцов из городов лондон и барселова и нью йорк с помощью OR

SELECT * 
FROM `Salespeople` WHERE `CITY` IN ('San Jose', 'London')
-- Найти продавцов из городов лондон и барселова и нью йорк с помощью IN

SELECT * 
FROM `Salespeople` WHERE `COMM` >= 0.11 AND `COMM` <= 0.13
-- Ищет от 0,11 до 0,13 с помощью >=  <=

SELECT * 
FROM `Salespeople` WHERE `COMM` BETWEEN 0.11 AND 0.13
-- Ищет от 0,11 до 0,13 с помощью BETWEEN

SELECT 
* FROM `Salespeople` WHERE `COMM` BETWEEN 0.11 AND 0.13 AND NOT `COMM` IN (0.11, 0.13)
-- 

SELECT DISTINCT `CITY`, `RATING` FROM `customers`
-- Выодит в таблице города только по одному разу без повторений

-- % - любое кол-во символов включая ниодного 
-- _ - заменяет один любой символ

SELECT * FROM `customers` WHERE `CITY` LIKE 'L%'
-- Ищет слова на букву

SELECT * FROM `customers` WHERE `CITY` LIKE '%n%'
-- Ищет только букву одну во всех словах

SELECT * FROM `customers` WHERE `CNAME` LIKE '_e%'
-- Нашлась вторая буква е

-- Функции агрегирования расчитывает группавые характеристики для полей