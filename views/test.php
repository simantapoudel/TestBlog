<?php

class Person 
{
    private $name;
    private $age;
    public $marriageAge = 18;

    public function __construct($name, $age, $marriageAge)
    {
        $this->name = $name;
        $this->age = $age;
        $this->marriageAge = $marriageAge;
    }

    public function display()
    {
        echo $this->name . "<br>" . $this->age . "<br>" . $this->marriageAge;
    }
}

$obj = new Person("Simanta", "23");
$obj->display();