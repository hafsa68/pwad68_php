<?php

class car {
    public $name;
    public $year;


 function __construct($name) {
        echo "Hello " . $name . "<br>";
    }


    function __destruct()
    {
         echo "Bye Bye .." ;
    }
}
new car("Audi");

?>