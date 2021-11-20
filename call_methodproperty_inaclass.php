<?php

//call a method and property in a class

class Student{
    public $name='Md Mohiuddin';
    public $age=10;
    public $skill='Laravel Developer';

    public function info(){
        echo "My name is {$this -> name}. I am {$this -> skill} and I am {$this -> age} years old.";
    }
    public function devs(){
        echo $this->info();
    }
    public function food(){
        echo "I love to eat Kacchi";
    }
}

$stu = new Student;
$stu->info();
echo "<br>";
$stu->devs();


?>