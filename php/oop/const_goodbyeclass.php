<?php
class goodbyeclass{
    const MYMSG = "We are learning PHP OOP <br>";
    const MYMSG2 = "We are about constant using in oop";

    function info(){
      echo  self::MYMSG2;
    }
}
echo goodbyeclass::MYMSG;


$obj1 = new goodbyeclass;
$obj1 ->info();
?>