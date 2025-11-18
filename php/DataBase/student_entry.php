<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>New Student Entry</h3>
<?php
if(isset($_POST['submit'])){
//    echo $_POST['fname'];
//    echo $_POST['lname'];
//    echo $_POST['bdate'];
//    echo $_POST['notes'];

extract($_POST);

$sql = "INSERT INTO students VALUES (NULL,'$fname','$lname','$bdate','$notes')";

include_once("db_config.php");
$db ->query($sql);
if($db ->affected_rows){
    echo "Inserted";
}


}

?>




    <form action="" method="post">
        <input type="text" name="fname" placeholder="Enter your first name"> <br>
        <input type="text" name="lname" placeholder="Enter your last name"><br>
        <input type="date" name="bdate" placeholder="Birth Date"><br>
        <textarea name="notes" placeholder="enter notes"></textarea> <br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    <a href="student.php">Student List</a>
</body>
</html>