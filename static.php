<?php

class staff{
    public static function info(){
        return "I am a good staff";
    }
}
//echo staff::info()

class age{
    public static function agecal($dateofbirth){
            echo (date('Y') - $dateofbirth);
    }
}
age::agecal(1996)


?>