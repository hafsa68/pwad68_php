<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if(isset($_REQUEST['submit'])){
       $email = $_REQUEST['email'];
       $password = $_REQUEST['password'];
       $hass_password = md5($password);
       $sql = "SELECT * FROM user WHERE email='$email' AND password='$hass_password'";
       $result = $db->query($sql);
       session_start();
       if($result->num_rows>0){
        $_SESSION['email'] = $email;
        echo "succcessful".$email;
       }else{
        echo "invalid".$email;
       }
    }
      
    ?>
    <form action="" method="post">
        <input type="email" name="email"><br>
        <input type="text" name="password"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <a href="student.php">click</a>
</body>
</html>