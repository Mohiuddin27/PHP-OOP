<?php
/**
 * Traits are used to declare methods that can be used in multiple classes.
 *  Traits can have methods and abstract methods that can be used in multiple classes,
 *  and the methods can have any access modifier (public, private, or protected).
 */

 class A{
     public function play(){
         return "This is play function";
     }
 }

 trait B{
     public function eat(){
         return "this is eat function";
     }
 }
 trait D{
     public function dance(){
         return "This is dance function";
     }
 }

 class C extends A {
     use B;
     use D;
 }

 $c=new C;
 echo $c->eat();
 echo "<br>";
 echo $c->dance();