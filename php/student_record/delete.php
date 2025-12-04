<?php
include_once "db_config.php";
$id = $_REQUEST['id'];
$sql = "DELETE FROM student WHERE id = '$id'";
$db->query($sql);
header("Location:student.php");

?>