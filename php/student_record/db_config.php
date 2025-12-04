<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "pwad68_evidance2";
$db = new mysqli($host,$user,$password,$database);
if($db->connect_error){
    die("connection fails".$db->connect_error);
}



?>