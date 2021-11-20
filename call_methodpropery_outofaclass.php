<?php

//call a method and property out of a class

class Student{
    public $name='Md Mohiuddin';
    public $age=10;
    public $skill='Laravel Developer';

    public function info(){
        echo "My name is Khan";
    }
    public function devs(){
        echo "I am dev";
    }
    public function food(){
        echo "I love to eat kacchi";
    }
}
$stu=new Student;
echo $stu->name;
echo "<br>";
echo $stu-> age;
echo "<br>";
echo $stu-> skill;
echo "<br>";
$stu-> info();
echo "<br>";
$stu->devs();
echo "<br>";
$stu->food();



?>