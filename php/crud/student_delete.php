<?php
include_once ("db_config.php");
$id = $_GET['id'];
$sql = "DELETE FROM students WHERE employeeID = '$id'";
$db->query($sql);
header("Location:index.php");
 ?>