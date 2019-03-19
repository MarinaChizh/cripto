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
-- min    max    avg   count   sum
SELECT MIN(`AMT`) FROM `Orders`
SELECT AVG(`AMT`) FROM `Orders`
SELECT MAX(`AMT`) FROM `Orders`
SELECT COUNT(`AMT`) FROM `Orders`
SELECT COUNT(*) FROM `Orders`

SELECT * FROM `Orders` WHERE `AMT` ORDER BY `AMT`
-- Сортирует столбец

SELECT * FROM `salespeople` ORDER BY 2
-- Сортирует только по второму полю

UPDATE vedomost SET ZP=500 WHERE P = 'Сбыт';
-- в ТАБЛИЦЕ ведомость столбец ЗП зарплату работника меняется на 500 в определнном отделе

UPDATE vedomost SET ZP=ZP*1.2 WHERE P = 'Сбыт';
-- ЗП в отделе Сбыт увеличилась на 20%

UPDATE vedomost SET P='Бухгалтерия', ZP=1000 WHERE FIO LIKE  'Иванов%';
-- Всех ивановых перевели в бух и дали ЗП 1000


UPDATE vedomost SET P='Литейный цех', ZP=ZP/1.2 WHERE FIO LIKE  '%';
-- Всех сотрудников бух перевести в литейных цех и умен ЗП на 20%

INSERT INTO vedomost (FIO) values ('Васичкин')
-- Вставляет в ведомость новую строчку с фамилией васичкин

UPDATE vedomost SET P='Бухгалтерия', ZP=600 WHERE FIO='Васичкин'
-- Васичкина определили в отдел и назначили З/П

UPDATE vedomost SET P='Бухгалтерия', ZP=600 WHERE FIO LIKE'Васичкин%' and P IS null

DELETE
FROM vedomost
-- Удаляет всё содержимое таблицы

DELETE
FROM vedomost WHERE FIO LIKE 'Иванов%'
-- Удаляет всех Ивановых с таблицы

DELETE
FROM vedomost WHERE id LIKE '5%'
-- Удаляет с id 5

Drop table vedomost; 
-- Удаляет всю таблицу

Create table vedomost (id int,FIO varchar(50), ZP real); 
-- Создание таблицы