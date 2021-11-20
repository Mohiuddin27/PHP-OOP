<?php

class Student{
    public $name='Asraf';
    public $age=30;
    public $skill="MERN stack";
    public function agecal($name,$year){
        $age=date('Y')-$year;
        return "Hi {$name}, you are {$age} years old.";
    }

}
$stu=new Student;
echo $stu->agecal("Md Mohiuddin",1996);