<?php
class User
{
    protected $name;
    protected $surname;
    protected $age;

    public function __construct($name, $surname, $age)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setAge($age);
    }


    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }

    function setSurname($surname)
    {
        $this->surname = $surname;
    }
    function getSurname()
    {
        return $this->surname;
    }

    function setAge($age)
    {
        if ($this->check_age($age)) {
            $this->age = $age;
        } else {
            $this->age = null;
        }
    }
    function getAge()
    {
        return $this->age;
    }
    function info()
    {
        return "Имя: $this->name Фамилия: $this->surname Возраст: $this->age ";
    }

    function check_age($age)
    { }
}

class Student extends User
{

    function check_age($age)
    {
        if ($age >= 18 && $age <= 25) {
            return true;
        } else {
            return false;
        }
    }
}

class Worker extends User
{

    function check_age($age)
    {
        if ($age >= 18 && $age <= 63) {
            return true;
        } else {
            return false;
        }
    }
}






$user = new User('Витя', 'Пупкин', '22');
echo $user->info();
echo "<hr>";
$student = new Student('Петя', 'Пупкин', '22');
echo $student->info();
echo "<hr>";
$worker = new Worker("Гена", "Фил", "25");
echo $worker->info();
