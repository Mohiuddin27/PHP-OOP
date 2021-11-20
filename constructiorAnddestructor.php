<?php

/**
 * CONSTRUCTOR: A constructor allows you to initialize an object's properties upon creation of the object.
 * DESTRUCTOR: A destructor is called when the object is destructed or the script is stopped or exited.
 */

 class A{
     public function __construct(){
         echo  "this is constructor class<br>";
     }
     public function __destruct(){
         echo "this is destructor class";
     }
     public function test(){
         return "THis is test class<br>";
     }
 }
 $a=new A;
 echo $a->test();