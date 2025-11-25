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
    $stid = $_POST['id'];
    include_once("class.php");
    $sheet = new student("result.txt");
   $output = $sheet->result("$stid");
   echo $output;
}



?>
    <form action="" method="post">
        <input type="number" name="id"> <br>
        <input type="submit" name="submit" value="Search">
    </form>
</body>
</html>