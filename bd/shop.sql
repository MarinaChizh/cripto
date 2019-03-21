-- Посчитать среднее количество комиссионых всех продавцов
    SELECT AVG(`COMM`) FROM `salespeople`

-- Вывести список продавцов у которых комиссионные выше среднего
SELECT `SNUM` FROM `salespeople` WHERE `COMM`>(SELECT AVG (`COMM`) FROM `salespeople`)


-- Найти покупателей с самым большим рейтингом
SELECT * FROM `customers` WHERE `RATING`= (SELECT MAX(`RATING`) FROM `customers`)

-- Найти имя продавцов с самыми маленькими комиссионными
SELECT `SNAME` FROM `salespeople` WHERE `COMM`<(SELECT AVG (`COMM`) FROM `salespeople`)

-- Вывести список покупателей, которые связами с продавцами из Лондона

SELECT * FROM `customers` WHERE `SNUM` IN (SELECT `SNUM` FROM `salespeople` WHERE `CITY`="London")

-- Найти покупателей у которых рейтинг больше ВСЕХ рейтинга покупателей из лондона
SELECT * FROM `customers` WHERE`RATING` >ALL (SELECT `RATING` FROM `customers` WHERE `CITY`="London")

-- Найти продавцов у которых комиссион меньше чем хотя бы у одного продавца из лондона
  SELECT * FROM `salespeople` WHERE `COMM` < ANY(SELECT `COMM` FROM`salespeople` WHERE `CITY`="London") 

--   При группировки все записи в таблице разбиваются на группы с одинаковым значением 
-- в том поле по которому происходит группировка. При этом выводится могут только те поля 
-- по которым производятся группировка по остальным полям могут выводится их групповые характеристики
--  (мин, макс ср и т.д). 
-- ДЛя группировки использ ключевые слова "GROWP BY"

-- Посчитать средний размер комиссионных в каждом городе
SELECT AVG (`COMM`), `CITY` FROM `salespeople` GROUP BY `CITY`
-- Найти мин значение рейтинга покупателей в каждом городе
SELECT SUM(`AMT`) FROM `orders` GROUP BY `AMT`
-- Найти общую сумму заказов на каждую дату

-- Условия записанное после ключевого слова WHERE применяется к каждой отдельной записи таблицы, 
-- условия записанное после ключевого слова HAVING применяется к группам записи при этом
-- в условиях записанных после ключевого слова HAVING разрешается использовать функции агрегирования


-- Найти города в которых среднее значение рейтинга покупателей больше 200
SELECT AVG(`RATING`), `CITY` FROM `customers`  GROUP BY  `CITY` HAVING AVG(`RATING`)  > 200

-- Найти даты когда средняя сумма заказов была выше 1700
SELECT AVG(`AMT`), `ODATE` FROM `orders` GROUP BY `ODATE` HAVING AVG(`AMT`)>1700

-- Посчитать среднюю ЗП в каждом отделе вывести поля названия, отдела ср ЗП, отсортировать по величене ЗП

