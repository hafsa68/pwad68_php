<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['login'])) {
        $errors = array();
      $name  = $_POST['fname'];
      if(strlen($name)<4 || strlen($name)>8){
        $errors[] = "Name must be 4 or 8 word";
      }
        $email = $_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors[] =  "InValide email";
        }
        if(count($errors)>0){
        foreach($errors as $error){
            echo $error;
        }
        }else{
            echo $name;
            echo $email;
        }
    }
        
        
        ?>
    <form action="" method="POST">
    <input type="text" name="fname" placeholder="Enter name"> <br>
    <input type="email" name="email" placeholder="Enter email"> <br>
    <input type="submit" name="login" value="LOGIN">


    </form>
</body>
</html>