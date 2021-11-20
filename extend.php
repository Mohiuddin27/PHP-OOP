<?php

class A{
    public function info(){
        return "I am from info";
    }
    public function warning(){
        return "I am from warning";
    }
    public function danger(){
        return "I am from danger";
    }
}

class B extends A{

}
class C extends B{

}
class D extends C{
   public function danger(){
       return "I am from D class";
   }
   public function play(){
       return $this->danger();
        
   }
   public function next(){
       return parent::danger();
   }
}
$a=new A;
$b=new B;
$c=new C;
$d=new D;
echo $a->info();
echo "<br>";
echo $b->warning();
echo "<br>";
echo $c->danger();
echo "<br>";
echo  $d->play();
echo "<br>";
echo $d->next();