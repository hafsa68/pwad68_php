<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
// $_GET $_POST $_REQUEST;
// echo "<pre>";
// print_r($_GET); //form er data dorar jonno
// echo "</pre>";

// $name = $_GET['name'];
// $email = $_GET['email'];
// $phone = $_GET['phone'];


if(isset ($_GET['submit'])){
     $name = $_GET['name'];
     $email = $_GET['email'];
     $phone = $_GET['phone'];


     echo "Name:" . $name . "<BR>";
     echo "email:" . $email . "<BR>";
     echo "phone:" . $phone . "<BR>";

}


?>

    <form action="" method="get">
Name: <br>
<input type="text" name="name" placeholder="Enter your name"> <br>
Email: <br>
<input type="text"  name="email" placeholder="Enter your Email"> <br>
Phone: <br>
<input type="text" name="phone" placeholder="Enter your Phone"> <br>
<input type="submit" name="submit" value="SUBMIT">


    </form>
</body>
</html>