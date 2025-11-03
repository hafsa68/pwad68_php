<?php

class Fruit{
    private $name;
    private $color;
// setter Function
    function set_name($name){
        $this ->name = $name;
        
    }
    function set_color($color){
        $this ->color = $color;

    }

    // getter Function
    function get_name_color(){
echo "Name :" . $this ->name . "<br>" . "color :" . $this ->color;
    }
  
    

}

$obj1 = new Fruit();
$obj1 ->set_name("Apple");
$obj1 ->set_color("Red");
$obj1->get_name_color();


//  var_dump($obj1);
?>