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
    if(isset($_POST['submit'])){
        extract($_POST);
        $sql = "CALL manufacturer_insert('$name','$address','$contact')";
        $db->query($sql);
        if ($db->affected_rows) {
             echo "<h3> Successfully Insert </h3>";
         } 
    }
    
    
    ?>
    <form action="" method="post">
       <input type="text" name="name"> <br> <br>
       <input type="text" name="address"><br><br>
       <input type="text" name="contact"><br> <br>
       <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>