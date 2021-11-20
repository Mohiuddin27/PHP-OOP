<?php
/***
 * public - the property or method can be accessed from everywhere. This is default.
  protected - the property or method can be accessed within the class and by classes derived from that class.
  private - the property or method can ONLY be accessed within the class.
 */

class A{
    public function danger(){
        return "This is from A class";
    }
}
class B{
    private function danger(){
        return "This is from B class";
    }
}
class C{
    protected function danger(){
        return "this is from C class";
    }
}
class D extends C{
   public function test(){
       return parent::danger();
   }
}

$a=new A;
$b=new B;
$c=new C;
$d=new D;
echo $a->danger();
echo "<br>";
echo $d->test();

