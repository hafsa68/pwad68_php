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


ob_start();
//$conn->close();
 $project_url ="http://localhost/pwad68/php/php_project/admin/";
?>