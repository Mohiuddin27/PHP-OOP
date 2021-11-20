<?php

/**
 * Final class-> final class ke kokonoi extend kora jai na.
 */
final class A{
    public function danger(){
        return "This is final class danger";
    }
}
$a= new A;
echo $a->danger();