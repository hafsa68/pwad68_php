<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Find Result</h3>


<?php
if(isset($_POST['search'])){
// echo print_r( $_POST['student_id']);
//  echo $_POST['student_id'];

$stid = $_POST['student_id'];

include("resultClass.php");

$rsheet = new student("result_sheet.txt");
$result = $rsheet -> result($stid);  
echo $result;
}

?>
    
    <form action="" method="POST">
        <input type="number" name="student_id">
        <input type="submit" name="search" value="SEARCH">

    </form>
</body>
</html>