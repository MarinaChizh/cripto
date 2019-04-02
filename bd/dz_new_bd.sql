CREATE TABLE `comment` (
    `id` INT(11), 
    `name` VARCHAR(200), 
    `city` VARCHAR(200), 
    `comment` VARCHAR(200)
    );

INSERT INTO `comment`(`id`, `name`, `city`, `comment`) VALUES 
(1,'Kate','London','Привет'),
(2,'Nasty','Brest','Всё супер'),
(3, 'Alexey','Luxembourg','Good');