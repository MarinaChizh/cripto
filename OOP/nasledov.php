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
        $this->age = $age;
    }
    function getAge()
    {
        return $this->age;
    }
    function info()
    {
        return "Имя: $this->name Фамилия: $this->surname Возраст: $this->age ";
    }
}

class Student extends User
{

    function setAge($age)
    {
        $this->age = $age;
    }

    // function setAge($age){
    // // {

    // //     // if (($age >= 18) && ($age <= 25)) {
    // //         $this->age = $age;
    // //     // } else {
    // //     //     $this->age = Null;
    // //     // }
    // $this->age = $age;

    // }
}

// class Worker extends User
// { }




$user = new User('Витя', 'Пупкин', '82');
echo $user->info();
echo "<hr>";


$student = new Student('Петя', 'Пупкин', '22');
$student->setAge(22);
echo $student->info();
