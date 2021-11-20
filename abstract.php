<?php

/**
 * Abstract-> abstract er instance hoi na. Tai first step e abstract ke onno class extend kore kaj korte hoi.
 *
 */

 abstract class A{
     public function danger(){
         return "This is danger method";
     }
 }


 class B extends A{

 }
 $b=new B;
 echo $b->danger();