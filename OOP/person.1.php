<?php


class Person
{
    protected $name;
    protected $age;
    protected $city;

    function __construct($name, $age, $city)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setCity($city);
    }
    function setName($name)
    {
        if (strlen($name) > 2) {
            return $this->name = $name;
        } else {
            return false;
        }
    }
    function setAge($age)
    {
        if ($age > 20 && $age < 60) {
            return $this->age = $age;
        } else {
            return false;
        }
    }
    function setCity($city)
    {
        if (strlen($city) > 3) {
            return $this->city = $city;
        } else {
            return false;
        }
    }
    function getName()
    {

        return $this->name;
    }

    function getAge()
    {
        return $this->age;
    }

    function getCity()
    {
        return $this->city;
    }
    function info()
    {
        return "Имя: $this->name Возраст: $this->age Город: $this->city ";
    }
}


$person = new Person('Вася', '21', 'London');
echo $person->info();
    // echo $person->getName();
    // echo $person->getAge();
    // echo $person->getCity();
