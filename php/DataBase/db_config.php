<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "pwad68_person";

$db = new  mysqli($host, $user,$password,$database);
if($db-> connect_error){
    die("Connection faild:". $db-> connect_error);
}
//echo "connected successfully";



//$conn->close();
?>