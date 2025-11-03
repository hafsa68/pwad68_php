<?Php
 class Fruit{
    public $name;
    public $color;


    function __construct($name,$color)
    {
        $this ->name = $name;
        $this ->color = $color;
    }


    function info(){
        echo "Name:" . $this ->name . "  Color:" .$this ->color . "<br>";
    }
 }

class Grape extends Fruit{
    function massage (){
        echo "I am function inside Grape class";
    }
}
 
$obj1 = new Fruit("Grape", "Green");
$obj1 -> info();
$obj2 = new Grape("Apple","Red");
$obj2 -> info();
$obj2 ->massage();
?>