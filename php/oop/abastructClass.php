<?php
abstract class abastructClass
{
    public $name;
    public $address;

    function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
    abstract function profile();
}

class childclass extends abastructClass
{
    function profile()
    {
        $details = "";
        $details .= "Name:" . $this->name . "<br>";
        $details .= "Address:" . $this->address . "<br>";
        return $details;
    }
}

$obj1 = new childclass("Karimul", "Dhaka");
echo $obj1 -> profile();

