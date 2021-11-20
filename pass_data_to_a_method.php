<?php
  class Student{
      public function food($food){
          echo "I love to eat {$food}";
      }
  }

 $stu=new Student;
 //$stu->food("Kacchi vai");

 class foods{
     public function food($food1,$food2 = NULL){
         if($food2 != NULL){
             echo "I love to eat {$food1} and I also like to eat {$food2}";
         }else{
             echo "I love to eat {$food1}";
         }
     }
 }
$food=new foods;
//$food-> food("rice","kacchi");
$food->food("rice");




?>