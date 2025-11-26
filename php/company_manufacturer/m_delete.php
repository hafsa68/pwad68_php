<?php
include_once("db_config.php");
$id = $_GET['id'];
$sql = "DELETE FROM manufacture WHERE id ='$id'";
$db->query($sql);
header("Location:manufacturer.php");
?>