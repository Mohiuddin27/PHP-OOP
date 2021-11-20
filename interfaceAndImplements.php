<?php

/**
 * The interface keyword is used to create interfaces.
 *  An interface is a structure which defines a list of methods that must exist in a class.
 *  Interfaces are a good way to allow many different classes to be used in the same way. 
 * The implements keyword can be used to make a class use an interface.
 */

 interface niom{
     public function play();
     public function eat();
 }
 interface kanon{
     public function dance();
 }

 class A implements niom, kanon{
     public function play(){
        echo "this is play<br>";
     }
     public function eat(){
        echo "this is eat<br>";
     }
     public function dance(){
      echo "this is danceing";
     }
 }
 $a=new A;
 $a->play();
 $a->eat();
 $a->dance();
