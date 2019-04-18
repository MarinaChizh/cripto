<?php
class Person
{
    protected $name;
    protected $age;
    protected $city;

    function getName(){
        return $this->name;
    }

    function setName($name)
    {
        //  $this->name = $name;
         if (strlen($name)>2) {
             return $this->name = $name;
         } else{
             return false;
         }
    }

    function getAge(){
        return $this->age;
    }

    function setAge($age)
    {
    //  $this->age = $age;
     if ($age>20 && $age<60) {
        return $this->age = $age;
    } else{
        return false;
    }
    }
    function getCity(){
        return $this->city;
    }

    function setCity($city)
    {
        //  $this->city = $city;
         if (strlen($city)>3) {
            return $this->city = $city;
        } else{
            return false;
        }
    }

    function info()
    {
        return "Имя: $this->name Возраст: $this->age Город: $this->city ";
    }
}
$person = new Person;
$person->setName('Витя');
$person->setAge('21');
$person->setCity('London');
// echo $person->getName();
echo $person->info();
























?>