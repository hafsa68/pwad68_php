<?php 
$value1 = "hello world";
$value2 = & $value1;
$value2 = "php";

echo $value1;
?>