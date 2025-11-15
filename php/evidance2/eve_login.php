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


        $errors = array();

     $mynam  = $_REQUEST['username'];
        if(strlen($mynam)<4 || strlen($mynam)>8 ){
            $errors [] = "User name must be between 4 to 8 <br> <br>";
        }




      $email = $_REQUEST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors [] = "Email is not valid";
        }
    
    if (count($errors) > 0) {

           
            foreach ($errors as $error) {
                echo   $error;
            }
            
        } else{
            echo $mynam ."<br>";

            echo $email;
        }

        }

?>


    <form action="" method="post">

    <input type="text" name="username" placeholder="Enter your name"><br><br>
    <input type="text" name="email" placeholder="enter your Email"> <br> <br>
    <input type="submit" name="submit" value="Click">


    </form>
</body>
</html>